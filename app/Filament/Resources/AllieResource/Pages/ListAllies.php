<?php

namespace App\Filament\Resources\AllieResource\Pages;

use App\Filament\Resources\AllieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAllies extends ListRecords
{
    protected static string $resource = AllieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
