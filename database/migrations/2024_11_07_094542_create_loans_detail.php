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
        Schema::create('loans_detail', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('loan_id')->references('id')->on('loans');
            $table->foreignId('book_id')->references('id')->on('books');
            $table->boolean('is_return');
            $table->timestamps();

            // foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans_detail');
    }
};
