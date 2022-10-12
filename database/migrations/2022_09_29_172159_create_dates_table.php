<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_doc',20);
            $table->string('tipo_coti',45);
            $table->timestamps();
        });
        DB::table('dates')->insert([
            [
                'tipo_doc'=>'DNI',
                'tipo_coti' => 'FactMype',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'tipo_doc'=>'CE',
                'tipo_coti' => 'FirmEasy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'tipo_doc'=>'DNIE',
                'tipo_coti' => 'FerreFact',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dates');
    }
}
