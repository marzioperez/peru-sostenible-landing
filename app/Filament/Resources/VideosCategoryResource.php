<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideosCategoryResource\Pages;
use App\Filament\Resources\VideosCategoryResource\RelationManagers;
use App\Models\VideosCategory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideosCategoryResource extends Resource
{
    protected static ?string $model = VideosCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationLabel = 'Categoría de videos';
    protected static ?string $breadcrumb = 'Categoría de videos';
    protected static ?string $modelLabel = 'categoría de video';
    protected static ?string $navigationGroup = 'Evento';
    public static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\Grid::make([
                        'default' => 1,
                        'sm' => 3,
                        'xl' => 12,
                        '2xl' => 8
                    ])->schema([
                        Forms\Components\TextInput::make('name')->required()->label('Nombre')->columnSpan(['sm' => 1, 'xl' => 12])
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nombre'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('up')
                    ->icon('heroicon-o-arrow-up')->label('')
                    ->action(fn (VideosCategory $record) => $record->moveOrderUp()),
                Tables\Actions\Action::make('down')
                    ->icon('heroicon-o-arrow-down')->label('')
                    ->action(fn (VideosCategory $record) => $record->moveOrderDown()),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\VideosRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVideosCategories::route('/'),
            'create' => Pages\CreateVideosCategory::route('/create'),
            'edit' => Pages\EditVideosCategory::route('/{record}/edit'),
        ];
    }
}
