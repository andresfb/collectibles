<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Books\Models\Book;
use Modules\Books\Models\Series;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('book_series', static function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Book::class);
            $table->foreignIdFor(Series::class);
            $table->timestamps();

            $table->unique(['book_id', 'series_id'], 'book_series_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('book_series');
    }
};
