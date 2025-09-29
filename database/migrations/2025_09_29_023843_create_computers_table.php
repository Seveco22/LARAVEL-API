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
        Schema::create('computers', function (Blueprint $table) {
            $table->bigIncrements('id_computer'); // PK bigint
            $table->string('computer_brand', 255)->nullable(false); // varchar
            $table->string('computer_model', 255)->nullable(false); // varchar
            $table->double('computer_price')->nullable(false)->default(0.0); // double
            $table->integer('computer_ram_size')->nullable(false)->default(4); // integer
            $table->boolean('computer_is_laptop')->nullable(false)->default(false); // boolean
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
