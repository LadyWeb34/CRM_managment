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
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pribor_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('staff_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('execute')->comment('Дата выполнения');
            $table->text('comment')->comment('Комментарий');
            $table->string('status')->comment('Статус');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operations');
    }
};
