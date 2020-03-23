<?php

use Illuminate\Database\Seeder;

class ClaseTenientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $index_clase = 0;
        foreach(App\Teniente::all() as $teniente) {  
            for ($i = 0; $i < 30; $i++) {            
                $index_clase++;
                $clase_teniente = new App\ClaseTeniente;
                $clase_teniente->teniente_id = $teniente->id;
                $clase_teniente->clase_id = $index_clase;
                $clase_teniente->save();
            } 
        }
    }
}
