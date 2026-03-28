<?php

use App\Enums\Genders;
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
        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('catalog_id')->constrained('catalogs')->restrictOnDelete();
            $table->foreignId('professor_type_id')->constrained('professor_types')->restrictOnDelete();
            $table->foreignId('professor_position_id')->constrained('professor_positions')->restrictOnDelete();
            $table->boolean('is_active')->default(true);
            $table->decimal('max_unit_load', 10, 1);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('suffix')->nullable();
            $table->enum('gender', Genders::values());
            $table->integer('age')->nullable();
            $table->string('photo_path')->nullable();
            $table->timestamps();
            // Add your columns here
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors');
    }
};
