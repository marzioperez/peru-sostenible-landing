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
        Schema::create('speaker_panelist_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('speaker_id')->nullable()->default(null);
            $table->unsignedBigInteger('panelist_group_id')->nullable()->default(null);
            $table->integer('order')->nullable()->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speaker_panelist_groups');
    }
};
