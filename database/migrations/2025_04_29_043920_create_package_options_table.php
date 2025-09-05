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
        Schema::create('package_options', function (Blueprint $table) {
        $table->id();
        $table->unsignedInteger('option_index');
        $table->unsignedInteger('package_id')->nullable();
        $table->unsignedInteger('hotel_id')->nullable();
        $table->string('hotel_name');
        $table->date('checkin');
        $table->date('checkout');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_options');
    }
};
