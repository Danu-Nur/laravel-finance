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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name')->nullable(); // Nama budget
            $table->decimal('amount', 30, 2)->nullable(); // Jumlah budget
            $table->decimal('percentage', 30, 2)->default(0); // Persentase potongan dari income
            $table->date('start_date')->nullable(); // Tanggal mulai budget
            $table->date('end_date')->nullable(); // Tanggal akhir budget (jika ada)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
