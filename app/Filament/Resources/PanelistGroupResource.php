<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PanelistGroupResource\Pages;
use App\Filament\Resources\PanelistGroupResource\RelationManagers;
use App\Models\AlliesCategory;
use App\Models\PanelistGroup;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PanelistGroupResource extends Resource
{
    protected static ?string $model = PanelistGroup::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Grupo de panelistas';
    protected static ?string $breadcrumb = 'Grupo de panelista';
    protected static ?string $modelLabel = 'grupo de panelistas';
    protected static ?string $navigationGroup = 'Evento';
    public static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\Grid::make([
                        'default' => 1,
                        'sm' => 3,
                        'xl' => 12,
                        '2xl' => 12
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
                Tables\Columns\TextColumn::make('name')->label('Nombre del panel')
            ])
            ->filters([
                //
            ])
            ->actions([
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
            RelationManagers\SpeakersRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPanelistGroups::route('/'),
            'create' => Pages\CreatePanelistGroup::route('/create'),
            'edit' => Pages\EditPanelistGroup::route('/{record}/edit'),
        ];
    }
}
