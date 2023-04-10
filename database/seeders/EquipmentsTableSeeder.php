<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipment;

class EquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $equipments =[
            [
                'mark'=> 'lenovo',
                'model'=>'asd',
                'serial' =>'stdsa',
                'size_disk' =>'grande',
                'type_disk'=> 'entrada',
                'ram'=>'8 ram',
                'processor'=>'intel',
                'operating_ports' =>'windows',
                'usb_ports' => 1,
                'audio_ports'=> 1,
                'microphone_ports' => 1,
                'hdmi_ports'=> 1,
                'vga_ports'=> 1,
                'dvi_ports' => 1,
                'sd_ports' => 1,
                'cd_ports' => 1,
                'ps2_ports' =>1
            ]
            ];
            foreach($equipments as $equipment){
                Equipment::create([
                    'mark' => $equipment['mark'],
                    'model'=> $equipment['model'],
                    'serial'=> $equipment['serial'],
                    'size_disk'=> $equipment['size_disk'],
                    'type_disk'=> $equipment['type_disk'],
                    'ram'=> $equipment['ram'],
                    'processor'=> $equipment['processor'],
                    'operating_ports'=> $equipment['operating_ports'],
                    'usb_ports'=> $equipment['usb_ports'],
                    'audio_ports'=> $equipment['audio_ports'],
                    'microphone_ports'=> $equipment['microphone_ports'],
                    'hdmi_ports'=> $equipment['hdmi_ports'],
                    'vga_ports'=> $equipment['vga_ports'],
                    'dvi_ports'=> $equipment['dvi_ports'],
                    'sd_ports'=> $equipment['sd_ports'],
                    'cd_ports'=> $equipment['cd_ports'],
                    'ps2_ports'=> $equipment['ps2_ports'],


                ]);
            }
    }
}
