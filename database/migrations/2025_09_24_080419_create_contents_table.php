<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('content_text')->nullable();
            $table->enum('music_type', ['single', 'album', 'ep'])->nullable();
            $table->string('artist')->nullable(); // исполнитель (для музыки)
            $table->string('genre'); // жанр
            $table->date('release_date')->nullable(); // дата релиза
            $table->string('cover_image')->nullable(); // обложка
            $table->string('label')->nullable();
            $table->unsignedInteger('favorites_count')->default(0); // добавили в избранное
            $table->unsignedInteger('reviews_count')->default(0); // количество рецензий
            $table->integer('average_rating')->nullable(); // средняя оценка
            $table->foreignId('added_by')->constrained('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
