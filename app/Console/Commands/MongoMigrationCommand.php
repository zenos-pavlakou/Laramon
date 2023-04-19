<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MongoMigrationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:mongo-migration {name : name of the migrations file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new MongoDB migration file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');

        $fileName = date('Y_m_d_His') . '_' . $name . '.php';

        $path = database_path('migrations/' . $fileName);

        
        $sourcePath = base_path('stubs');
        $stub = file_get_contents("$sourcePath/mongo-migration.stub");

        // Check if the string value begins with "create_" and remove it
        if (strpos($name, 'create_') === 0) {
            $name = substr($name, 7);
        }

        // Check if the string ends with "_table" and remove it
        if (substr($name, -6) === '_table') {
            $name = substr($name, 0, -6);
        }

        $stub = str_replace('{{ table }}', $name, $stub);

        file_put_contents($path, $stub);

        $this->info("MongoDB migration created successfully.");

        return 0;
    }
}

