<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients =[
            [
                'names' => 'andres',
                'last_names' => 'salasar',
                'email' => 'andres@gmail.com',
                'num_doc' => '45112',
                'num_phone' => '4552',
                'address' => 'calle falsa 123',
                'company'=> 'san cayetano'
            ]
            ];
            foreach($clients as $client){
                Client::create([
                    'names'=> $client['names'],
                    'last_names'=> $client['last_names'],
                    'email'=> $client['email'],
                    'num_doc'=> $client['num_doc'],
                    'num_phone'=> $client['num_phone'],
                    'address'=> $client['address'],
                    'company'=> $client['company']
                ]);
            }
    }
}
