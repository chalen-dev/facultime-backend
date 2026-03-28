<?php

use App\Enums\Semesters;
use App\Enums\Visibility;
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
        Schema::create('workspaces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('semester', Semesters::values());
            $table->year('start_academic_year');
            $table->year('end_academic_year');
            $table->time('timetable_start_time');
            $table->time('timetable_end_time');
            $table->enum('visibility', Visibility::values());
            $table->text('description')->nullable();
            $table->timestamps();
            // Add your columns here
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workspaces');
    }
};
