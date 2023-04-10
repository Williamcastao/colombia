<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primarykey ='id';
    protected $fillable =[
        'names',
        'last_names',
        'email',
        'num_doc',
        'num_phone',
        'user_name',
        'password',
    ];
}
