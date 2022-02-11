<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateHeapSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('heap.enabled', false);
        $this->migrator->add('heap.app_id', '');
    }

    public function down()
    {
        $this->migrator->delete('heap.enabled');
        $this->migrator->delete('heap.app_id');
    }
}
