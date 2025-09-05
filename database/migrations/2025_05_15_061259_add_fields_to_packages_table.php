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
        Schema::table('packages', function (Blueprint $table) {
            $table->string('include')->nullable();
            $table->string('exclude')->nullable();
            $table->string('terms')->nullable();
            $table->string('need_to_kow')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packages', function (Blueprint $table) {
            //
            $table->dropColumn('include');
            $table->dropColumn('exclude');
            $table->dropColumn('terms');
            $table->dropColumn('need_to_kow');
        });
    }
};
