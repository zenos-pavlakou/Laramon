<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

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


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        //CHECKS IF MIGRATION FILE EXISTS
        $name = $this->camelCaseToSnakeCase($this->argument('name'));
        $name .= "s_table.php";
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
        $fileName = $fileNames[0];

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
        $cols = "[";
        foreach ($columns as $columnName => $columnType) {
            $cols .= "'" . $columnName . "', ";
        }
        $cols = substr($cols, 0, strlen($cols) - 2);
        $cols .= "]";



        //CREATES THE MODEL
        $name = $this->argument('name');
        $modelName = ucfirst($name);
        $stub = File::get(base_path('stubs/mongodb-model.stub'));
        $stub = str_replace('{{modelName}}', $modelName, $stub);
        $stub = str_replace("{{collectionName}}", "'" . $this->camelCaseToSnakeCase($modelName) . "s'", $stub);
        $stub = str_replace("{{fillableArray}}", $cols, $stub);
        $fileName = $modelName . '.php';
        File::put(app_path('/' . $fileName), $stub);
        $this->info($modelName . ' model created successfully.');

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
        file_put_contents(base_path('routes/web.php'), "\n// ==================== CRUD ROUTES FOR " . $modelName . " ====================", FILE_APPEND);
        $endpoint = $this->camelToHyphen($modelName);
        $indexRoute = "\nRoute::get('/$endpoint', '$controllerName@index');";
        file_put_contents(base_path('routes/web.php'), $indexRoute, FILE_APPEND);

        $showRoute = "\nRoute::get('/$endpoint/{id}', '$controllerName@show');";
        file_put_contents(base_path('routes/web.php'), $showRoute, FILE_APPEND);

        $updateRoute = "\nRoute::put('/$endpoint/{id}', '$controllerName@update');";
        file_put_contents(base_path('routes/web.php'), $updateRoute, FILE_APPEND);

        $destroyRoute = "\nRoute::delete('/$endpoint/{id}', '$controllerName@destroy');";
        file_put_contents(base_path('routes/web.php'), $destroyRoute, FILE_APPEND);

        $storePath = "\nRoute::post('/$endpoint', '$controllerName@store');";
        file_put_contents(base_path('routes/web.php'), $storePath, FILE_APPEND);
        file_put_contents(base_path('routes/web.php'), "\n// ==================== END OF CRUD ROUTES FOR " . $modelName . " ====================\n", FILE_APPEND);
        $this->info($modelName . ' CRUD routes created successfully.');



        return 0;
    }
}
