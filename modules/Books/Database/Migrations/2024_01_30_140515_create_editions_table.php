<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Books\Models\Book;
use Modules\Books\Models\Format;
use Modules\Books\Models\Service;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('editions', static function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Book::class);
            $table->foreignIdFor(Format::class);
            $table->foreignIdFor(Service::class);
            $table->text('location');
            $table->string('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('editions');
    }
};
