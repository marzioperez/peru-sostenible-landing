<?php

namespace App\Filament\Resources\ScheduleDayResource\Pages;

use App\Filament\Resources\ScheduleDayResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditScheduleDay extends EditRecord
{
    protected static string $resource = ScheduleDayResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
