<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'texto' => 'Automovil',
            'ruta' => 'automovil',
            'origen' => 'categories', // view or categories
            'menu' => 1,
            'posicion' => 1,
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'texto' => 'Motocicleta',
            'ruta' => 'motocicleta',
            'origen' => 'categories', // view or categories
            'menu' => 1,
            'posicion' => 2,
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'texto' => 'Menu 3',
            'ruta' => 'categories',
            'origen' => 'categories', // view or categories
            'menu' => 1,
            'posicion' => 3,
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'texto' => 'Menu 4',
            'ruta' => 'categories',
            'origen' => 'categories', // view or categories
            'menu' => 1,
            'posicion' => 4,
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'texto' => 'Menu 5',
            'ruta' => 'listNavidad',
            'origen' => 'view', // view or categories
            'menu' => 1,
            'posicion' => 5,
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

    }
}
