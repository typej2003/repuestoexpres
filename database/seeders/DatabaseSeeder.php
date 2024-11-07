<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BancoSeeder::class,
            SettingsSeeder::class,
            MetodoPagoSeeder::class,
            AreaSeeder::class,
            ComercioSeeder::class,
            CategorySeeder::class,
            SupplierSeeder::class,
            ManufacturersSeeder::class,
            BrandSeeder::class,
            ModeloSeeder::class,
            MotorSeeder::class,
            ContainerSeeder::class,
            ProductsSeeder::class,
        ]);
    }
}
