<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ReplaceMigrationStubsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'replace:migration-stubs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $basePath = base_path('vendor/laravel/framework/src/Illuminate/Database/Migrations/stubs');
        $sourcePath = base_path('stubs');

        $files = [
            'migration.create.stub' => 'create.stub',
            'migration.stub' => 'default.stub',
            'migration.update.stub' => 'update.stub',
        ];

        foreach ($files as $targetFile => $sourceFile) {
            $targetPath = "$basePath/$targetFile";
            $sourcePath = "$sourcePath/$sourceFile";

            if (file_exists($targetPath)) {
                unlink($targetPath);
            }

            copy($sourcePath, $targetPath);
        }
    }
}
