<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Books\Models\Author;
use Modules\Books\Models\Book;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('author_book', static function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Author::class);
            $table->foreignIdFor(Book::class);
            $table->timestamps();

            $table->unique(['author_id', 'book_id'], 'author_book_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('author_book');
    }
};
