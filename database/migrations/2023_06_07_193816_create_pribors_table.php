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
        Schema::create('pribors', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Наименование прибора СИ');
            $table->foreignId('type_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete()->comment('Тип прибора СИ');
            $table->string('number')->comment('Инвертарный номер');
            $table->string('date_realese')->comment('Дата выпуска');
            $table->string('date_start')->comment('Дата начала пользования');
            $table->string('date_end')->comment('Дата окончания пользования');
            $table->string('status')->comment('Статус');
            $table->foreignId('departament_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete()->comment('Отдел');
            $table->text('description')->comment('Описание');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pribors');
    }
};
