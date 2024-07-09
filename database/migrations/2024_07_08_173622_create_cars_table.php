<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('variant_id')->constrained()->onDelete('cascade');
            $table->foreignId('dealer_id')->constrained()->onDelete('cascade');
            $table->enum('condition', ['new', 'used']);
            $table->decimal('price', 10, 2);
            $table->year('year');
            $table->integer('mileage')->nullable();
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
