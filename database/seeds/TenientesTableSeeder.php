<?php

use Illuminate\Database\Seeder;

class TenientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Teniente::class, 3)->create();
    }
}
