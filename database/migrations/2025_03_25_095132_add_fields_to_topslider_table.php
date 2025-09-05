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
        Schema::table('topslider', function (Blueprint $table) {
            $table->string('offer_line_color')->nullable()->after('id');
            $table->string('heading_color')->nullable()->after('heading');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('topslider', function (Blueprint $table) {
            
            $table->dropColumn('offer_line_color');
            $table->dropColumn('heading_color');
        });
    }
};
