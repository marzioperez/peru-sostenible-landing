<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration  {

    public function up(): void {
        $this->migrator->add('general.show_countdown', null);
        $this->migrator->add('general.end_date_countdown', null);
        $this->migrator->add('general.show_users_number', null);
        $this->migrator->add('general.users_default_number', null);
    }
};
