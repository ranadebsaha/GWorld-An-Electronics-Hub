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
        Schema::create('product', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('name',50);
            $table->string('short_details',100);
            $table->string('price',100);
            $table->string('offer',100);
            $table->string('img',100);
            $table->string('alt',100);
            $table->text('links');
            $table->text('long_details');
            $table->unsignedBigInteger('gadget_id');
            $table->foreign('gadget_id')->references('gadget_id')->on('gadget');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('company_id')->on('company');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
