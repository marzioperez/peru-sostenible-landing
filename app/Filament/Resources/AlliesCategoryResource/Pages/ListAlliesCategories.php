<?php

namespace App\Filament\Resources\AlliesCategoryResource\Pages;

use App\Filament\Resources\AlliesCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListAlliesCategories extends ListRecords
{
    protected static string $resource = AlliesCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder {
        return parent::getTableQuery()->orderBy('order');
    }
}
