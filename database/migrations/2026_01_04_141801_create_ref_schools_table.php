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
        Schema::create('ref_schools', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('ref_branch_id')->constrained();
            $table->foreignId('fix_education_level_id')->constrained();
            $table->foreignId('fix_school_type_id')->constrained();
            $table->string('name');
            $table->string('numeric_code', 6)->unique();
            $table->string('npsn')->nullable();
            $table->string('accreditation')->nullable();
            $table->boolean('is_bos_receiver')->default(false);
            $table->string('street_address')->nullable();
            $table->foreignId('loc_district_id')->constrained();
            $table->foreignId('loc_village_id')->constrained();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_schools');
    }
};
