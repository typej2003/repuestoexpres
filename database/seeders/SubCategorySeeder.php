<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category Marca
        DB::table('subcategories')->insert([
            'name' => 'RENAULT',
            'avatar' => 'renault.png',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'PEUGEOT',
            'avatar' => 'peugeot.png',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 2,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'CITROEN',
            'avatar' => 'citroen.png',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 3,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'TOYOTA',
            'avatar' => 'toyota.png',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 4,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'WOLKSWAGEN',
            'avatar' => 'wolkswagen.png',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 5,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'FORD',
            'avatar' => 'ford.png',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 6,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'FIAT',
            'avatar' => 'fiat.png',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 7,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'CHEVROLET',
            'avatar' => 'chevrolet.png',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 8,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'CHERY',
            'avatar' => 'chery.png',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 9,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Aceite y liquidos
        DB::table('subcategories')->insert([
            'name' => 'Aceite de motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aceite de transmisión y aceite de diferencial',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aceite hidráulico',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aceite para transmisión automática',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aditivo para aceite de motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aditivos y tratamientos para la transmisión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Agua destilada',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Anticongelante',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Limpiador del filtro de partículas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Líquido de dirección asistida',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Líquido de escape diésel / adblue',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Líquido de frenos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Líquido limpiaparabrisas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        //Frenos

        DB::table('subcategories')->insert([
            'name' => 'Acumulador de presión del sistema de frenos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Anillo de sensor de abs',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de vacío del sistema de frenado',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Botón de freno de mano',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cable de freno de mano',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Chapa protectora de disco de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cilindro de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cilindro principal de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Depósito de líquido de frenos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Discos de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Discos y pastillas de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Fijador de tornillos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Forro de frenos alto rendimiento',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Freno de disco alto rendimiento',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Freno de mano',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Freno de tambor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Herramientas de frenos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de luz de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de presión, hidráulica de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de casquillos guía, pinza de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de accesorios de las zapatas de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de accesorios, pastillas de frenos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de frenos de tambor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la bomba de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de pinzas de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación del bombín de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación, eje de freno de estacionamiento',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Latiguillos de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Líquido de frenos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Lubricantes',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Módulo ABS',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pasta de montaje',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pastillas de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pintura pinza de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pinzas de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pistón de la pinza de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Regulador del freno de tambor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé de protección contra sobretensión del ABS',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Repartidor de frenos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor ABS',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de aceleración longitudinal / transversal',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de desgaste de pastillas de frenos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Servofreno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de pinzas de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 42,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sprays y aerosoles técnicos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 43,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tambor de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 44,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Tornillo de disco de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 45,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubería de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 46,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubos de vacío',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 47,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control del abs / asr',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 48,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Zapatas de freno',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 49,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Zapatas de freno de mano',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 50,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Filtros

        DB::table('subcategories')->insert([
            'name' => 'Caja del filtro de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro caja de cambios automática',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aire',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aire de alto flujo',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aire secundario',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de combustible',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de habitáculo',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de la bomba de combustible',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro deshidratador',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro hidráulico de dirección',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta del soporte del filtro de aceite del motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de cambio de aceite de caja automática',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de filtros',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Llave de filtro',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de la caja del filtro de aire',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de admisión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula del filtro de combustible',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Motor

        DB::table('subcategories')->insert([
            'name' => 'Aceite de motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Ajustador árbol de levas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Amortiguador de la correa trapezoidal poli V',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Amortiguador hidráulico de la correa de distribución',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Anticongelante',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Apoyo del cigüeñal',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Árbol de levas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Árbol intermedio de compensación y árbol de compensación',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Balancines',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Biela',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bobina',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de agua',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de agua + kit de correa poli V',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de vacío del sistema de frenado',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba inyectora',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Brida de carburador',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Brida de refrigerante',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bujías',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bujías de precalentamiento',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cable del acelerador',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cables de bujías',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cadena de accionamiento',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cadena de distribución',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Camisa de cilindro',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Carril de deslizamiento',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cárter de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Casquillo de pie de biela',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Casquillo de biela',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Caudalímetro',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cigüeñal',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cojinetes del árbol de levas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Colector de escape',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Colectores de admisión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Conector de la bujía de encendido',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Correa de alternador',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Correa de distribución',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Correa trapezoidal',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cuerpo de mariposa',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Culata',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Discos del cigüeñal',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Distribuidor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 42,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Embrague viscoso de ventilador',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 43,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Enfriador de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 44,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Enfriador EGR',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 45,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 46,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aire',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 47,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aire de alto flujo',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 48,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de combustible',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 49,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Herramientas para motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 50,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Intercooler',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 51,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Inyectores',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 52,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de juntas culata',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 53,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de juntas de motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 54,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta anular, conducto aire admisión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 55,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de agua refrigerante',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 56,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de bomba de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 57,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de bomba de agua',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 58,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de cárter de distribución',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 59,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de colector de admisión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 60,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de colector de escape',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 61,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de culata',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 62,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de enfriador de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 63,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de inyector',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 64,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de tapa de balancines',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 65,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de tapón de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 66,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de tapón de cárter',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 67,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de termostato',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 68,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de valvula egr',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 69,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de válvulas, guía de válvulas y ajuste de válvulas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 70,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta del cárter',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 71,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta del soporte del filtro de aceite del motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 72,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta del turbo',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 73,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta, ventilación del bloque motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 74,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit completo de juntas del motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 75,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de cadena de distribución',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 76,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de correa de alternador',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 77,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de distribución',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 78,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de distribución con bomba de agua',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 79,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de juntas de la tapa de balancines',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 80,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de juntas de turbocompresor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 81,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito de ventilación del cárter',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 82,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito intercambiador de calor de la calefacción',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 83,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguitos y tubería',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 84,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Módulo de encendido',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 85,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Módulo EGR',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 86,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piezas de carburador',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 87,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piñon del árbol de levas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 88,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piñon del cigüeñal',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 89,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pistón',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 90,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea de cigüeñal',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 91,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea de inversión y guía, correa de distribución',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 92,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea inversión / guía, correa poli V',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 93,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea tensora, correa dentada',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 94,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea tensora, correa poli V',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 95,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea tensora, correa trapezoidal',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 96,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Protector antiempotramiento del motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 97,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Radiador',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 98,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rampa de inyección',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 99,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Regulador de presion de combustible',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 100,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé de calentadores',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 101,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén de árbol de levas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 102,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén de la bomba de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 103,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén del cigüeñal',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 104,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retenes de válvulas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 105,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rodillo guía / desviación, correa trapecial',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 106,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rotor de distribuidor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 107,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Segmentos de pistón',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 108,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Semiconos de válvula',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 109,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de árbol de levas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 110,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de cigüeñal',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 111,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de detonación',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 112,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de la presión del combustible',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 113,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de nivel de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de nivel de combustible',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 115,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de la presión de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 116,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión del aire de admisión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 117,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión del turbo',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 118,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 119,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del aire de admisión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 120,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del  refrigerante',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 121,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del ventilador del radiador',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 122,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor del nivel del líquido refrigerante',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 123,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor del pedal del acelerador',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 124,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor tps',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 125,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sistema eléctrico del motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 126,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sonda lambda (NOx, O2)',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 127,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 128,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de balancines',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 129,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de correa de distribución',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 130,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de delco',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 131,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de llenado de aceite y junta de llenado de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 132,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de radiador',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 133,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapón de cárter',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 134,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapón de dilatación',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 135,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapón del radiador de refrigerante',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 136,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Taqués hidráulicos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 137,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tensor de cadena de distribución',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 138,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tensor de la correa de distribución',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 139,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tensor de la correa trapecial poli V',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 140,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Termostato',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 141,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillo de la polea',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 142,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillo del cojinete del cigüeñal',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 143,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillo del volante de inercia',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 144,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillos de culata',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 145,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Transductor de presión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 146,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de admisión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 147,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de aspiración de bomba del aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 148,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de engrase del turbo',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 149,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo flexible, ventilación del bloque motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 150,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo intercooler',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 151,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tuerca y tornillo de biela',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 152,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Turbo',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 153,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control, mando del motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 154,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de admisión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 155,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de alivio',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 156,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de control del árbol de levas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 157,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de escape',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 158,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de ralentí (IAC)',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 159,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de regulación del aire de admisión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 160,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula EGR',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 161,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula PCV',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 162,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Varilla de aceite',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 163,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Vaso de expansión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 164,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Ventilador de radiador',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 165,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Volante bimasa',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 166,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

    }
}
