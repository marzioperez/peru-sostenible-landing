<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduleDay extends Model {

    use SoftDeletes;

    protected $fillable = [
        'schedule_date'
    ];

    protected $appends = ['schedule_date_format', 'active', 'day_name', 'day_number'];

    public function getDayNameAttribute() {
        $date = Carbon::parse($this->schedule_date);
        return ucfirst($date->dayName);
    }

    public function getDayNumberAttribute() {
        $date = Carbon::parse($this->schedule_date);
        return $date->isoFormat('DD');
    }

    public function getActiveAttribute() {
        $now = Carbon::parse($this->schedule_date);
        return $now->isCurrentDay();
    }

    public function getScheduleDateFormatAttribute() {
        $date = Carbon::parse($this->schedule_date);
        $init = $date->isoFormat('D \d\e MMMM');
        return $this->day_name . " " . $init;
    }

    public function activities(): HasMany {
        return $this->hasMany(ScheduleActivity::class, 'schedule_day_id', 'id');
    }
}
