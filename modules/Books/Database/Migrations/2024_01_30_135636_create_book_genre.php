<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Books\Models\Book;
use Modules\Books\Models\Genre;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('book_genre', static function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Book::class);
            $table->foreignIdFor(Genre::class);
            $table->timestamps();

            $table->unique(['book_id', 'genre_id'], 'book_genre_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('book_genre');
    }
};
