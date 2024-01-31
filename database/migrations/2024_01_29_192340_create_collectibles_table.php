<?php

use App\Models\Type;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('collectibles', static function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Type::class);
            $table->string('slug');
            $table->string('name');
            $table->text('description');
            $table->integer('release_year');
            $table->string('status')->default('created');
            $table->date('purchase_date')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('collectibles');
    }
};
