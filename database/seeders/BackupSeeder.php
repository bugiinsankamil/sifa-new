<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class BackupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $backupDir = database_path('seeders/data');

        // $latestBackupFolder = collect(File::directories($backupDir))
        //     ->sortBy(fn($dir) => basename($dir))
        //     ->last();

        // if (is_null($latestBackupFolder)) {
        //     $this->command->error('No backup folder found in ' . $backupDir);
        //     return;
        // }

        $latestBackupFolder = $backupDir . '/latest_backup';

        $this->command->info('Using backup folder: ' . $latestBackupFolder);

        $files = File::files($latestBackupFolder);

        foreach ($files as $file) {
            $tableName = pathinfo($file->getFilename(), PATHINFO_FILENAME);
            $path = $file->getPathname();

            if (File::exists($path)) {
                $this->command->info('Seeding table: ' . $tableName);
                $data = json_decode(File::get($path), true);

                // $collection = collect($data);

                if (!empty($data)) {
                    DB::table($tableName)->truncate();

                    $n = 1000;

                    $chunk = array_chunk($data, $n, false); // Adjust chunk size as needed

                    $i = 0;

                    foreach ($chunk as $item) {
                        DB::table($tableName)->insert($item);

                        $i = $i + $n;

                        $this->command->info('Seeded ' . $i . ' records');
                    }
                }
            } else {
                $this->command->warn('File not found: ' . $path);
            }
        }

        Schema::enableForeignKeyConstraints();

        $this->command->info('Database seeding from backup completed.');
    }
}
