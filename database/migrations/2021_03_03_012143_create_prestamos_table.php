<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->timestamps();
            $table->string('id_prestamo');
            $table->string('casado');
            $table->string('dependientes');
            $table->string('educacion');
            $table->string('independiente');
            $table->float('i_d'); //ingreso deudor
            $table->float('i_c'); // ingreso codeudor
            $table->float('c_p'); // cantidad prestamo
            $table->integer('p_p');  //plazo_prestamo
            $table->integer('historia_credito');
            $table->string('tipo_propiedad');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
