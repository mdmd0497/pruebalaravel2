<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prestamos')->insert([
            "id_prestamo"=>"a1",
            "casado"=>"Si",
            "dependientes"=>"3",
            "educacion"=>"Graduado",
            "independiente"=>"si",
            "i_d"=> 15000.50,
            "i_c"=> 18000.50,
            "c_p"=> 250000.75,
            "p_p"=> 6,
            "historia_credito"=>1,
            "tipo_propiedad"=>"Urbana"

        ]);
        DB::table('prestamos')->insert([
            "id_prestamo"=>"b1",
            "casado"=>"No",
            "dependientes"=>"2",
            "educacion"=>"Graduado",
            "independiente"=>"si",
            "i_d"=> 25000.50,
            "i_c"=> 18000.50,
            "c_p"=> 450000.75,
            "p_p"=> 12,
            "historia_credito"=>0,
            "tipo_propiedad"=>"Urbana"

        ]);
        DB::table('prestamos')->insert([
            "id_prestamo"=>"c1",
            "casado"=>"Si",
            "dependientes"=>"1",
            "educacion"=>"Graduado",
            "independiente"=>"si",
            "i_d"=> 15000.50,
            "i_c"=> 18000.50,
            "c_p"=> 30000.75,
            "p_p"=> 6,
            "historia_credito"=>0,
            "tipo_propiedad"=>"Rural"

        ]);
        DB::table('prestamos')->insert([
            "id_prestamo"=>"d1",
            "casado"=>"Si",
            "dependientes"=>"3",
            "educacion"=>"No graduado",
            "independiente"=>"si",
            "i_d"=> 15000.50,
            "i_c"=> 18000.50,
            "c_p"=> 410000.75,
            "p_p"=> 42,
            "historia_credito"=>1,
            "tipo_propiedad"=>"Semi Urbana"

        ]);
    }
}
