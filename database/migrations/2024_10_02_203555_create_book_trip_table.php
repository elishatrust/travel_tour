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
        Schema::create('book_trip', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->date('arrival_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->integer('adults')->nullable();
            $table->integer('children')->nullable();
            $table->string('accommodation')->nullable();
            $table->unsignedBigInteger('package_id')->nullable();
            $table->decimal('cost', 8, 2)->nullable();
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('book_trip');
    }
};
