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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');

            $table->date('appointment_date');
            $table->string('appointment_time');

            $table->string('booking_type');
            $table->string('address');
            $table->string('unit_apt')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();

            $table->string('onside_first_name')->nullable();
            $table->string('onside_last_name')->nullable();
            $table->string('onside_email')->nullable();
            $table->string('onside_phone_number')->nullable();

            $table->text('removal_items')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
