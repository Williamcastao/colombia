<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Requeriment;

class RequerimentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requeriments=[
            [
                'description' =>'se jodio el teclado',
                'maintenance_date'=> '2023-09-21',
                'time_maintenance' => '2-5-03'

            ]
            ];
            foreach($requeriments as $requeriment){
                Requeriment::create([
                    'description'=> $requeriment['description'],
                    'maintenance_date'=> $requeriment['maintenance_date'],
                    'time_maintenance'=> $requeriment['time_maintenance']
                ]);
            }
    }
}
