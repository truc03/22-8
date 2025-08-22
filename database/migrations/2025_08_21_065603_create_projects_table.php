<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
       Schema::create('projects', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description')->nullable();
    $table->date('start_date')->nullable(); // 👈 thêm
    $table->date('end_date')->nullable();   // 👈 thêm
    $table->string('status')->default('Đang thi công'); // 👈 thêm
    $table->timestamps();
});

    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
