<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // e.g., Janet Wenzelburger
            $table->text('review')->nullable(); // Review text
            $table->integer('rating')->default(5); // 1-5 stars
            $table->string('source')->nullable(); // e.g., Google Review, VP, Strategic Alliances
            $table->string('avatar')->nullable(); // Path to avatar image
            $table->integer('order')->default(0); // Display order
            $table->boolean('is_active')->default(true); // Show/hide review
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}