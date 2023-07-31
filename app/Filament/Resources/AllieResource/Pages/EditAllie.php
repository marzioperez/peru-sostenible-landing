<?php

namespace App\Filament\Resources\AllieResource\Pages;

use App\Filament\Resources\AllieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAllie extends EditRecord
{
    protected static string $resource = AllieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
