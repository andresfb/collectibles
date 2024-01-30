<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('genres', static function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->string('type')->default('book');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('genres');
    }
};
