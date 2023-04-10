<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table="tickets";
    protected $primarykey = "id";
    protected $fillable =[
        'creation_date',
        'creation_time',
    ];
}
