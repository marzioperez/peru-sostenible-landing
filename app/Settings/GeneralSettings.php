<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings {

    public $current_activity_id;
    public $embed;
    public $show_countdown;
    public $end_date_countdown;
    public $show_users_number;
    public $users_default_number;


    public static function group(): string {
        return 'general';
    }
}
