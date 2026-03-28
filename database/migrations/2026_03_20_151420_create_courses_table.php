<?php

use App\Enums\AcademicPeriodDuration;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('catalog_id')->constrained('catalogs')->restrictOnDelete();
            $table->string('title')->unique();
            $table->string('name')->unique();
            $table->enum('academic_period_duration', AcademicPeriodDuration::values());
            $table->decimal('professor_unit_load', 10, 1);
            $table->integer('total_days_per_academic_term');
            $table->time('class_duration');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
