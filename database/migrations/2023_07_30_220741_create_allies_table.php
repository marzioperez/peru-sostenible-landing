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
        Schema::create('allies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('order')->nullable()->default(0);
            $table->string('phone')->nullable()->default(null);
            $table->string('facebook_url')->nullable()->default(null);
            $table->string('linkedin_url')->nullable()->default(null);
            $table->string('twitter_url')->nullable()->default(null);
            $table->string('instagram_url')->nullable()->default(null);
            $table->string('email_url')->nullable()->default(null);
            $table->string('whatsapp_url')->nullable()->default(null);
            $table->longText('iframe')->nullable()->default(null);
            $table->longText('biography')->nullable()->default(null);
            $table->unsignedBigInteger('allie_category_id')->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allies');
    }
};
