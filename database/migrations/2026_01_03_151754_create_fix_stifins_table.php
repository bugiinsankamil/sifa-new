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
        Schema::create('fix_stifins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('code', 2);
            $table->text('essential_resume');
            $table->text('brain_active_part');
            $table->text('equivalent_intelligence');
            $table->text('role');
            $table->text('advantage');
            $table->text('target');
            $table->text('hope');
            $table->text('brand_direction');
            $table->text('attitude_to_money');
            $table->text('physical_shape');
            $table->text('physical_strength');
            $table->text('physical_function');
            $table->text('pcychometrics');
            $table->text('four_keywords');
            $table->text('learning_style');
            $table->text('learn_motivation');
            $table->text('self_clue');
            $table->text('chemistry');
            $table->text('field_of_study');
            $table->text('field_of_career');
            $table->text('positive_and_negative');
            $table->text('deep_explanation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fix_stifins');
    }
};
