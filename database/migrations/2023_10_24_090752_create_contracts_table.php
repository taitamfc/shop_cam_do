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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('asset_id');
            $table->string('total_loan')->nullable();
            $table->string('interest_payment_period')->nullable();
            $table->string('interest_rate')->nullable();
            $table->date('date_paid')->nullable();
            $table->string('note')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('status')->default('0')->comment('0:pending, 1:approved 2:paid');
            $table->string('type')->default('0')->comment('0:cam do, 1:tra gop');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
