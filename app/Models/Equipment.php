<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table='equipments';
    protected $primarykey="id";
    protected $fillable = [
        'mark',
        'model',
        'serial',
        'size_disk',
        'type_disk',
        'ram',
        'processor',
        'operating_systems',
        'usb_ports',
        'audio_ports',
        'microphone_ports',
        'hdmi_ports',
        'vga_ports',
        'dvi_ports',
        'sd_ports',
        'cd_ports',
        'ps2_ports',
    ];
}
