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
        Schema::table('contacts', function (Blueprint $table) {
            if(!Schema::hasColumn('contacts','fullname')){
                $table->string('fullname')->nullable();
            }
            if(!Schema::hasColumn('contacts','phone')){
                $table->string('phone')->nullable();
            }
            if(!Schema::hasColumn('contacts','email')){
                $table->string('email')->nullable();
            }
            if(!Schema::hasColumn('contacts','subject')){
                $table->string('subject')->nullable();
            }
            if(!Schema::hasColumn('contacts','message')){
                $table->string('message')->nullable();
            }
            if(!Schema::hasColumn('contacts','status')){
                $table->string('status')->default(0);
            }
            if(!Schema::hasColumn('contacts','archive')){
                $table->string('archive')->default(0);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
        });
    }
};
