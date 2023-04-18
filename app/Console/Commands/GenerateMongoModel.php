<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;



class GenerateMongoModel extends Command 
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crudify:mongo-collection {name : The name of the collection}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a fully functioning CRUD API for the MongoDB collection';

    public function camelToHyphen($str) {
      $str = preg_replace('/(?<!^)([A-Z])/', '-$1', $str); // insert a hyphen before every uppercase letter that's not at the beginning of the string
      return strtolower($str); // convert to lowercase
    }

    public function camelCaseToSnakeCase($input){
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $input));
    }

    public function routeExists($route) {
        $existingRoutes = file_get_contents(base_path('routes/web.php'));
        if (strpos($existingRoutes, $route) !== false) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        //CHECKS IF MIGRATION FILE EXISTS
        $name = $this->camelCaseToSnakeCase($this->argument('name'));
        $segments = explode('_', $name);
        $lastSegment = end($segments); 
        $pluralizedLastSegment = Str::plural($lastSegment);
        $name = str_replace($lastSegment, $pluralizedLastSegment, $name);
        $name .= "_table.php";
        $timestamp_pattern = '/^\d{4}_\d{2}_\d{2}_\d{6}_/';
        $pattern = database_path('migrations/*' . preg_replace($timestamp_pattern, '', $name));
        $files = glob($pattern);

        $fileNames = [];
        foreach ($files as $file) {
            $fileName = basename($file);
            $fileNames[] = $fileName;
        }


        if (count($fileNames) > 0) {
            $this->info('Migration file ' . $name . ' found!');
        } else {
            $this->error('Migration file ' . $name . ' not found!');
            exit();
        }

        //DETECTS COLUMNS
        $fileName = $fileNames[0]; //TODO, MAYBE MAKE IT CHECK ALL FILES?
        $contents = file_get_contents($file);
        preg_match('/Schema::create\(\'(.*)\', function \(Blueprint \$table\)/', $contents, $matches);
        $tableName = $matches[1];
        $columns = [];
        preg_match_all('/\$table->([a-zA-Z]+)\([\'"]([a-zA-Z_\d]+)[\'"]/', $contents, $matches);
        foreach ($matches[1] as $i => $type) {
            $columnName = $matches[2][$i];
            $columns[$columnName] = $type;
        }
        $this->info("Table: $tableName");
        if(count($columns) > 0) {
            $cols = "[";
            foreach ($columns as $columnName => $columnType) {
                $cols .= "'" . $columnName . "', ";
            }
            $cols .= "]";
        } else {
            $cols = "[]";
        }



        //CREATES THE MODEL
        $name = $this->argument('name');
        $modelName = ucfirst($name);

        $file_path = base_path('app/' . $modelName . '.php');

        if (File::exists($file_path)) {
            $this->info('The ' . $modelName . ' model already exists. Skipping...');
        } else {
            $stub = File::get(base_path('stubs/mongodb-model.stub'));
            $stub = str_replace('{{modelName}}', $modelName, $stub);
            $stub = str_replace("{{collectionName}}", "'" . $this->camelCaseToSnakeCase($modelName) . "s'", $stub);
            $stub = str_replace("{{fillableArray}}", $cols, $stub);
            $fileName = $modelName . '.php';
            File::put(app_path('/' . $fileName), $stub);
            $this->info($modelName . ' model created successfully.');
        }

        //CREATES THE CONTROLLER
        $name = $this->argument('name');
        $modelName = ucfirst($name);
        $stub = File::get(base_path('stubs/mongodb-controller.stub'));
        $stub = str_replace('{{modelName}}', $modelName, $stub);
        $controllerName = $modelName . "Controller";
        $stub = str_replace('{{controllerName}}', $controllerName, $stub);
        $fileName = $controllerName . '.php';
        File::put(app_path('/Http/Controllers/' . $fileName), $stub);
        $this->info($modelName . ' controller created successfully.');


        //ADDS THE ROUTES

        $endpoint = $this->camelToHyphen($modelName);
        $segments = explode('_', $endpoint);
        $lastSegment = end($segments); 
        $pluralizedLastSegment = Str::plural($lastSegment);
        $endpoint = str_replace($lastSegment, $pluralizedLastSegment, $endpoint);

        $indexRoute = "\nRoute::get('/$endpoint', '$controllerName@index');";

        if(!$this->routeExists($indexRoute)) {
            file_put_contents(base_path('routes/web.php'), $indexRoute, FILE_APPEND);
        }


        $showRoute = "\nRoute::get('/$endpoint/{id}', '$controllerName@show');";
        if(!$this->routeExists($showRoute)) {
            file_put_contents(base_path('routes/web.php'), $showRoute, FILE_APPEND);
        }

        $updateRoute = "\nRoute::put('/$endpoint/{id}', '$controllerName@update');";
        if(!$this->routeExists($updateRoute)) {
            file_put_contents(base_path('routes/web.php'), $updateRoute, FILE_APPEND);
        }

        $destroyRoute = "\nRoute::delete('/$endpoint/{id}', '$controllerName@destroy');";
        if(!$this->routeExists($destroyRoute)) {
            file_put_contents(base_path('routes/web.php'), $destroyRoute, FILE_APPEND);
        }

        $storeRoute = "\nRoute::post('/$endpoint', '$controllerName@store');";
        if(!$this->routeExists($storeRoute)) {
            file_put_contents(base_path('routes/web.php'), $storeRoute, FILE_APPEND);
        }

        file_put_contents(base_path('routes/web.php'), "\n\n", FILE_APPEND);
        $this->info($modelName . ' CRUD routes created successfully.');

        return 0;
    }
}