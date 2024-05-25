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
        Schema::create('gadget', function (Blueprint $table) {
            $table->id('gadget_id');
            $table->string('name',50);
            $table->text('details');
            $table->string('img',50);
            $table->string('alt',50);
            $table->string('catagory',80);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gadget');
    }
};
