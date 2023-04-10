<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
            'names' =>'Jan',
            'last_names'=>'Bohorquez',
            'email' =>'jan@gmail.com',
            'num_doc' =>'123456',
            'num_phone' =>'45621',
            'user_name' =>'jancarlito',
            'password'=> 'cundinamarca'
            ],
            [
            'names' =>'William',
            'last_names'=>'Castaño',
            'email' =>'william@gmail.com',
            'num_doc' =>'45332',
            'num_phone' =>'7852',
            'user_name' =>'willitan',
            'password'=> 'password'
            ],
            [
            'names' =>'Diego',
            'last_names'=>'Aguazaco',
            'email' =>'diego@gmail.com',
            'num_doc' =>'78552',
            'num_phone' =>'662',
            'user_name' =>'dieguito',
            'password'=> 'password'
            ]
        ];
        foreach($users as $user){
            User::create([
                'names' =>$user ['names'],
            'last_names'=>$user ['last_names'],
            'email' =>$user ['email'],
            'num_doc' =>$user ['num_doc'],
            'num_phone' =>$user ['num_phone'],
            'user_name' =>$user ['user_name'],
            'password'=> $user ['password']
            ]);
        }
    }
}
