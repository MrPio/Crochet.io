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
            $table->text('photo');
            $table->text('description');
            $table->string('name', 32);
            $table->string('title', 256);
            $table->decimal('price', 8, 2, true);
            $table->unsignedSmallInteger('amount')->default(0);
            $table->integer('discount')->nullable();
            $table->string('colour', 64)->nullable();
            $table->string('size', 128)->nullable();
            $table->text('composition')->nullable();
            $table->string('origin', 32)->default('Italia');
            $table->enum('availability', ['Disponibile ora', 'Su ordinazione'])->default('Su ordinazione');
            $table->timestamps();

            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('tool_id')->nullable()->constrained()->nullOnDelete();;
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
