<?php

namespace App\Filament\Resources\PanelistGroupResource\Pages;

use App\Filament\Resources\PanelistGroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPanelistGroup extends EditRecord
{
    protected static string $resource = PanelistGroupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
