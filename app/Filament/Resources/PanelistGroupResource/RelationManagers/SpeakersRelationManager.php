<?php

namespace App\Filament\Resources\PanelistGroupResource\RelationManagers;

use App\Models\Speaker;
use App\Models\SpeakerPanelistGroup;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

class SpeakersRelationManager extends RelationManager
{
    protected static string $relationship = 'speakers';

    protected static ?string $recordTitleAttribute = 'first_name';

    public static function form(Form $form): Form {
        return $form
            ->schema([
                Forms\Components\Select::make('speaker_id')->label('Expositor')->options(Speaker::all()->pluck('name', 'id'))->searchable()->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('speaker.name')->label('Expositor'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\Action::make('up')
                    ->icon('heroicon-o-arrow-up')->label('')
                    ->action(fn (SpeakerPanelistGroup $record) => $record->moveOrderUp()),
                Tables\Actions\Action::make('down')
                    ->icon('heroicon-o-arrow-down')->label('')
                    ->action(fn (SpeakerPanelistGroup $record) => $record->moveOrderDown()),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    protected function getTableQuery(): Builder|Relation {
        return parent::getTableQuery()->ordered();
    }
}
