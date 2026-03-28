<?php

use App\Enums\EmailTypes;
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
        Schema::create('professor_emails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professor_id')->constrained('professors')->restrictOnDelete();
            $table->string('email');
            $table->enum('type', EmailTypes::values());
            $table->string('description')->nullable();
            $table->timestamps();
            // Add your columns here
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professor_emails');
    }
};
