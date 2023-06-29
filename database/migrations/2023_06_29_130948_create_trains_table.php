<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda", 100);         
            $table->string("stazione_partenza",100);
            $table->string("stazione_arrivo",100);
            $table->time('orario_partenza',2);
            $table->time("orario_arrivo",2);
            $table->string("codice_treno",100);
            $table->integer("num_carrozze");
            $table->string("in_orario");
            $table->string("cancellato");            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
