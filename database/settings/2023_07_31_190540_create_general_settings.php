<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration  {

    public function up(): void {
        $this->migrator->add('general.current_activity_id', null);
        $this->migrator->add('general.embed', null);
    }
};
