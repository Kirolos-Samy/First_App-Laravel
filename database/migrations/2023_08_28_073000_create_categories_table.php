<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migrations : structure tables in the database

// php artisan make:migration create_categories_table
// php artisan migrate                                   --- Execute the migration
// php artisan migrate:status                            --- Status of the migration
// php artisan migrate:refresh                           --- Refresh the migration   (drop migration then create it again but we will lose all data)
// php artisan migrate:fresh                             --- Fresh the migration     (same as refresh)
// php artisan migrate:rollback                          --- Rollback the migration  (drop the last migration -> greatest batch)
// php artisan migrate:rollback --step=2                 --- Rollback the migration  (drop the last 2 migrations)
// php artisan migrate:rollback --batch=2                --- Rollback the migration  (drop all migrations with batch=2)

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // This function executes when creating the migration
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();             // Default name for primary key in laravel is id
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // This function executes when deleting the migration
    {
        Schema::dropIfExists('categories');
    }


};
