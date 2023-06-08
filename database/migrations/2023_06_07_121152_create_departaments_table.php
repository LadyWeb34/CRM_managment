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
        Schema::create('departaments', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Отделение');
            $table->longText('adress')->comment('Фактический адрес');
            $table->string('company')->comment('Полное название организации');
            $table->string('phone')->comment('Телефон');
            $table->string('people')->comment('Ответственное лицо');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departaments');
    }
};
