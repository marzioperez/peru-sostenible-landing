<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlliesCategoryResource\Pages;
use App\Filament\Resources\AlliesCategoryResource\RelationManagers;
use App\Models\AlliesCategory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlliesCategoryResource extends Resource
{
    protected static ?string $model = AlliesCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Categoría aliados';
    protected static ?string $breadcrumb = 'Categoría aliados';
    protected static ?string $modelLabel = 'categoría aliado';
    protected static ?string $navigationGroup = 'Evento';
    public static ?int $navigationSort = 4;

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
                        Forms\Components\TextInput::make('name')->required()->label('Nombre')->columnSpan(['sm' => 1, 'xl' => 8]),
                        Forms\Components\TextInput::make('order')->numeric()->required()->label('Oren')->columnSpan(['sm' => 1, 'xl' => 4]),
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nombre'),
                Tables\Columns\TextColumn::make('order')->label('Orden'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('up')
                    ->icon('heroicon-o-arrow-up')->label('')
                    ->action(fn (AlliesCategory $record) => $record->moveOrderUp()),
                Tables\Actions\Action::make('down')
                    ->icon('heroicon-o-arrow-down')->label('')
                    ->action(fn (AlliesCategory $record) => $record->moveOrderDown())
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlliesCategories::route('/'),
            'create' => Pages\CreateAlliesCategory::route('/create'),
            'edit' => Pages\EditAlliesCategory::route('/{record}/edit'),
        ];
    }
}
