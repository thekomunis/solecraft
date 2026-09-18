<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Optimize table columns to match actual data size instead of defaulting to VARCHAR(255).
     */
    public function up(): void
    {
        // 1. Optimize services table columns
        DB::statement('ALTER TABLE services MODIFY COLUMN name VARCHAR(120) NOT NULL');
        DB::statement('ALTER TABLE services MODIFY COLUMN slug VARCHAR(120) NOT NULL');
        DB::statement('ALTER TABLE services MODIFY COLUMN estimated_days TINYINT UNSIGNED NOT NULL');

        // 2. Optimize recommendation_logs table columns
        DB::statement('ALTER TABLE recommendation_logs MODIFY COLUMN session_id VARCHAR(64) NULL');
        DB::statement('ALTER TABLE recommendation_logs MODIFY COLUMN shoe_type VARCHAR(50) NOT NULL');
        DB::statement('ALTER TABLE recommendation_logs MODIFY COLUMN material VARCHAR(50) NOT NULL');

        // 3. Optimize users table columns
        DB::statement('ALTER TABLE users MODIFY COLUMN name VARCHAR(100) NOT NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN email VARCHAR(150) NOT NULL');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE services MODIFY COLUMN name VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE services MODIFY COLUMN slug VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE services MODIFY COLUMN estimated_days INT NOT NULL');

        DB::statement('ALTER TABLE recommendation_logs MODIFY COLUMN session_id VARCHAR(255) NULL');
        DB::statement('ALTER TABLE recommendation_logs MODIFY COLUMN shoe_type VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE recommendation_logs MODIFY COLUMN material VARCHAR(255) NOT NULL');

        DB::statement('ALTER TABLE users MODIFY COLUMN name VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN email VARCHAR(255) NOT NULL');
    }
};
