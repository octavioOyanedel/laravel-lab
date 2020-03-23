<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(TenientesTableSeeder::class);
        $this->call(ClasesTableSeeder::class);
        $this->call(ClaseTenientesTableSeeder::class);
    }
}
