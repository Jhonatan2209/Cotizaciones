<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateTableProspecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospecto', function (Blueprint $table) {
            $table->id();
            $table->char('ruc',11);
            $table->string('razon_social',255);
            $table->char('numero_doc',8);
            $table->string('tipo_doc',8);
            $table->string('nombre',45);
            $table->string('email',45);
            $table->char('celular',9);
            $table->timestamps();
        });
        DB::table('prospecto')->insert([
            [
                'ruc'=>'20600787595',
                'razon_social' => 'CORPORACION PERUANA GTP EMPRESA INDIVIDUAL DE RESPONSABILIDAD LIMITADA',
                'tipo_doc' => 'DNI',
                'numero_doc' => '75458702',
                'nombre' => 'Jhonatan Adriano Soto',
                'email' => 'jhonatanadrianosoto@gmail.com',
                'celular' => '991260922',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prospecto');
    }
}
