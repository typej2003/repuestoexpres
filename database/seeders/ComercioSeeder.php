<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ComercioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comercios')->insert([
            'area_id' => '2',
            'user_id' => '1',
            'keyword' => 'repuestoexpres',
            'name' => 'RepuestoExpres',
            'avatar' => '',
            'banner' => '',
            'cellphonecontact' => '04165800403',
            'phonecontact'  => '0212-578-44-68',
            'email'  => 'ddrsistemas@gmail.com',
            'youtube'  => 'https://www.youtube.com/@ddrsistemas',
            'twitter'  => 'https://www.youtube.com/@ddrsistemas',
            'facebook'  => 'https://www.youtube.com/@ddrsistemas',
            'dominio' => 'http://www.repuestoexpres.com',
            'address'  => 'Caracas, Venezuela',
            'rifLetter' => 'J',
            'rifNumber' => '31512955-8',
            // 'dominio' => 'http://www.repuestoexpres.com',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('comercios')->insert([
            'area_id' => '2',
            'user_id' => '2',
            'keyword' => 'comercio2',
            'name' => 'Comercio 2',
            'avatar' => '',
            'banner' => '',
            'cellphonecontact' => '04165800403',
            'phonecontact'  => '0212-578-44-68',
            'email'  => 'ddrsistemas@gmail.com',
            'youtube'  => 'https://www.youtube.com/@ddrsistemas',
            'twitter'  => 'https://www.youtube.com/@ddrsistemas',
            'facebook'  => 'https://www.youtube.com/@ddrsistemas',
            'dominio' => 'http://www.repuestoexpres.com',
            'address'  => 'Caracas, Venezuela',
            'rifLetter' => 'J',
            'rifNumber' => '31512955-8',
            // 'dominio' => 'http://www.repuestoexpres.com',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('comercios')->insert([
            'area_id' => '2',
            'user_id' => '3',
            'keyword' => 'comercio3',
            'name' => 'Comercio 3',
            'avatar' => '',
            'banner' => '',
            'cellphonecontact' => '04165800403',
            'phonecontact'  => '0212-578-44-68',
            'email'  => 'ddrsistemas@gmail.com',
            'youtube'  => 'https://www.youtube.com/@ddrsistemas',
            'twitter'  => 'https://www.youtube.com/@ddrsistemas',
            'facebook'  => 'https://www.youtube.com/@ddrsistemas',
            'dominio' => 'http://www.repuestoexpres.com',
            'address'  => 'Caracas, Venezuela',
            'rifLetter' => 'J',
            'rifNumber' => '31512955-8',
            // 'dominio' => 'http://www.repuestoexpres.com',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
    }
}

        
        
        