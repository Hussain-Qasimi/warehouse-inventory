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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
                $table->string('name');
                $table->integer('quantity')->default(0);
                $table->string('unit')->default('pcs'); // واحد اندازه‌گیری
                $table->foreignId('warehouse_id')->constrained()->onDelete('cascade');
                $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
                $table->foreignId('brand_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
