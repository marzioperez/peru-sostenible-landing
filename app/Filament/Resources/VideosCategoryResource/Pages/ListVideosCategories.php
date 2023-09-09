<?php

namespace App\Filament\Resources\VideosCategoryResource\Pages;

use App\Filament\Resources\VideosCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListVideosCategories extends ListRecords
{
    protected static string $resource = VideosCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder {
        return parent::getTableQuery()->ordered();
    }
}
