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
        Schema::create('review_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('review_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['like', 'author_like'])->default('like');
            $table->timestamps();


            $table->unique(['review_id', 'user_id']);
        });


        Schema::table('reviews', function (Blueprint $table) {

            $table->dropColumn(['likes_count', 'author_likes_count']);
        });

        Schema::table('reviews', function (Blueprint $table) {

            $table->unsignedInteger('likes_count')->default(0)->after('review_type');
            $table->unsignedInteger('author_likes_count')->default(0)->after('likes_count');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_likes');

        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn(['likes_count', 'author_likes_count']);
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->unsignedInteger('likes_count')->default(0);
            $table->unsignedInteger('author_likes_count')->default(0);
        });
    }
};