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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('full_name');
            $table->text('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->float('shipping_fees', 20, 4)->nullable();
            $table->float('tax', 20, 4)->nullable();
            $table->float('vat', 20, 4)->nullable();
            $table->float('discount', 20, 4)->nullable();
            $table->string('promo_code')->nullable();
            $table->float('total', 20, 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
