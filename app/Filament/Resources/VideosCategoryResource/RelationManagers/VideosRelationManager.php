<?php

namespace App\Filament\Resources\VideosCategoryResource\RelationManagers;

use App\Models\Video;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideosRelationManager extends RelationManager
{
    protected static string $relationship = 'videos';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make([
                    'default' => 1,
                    'sm' => 3,
                    'xl' => 12,
                    '2xl' => 12
                ])->schema([
                    Forms\Components\TextInput::make('title')->required()->maxLength(255)->columnSpanFull(),
                    Forms\Components\Textarea::make('embed')->required()->rows(2)->label('Embed video')->columnSpanFull(),
                    Forms\Components\SpatieMediaLibraryFileUpload::make('featured_image')->required()->label('Foto')->collection('main')->columnSpanFull(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
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
                    ->action(fn (Video $record) => $record->moveOrderUp()),
                Tables\Actions\Action::make('down')
                    ->icon('heroicon-o-arrow-down')->label('')
                    ->action(fn (Video $record) => $record->moveOrderDown()),
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
