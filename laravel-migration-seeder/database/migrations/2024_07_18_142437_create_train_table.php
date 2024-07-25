<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',20);
            $table->string('Stazione_di_partenza',50);
            $table->string('Stazione_di_arrivo',50);
            $table->dateTime('Orario_di_partenza');
            $table->dateTime('Orario_di_arrivo');
            $table->string('codice treno',20);
            $table->tinyInteger('n_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train');
    }
};
