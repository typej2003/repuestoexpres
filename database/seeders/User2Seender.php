<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User2Seender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'identificationNac' => 'V',
            'identificationNumber' => '13053082',
            'name' => 'typej2004',
            'email' => 'typej2004@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'afiliado',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('datos_basicos')->insert([
            'user_id' => 3,
            'cellphonecode' => '0416',
            'cellphone' => '5800403',
            'address' => 'Cumana-Villa Felicidad I',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('users')->insert([
            'identificationNac' => 'V',
            'identificationNumber' => '20111222',
            'name' => 'luis',
            'email' => 'luis@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'afiliado',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('datos_basicos')->insert([
            'user_id' => 4,
            'cellphonecode' => '0416',
            'cellphone' => '5800403',
            'address' => 'Cumana-Villa Felicidad I',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
    }
}
