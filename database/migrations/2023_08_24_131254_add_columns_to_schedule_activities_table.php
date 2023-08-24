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
        Schema::table('schedule_activities', function (Blueprint $table) {
            $table->string('presentation_type')->nullable()->default(\App\Models\ScheduleActivity::SPEAKER)->after('add_event_id');
            $table->unsignedBigInteger('panelist_group_id',)->nullable()->default(null)->after('speaker_id');
            $table->boolean('show')->nullable()->default(true)->after('schedule_day_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schedule_activities', function (Blueprint $table) {
            //
        });
    }
};
