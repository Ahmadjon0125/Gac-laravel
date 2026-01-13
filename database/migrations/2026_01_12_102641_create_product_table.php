<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('mainTitle_uz');
            $table->string('mainTitle_ru');
            $table->string('mainTitle_en');
            $table->longText('mainText_uz');
            $table->longText('mainText_ru');
            $table->longText('mainText_en');
            $table->string('mainBg');
            $table->string('mainImg');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->longText('text_uz');
            $table->longText('text_ru');
            $table->longText('text_en');
            $table->json('slides1')->nullable();
            $table->json('slides2')->nullable();
            $table->string('lastTitle_uz');
            $table->string('lastTitle_ru');
            $table->string('lastTitle_en');
            $table->longText('lastText_uz');
            $table->longText('lastText_ru');
            $table->longText('lastText_en');
            $table->string('image');
            $table->string('slug_uz');
            $table->string('slug_ru');
            $table->string('slug_en');
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
