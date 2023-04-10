<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curriculum;

class CurriculumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curriculums =[
            [
                'description_of_maintenance' => 'se jodio el mouse',
                'maintenance_date' => '1998-02-21'
            ]
            ];
            foreach($curriculums as $curriculum){
                Curriculum::create([
                    'description_of_maintenance' => $curriculum['description_of_maintenance'],
                    'maintenance_date' => $curriculum['maintenance_date']
                ]);
            }
    }
}
