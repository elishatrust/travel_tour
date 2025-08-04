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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('adult')->nullable();
            $table->string('child')->nullable();
            $table->string('cost')->nullable();
            $table->string('more')->nullable();
            $table->string('order_number')->nullable();
            $table->string('token')->nullable();
            $table->string('status')->default('0');
            $table->string('archive')->default('0');
            $table->unsignedInteger('updated_by');
            $table->unsignedInteger('created_by');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
