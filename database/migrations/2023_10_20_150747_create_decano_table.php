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
        Schema::create('decano', function (Blueprint $table) {
            $table->string('coddecano',2);
            $table->string('nomdecano',100);
            $table->string('facultad',2);
            $table->primary('coddecano');
            $table->foreign('facultad')->references('codfacultad')->on('facultad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decano');
    }
};
