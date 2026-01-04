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
        Schema::create('ref_branches', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('location');
            $table->string('name');
            $table->string('alphabet_code', 3)->unique();
            $table->string('numeric_code', 2)->unique();
            $table->string('street_address')->nullable();
            $table->foreignId('loc_district_id')->constrained();
            $table->foreignId('loc_village_id')->constrained();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_branches');
    }
};
