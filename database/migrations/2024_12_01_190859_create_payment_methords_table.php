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
        Schema::create('payment_methords', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id')->nullable();
            $table->string('packages')->nullable();
            $table->string('name')->nullable();
            $table->string('payment')->nullable();
            $table->string('number')->nullable();
            $table->string('trxid')->nullable();
            $table->string('message')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methords');
    }
};
