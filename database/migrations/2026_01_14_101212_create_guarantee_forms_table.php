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
        Schema::create('guarantee_forms', function (Blueprint $table) {
            $table->id();
            $table->longText('text_uz');
            $table->longText('text_ru');
            $table->longText('text_en');
            $table->string('company_name');
            $table->string('region');
            $table->string('address');
            $table->string('employee_count');
            $table->string('full_name');
            $table->string('phone');
            $table->text('additional_info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guarantee_forms');
    }
};
