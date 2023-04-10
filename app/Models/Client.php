<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $primarykey ='id';
    protected $fillable =[
        'names',
        'last_names',
        'email',
        'num_doc',
        'num_phone',
        'address',
        'company',
    ];
}
