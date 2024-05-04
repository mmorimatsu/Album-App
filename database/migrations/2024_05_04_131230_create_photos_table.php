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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->text('photoby')->nullable();
            $table->text('date')->nullable();
            $table->text('location')->nullable();
            $table->text('gear')->nullable();
            $table->text('lens')->nullable();
            $table->text('SS')->nullable();
            $table->text('Fnumber')->nullable();
            $table->text('ISO')->nullable();
            $table->text('edit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
