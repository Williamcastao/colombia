<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tickets=[
            [
                'creation_date' =>'2023-01-21',
                'creation_time' => '21:40:39'
            ]
            ];
            foreach($tickets as $ticket){
                Ticket::create([
                    'creation_date'=> $ticket['creation_date'],
                    'creation_time'=> $ticket['creation_time']
                ]);
            }
    }
}
