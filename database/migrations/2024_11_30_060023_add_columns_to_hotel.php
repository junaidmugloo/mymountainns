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
        Schema::table('hotel', function (Blueprint $table) {
            $table->float('double_room',10,2)->nullable();
            $table->float('extra_bed',10,2)->nullable();
            $table->float('extra_child',10,2)->nullable();
            $table->float('infant',10,2)->nullable();
            $table->float('MAP',10,2)->nullable();
            $table->float('CP',10,2)->nullable();
            $table->float('EP',10,2)->nullable(); 
            $table->string('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotel', function (Blueprint $table) {
            $table->dropColumn(['double_room', 'extra_bed','extra_child','infant'
        ,'MAP','CP','EP','address']);
        
        });
    }
};
