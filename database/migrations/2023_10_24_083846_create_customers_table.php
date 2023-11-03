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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->integer('phone');
            $table->string('address')->nullable();
            $table->date('birthday')->nullable();
            $table->string('cmnd');
            $table->text('link_fb')->nullable();
            $table->string('id_image_front')->nullable();
            $table->string('id_image_back')->nullable();
            $table->string('image_user')->nullable();
            $table->string('status')->nullable();
            $table->string('sitiuation')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
