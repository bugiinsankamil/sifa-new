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
        Schema::create('loc_countries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('country_name_indonesia');
            $table->string('country_name_english');
            $table->string('fifa_code');
            $table->string('iso3166_1_alpha_2');
            $table->string('iso3166_1_alpha_3');
            $table->string('iso3166_1_numeric');
            $table->string('dial_code');
            $table->string('iso4217_currency_name');
            $table->string('iso4217_currency_alpha_code');
            $table->string('iso4217_currency_numeric_code');
            $table->string('independency');
            $table->string('region_code');
            $table->string('region_name');
            $table->string('subregion_code');
            $table->string('subregion_name');
            $table->string('other_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loc_countries');
    }
};
