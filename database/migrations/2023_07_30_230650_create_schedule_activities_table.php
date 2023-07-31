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
        Schema::create('schedule_activities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->time('start');
            $table->time('end')->nullable()->default(null);
            $table->longText('embed')->nullable()->default(null);
            $table->longText('add_event_id')->nullable()->default(null);
            $table->unsignedBigInteger('speaker_id')->nullable()->default(null);
            $table->unsignedBigInteger('schedule_day_id')->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_activities');
    }
};
