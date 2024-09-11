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
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->foreignId('category_id')->constrained('categories');
      $table->foreignId('brand_id')->constrained('brands');
      $table->string('name');
      $table->string('slug')->unique();
      $table->string('sku')->unique();
      $table->text('description')->nullable();
      $table->text('content')->nullable();
      $table->string('image')->nullable();
      $table->boolean('status')->default(1);
      $table->boolean('featured')->default(0);
      $table->boolean('best_seller')->default(0);
      $table->boolean('new')->default(0);
      $table->boolean('hot')->default(0);
      $table->boolean('sale_off')->default(0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('products');
  }
};
