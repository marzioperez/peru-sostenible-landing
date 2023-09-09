<?php

namespace App\Filament\Resources\VideosCategoryResource\Pages;

use App\Filament\Resources\VideosCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVideosCategory extends EditRecord
{
    protected static string $resource = VideosCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
