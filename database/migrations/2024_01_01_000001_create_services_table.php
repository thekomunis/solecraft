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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('slug', 120)->unique();
            $table->text('description');
            $table->decimal('price', 12, 2);
            $table->tinyInteger('estimated_days')->unsigned();
            $table->string('image_url')->nullable();
            $table->json('supported_types');
            $table->json('supported_materials');
            $table->json('unsuited_materials')->nullable();
            $table->json('target_issues');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
