<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // INT AUTO_INCREMENT PRIMARY KEY
            $table->string('title', 255); // VARCHAR(255) NOT NULL
            $table->text('body'); // TEXT NOT NULL
            
            // Современный способ Laravel для создания INT NOT NULL + FOREIGN KEY + ON DELETE CASCADE
            $table->foreignId('author_id')->constrained('users')->cascadeOnDelete();
            
            $table->timestamps(); // TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        });
    }

    public function down(): void
    {
        // Сначала удаляем posts, чтобы не нарушить внешние ключи в comments
        Schema::dropIfExists('posts');
    }
};
