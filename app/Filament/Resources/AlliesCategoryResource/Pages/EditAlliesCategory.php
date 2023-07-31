<?php

namespace App\Filament\Resources\AlliesCategoryResource\Pages;

use App\Filament\Resources\AlliesCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlliesCategory extends EditRecord
{
    protected static string $resource = AlliesCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
