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
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable()->default(null);
            $table->string('document_number')->nullable()->default(null);
            $table->string('position')->nullable()->default(null);
            $table->longText('biography')->nullable()->default(null);
            $table->string('web_url')->nullable()->default(null);
            $table->unsignedBigInteger('country_id')->nullable()->default(null);
            $table->string('phone')->nullable()->default(null);
            $table->string('facebook_url')->nullable()->default(null);
            $table->string('linkedin_url')->nullable()->default(null);
            $table->string('twitter_url')->nullable()->default(null);
            $table->string('instagram_url')->nullable()->default(null);
            $table->string('email_url')->nullable()->default(null);
            $table->string('whatsapp_url')->nullable()->default(null);
            $table->string('image_url')->nullable()->default(null);
            $table->boolean('show')->nullable()->default(false);
            $table->unsignedBigInteger('user_id')->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speakers');
    }
};
