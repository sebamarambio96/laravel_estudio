<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *  Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('description', 255)-> nullable();
            $table->boolean('done')->default(false);
            // $table->integer('example');
            // $table->unsignedIntegerinteger('example2');
            // $table->bigInteger('example3');
            // $table->unsignedBigInteger('example3');
            // $table->text('example4');
            // $table->float('example5');
            // $table->double('example6');
            // $table->enum('example7',['DRAFT', 'PUBLISH', 'DELETE']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
