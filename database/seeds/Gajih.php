<?php

use Illuminate\Database\Seeder;

class Gajih extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gajihs = [
        ['nama'=>'Hilmi Satriaji F' , 'jabatan'=>'Lead'    , 'jenis_kelamin'=>'Laki-laki','alamat'=>'Bandung','total_gaji'=>'$50.000'],
        ['nama'=>'Hilma Nabila R'   , 'jabatan'=>'CO Lead' , 'jenis_kelamin'=>'Perempuan','alamat'=>'Bandung','total_gaji'=>'$40.000'],
        ['nama'=>'Hirumi Sanisa T'  , 'jabatan'=>'Super'   , 'jenis_kelamin'=>'Perempuan','alamat'=>'Bandung','total_gaji'=>'$30.000'],
        ['nama'=>'Handani Rasyid E' , 'jabatan'=>'Senior'  , 'jenis_kelamin'=>'Laki-laki','alamat'=>'Bandung','total_gaji'=>'$20.000'],
        ['nama'=>'Hisma Nia P'      , 'jabatan'=>'Junior'  , 'jenis_kelamin'=>'Perempuan','alamat'=>'Bandung','total_gaji'=>'$10.000']
    ];

        DB::table('gajihs')->insert($gajihs);
    }
}
