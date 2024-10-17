<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('photo', 1024);
            $table->text('description');
            $table->string('title', 256);
            $table->decimal('price', 8, 2, true);
            $table->string('colour', 64)->nullable();
            $table->string('size', 128)->nullable();
            $table->enum('tool', ['uncinetto', 'ferri_lineari', 'ferri_circolari'])->default('on_request');
            $table->text('composition')->nullable();
            $table->string('origin', 32)->default('Italia');
            $table->enum('availability', ['disponibile_ora', 'su_richiesta'])->default('su_richiesta');
            $table->timestamps();

            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
