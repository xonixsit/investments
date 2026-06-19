<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('dial_code', 10)->default('+971');
            $table->string('phone', 30);
            $table->string('country')->nullable();
            $table->string('contact_method', 30)->default('WhatsApp');
            $table->string('property_interest', 50)->default('Residential');
            $table->string('budget_label', 50)->nullable();
            $table->text('message')->nullable();
            $table->string('status', 20)->default('new');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
