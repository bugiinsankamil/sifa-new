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
            $table->string('name')->nullable();
            $table->string('name_english')->nullable();
            $table->string('capital_city')->nullable();
            $table->string('continent')->nullable();
            $table->string('region_name')->nullable();
            $table->string('subregion_name')->nullable();
            $table->string('fifa_code')->nullable();
            $table->string('iso3166_1_alpha_2')->nullable();
            $table->string('iso3166_1_alpha_3')->nullable();
            $table->string('iso3166_1_numeric')->nullable();
            $table->string('dial_code')->nullable();
            $table->string('iso4217_currency_name')->nullable();
            $table->string('iso4217_currency_alpha_code')->nullable();
            $table->string('iso4217_currency_numeric_code')->nullable();
            $table->string('tld')->nullable();
            $table->string('geoname_id')->nullable();
            $table->string('wiki_page')->nullable();
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
