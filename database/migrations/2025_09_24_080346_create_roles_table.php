<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // admin, reviewer, author 
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Опционально: добавить базовые роли
        DB::table('roles')->insert([
            ['name' => 'admin', 'description' => 'Administrator'],
            ['name' => 'reviewer', 'description' => 'Content Reviewer'],
            ['name' => 'author', 'description' => 'Author Content'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};