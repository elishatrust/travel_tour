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
        Schema::table('book_trip', function (Blueprint $table) {
            if(!Schema::hasColumn('book_trip','nationality')){
                $table->string('nationality')->nullable()->after('name');
            }
            if(!Schema::hasColumn('book_trip','message')){
                $table->string('message')->nullable()->after('package_id');
            } 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('book_trip', function (Blueprint $table) {
            //
        });
    }
};
