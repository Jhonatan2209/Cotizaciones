<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateTablePlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_plan',45);
            $table->string('tipo_plan',45);
            $table->float('precio_plan',6,2);
            $table->timestamps();
        });
        
        DB::table('plan')->insert(
            [
                'nombre_plan'=>'FactMype',
                'tipo_plan' => 'Mensual',
                'precio_plan' => '39.00',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan');
    }
}
