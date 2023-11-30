<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seat;
use League\Csv\Reader;

class SeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(storage_path('csv/superduperFinal.csv'), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            Seat::create([
                'id' => $record['id'],
                'studio_id' => $record['studio_id'],
                'row' => $record['row'],
                'number' => $record['number'],
                'created_at' => $record['created_at'],
                'updated_at' => $record['updated_at'],
            ]);
        }
    }
}
