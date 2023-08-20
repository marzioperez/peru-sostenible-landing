<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AllieResource\Pages;
use App\Models\Allie;
use App\Models\AlliesCategory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class AllieResource extends Resource
{
    protected static ?string $model = Allie::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Aliados';
    protected static ?string $breadcrumb = 'Aliados';
    protected static ?string $modelLabel = 'aliado';
    protected static ?string $navigationGroup = 'Evento';
    public static ?int $navigationSort = 5;

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
                        Forms\Components\TextInput::make('name')->required()->label('Nombre')->columnSpan(['sm' => 1, 'xl' => 7]),
                        Forms\Components\Select::make('allie_category_id')->label('Categoría')->options(AlliesCategory::all()->pluck('name', 'id'))->searchable()->columnSpan(5),
                        Forms\Components\TextInput::make('facebook_url')->label('URL Facebook')->columnSpan(['sm' => 1, 'xl' => 3]),
                        Forms\Components\TextInput::make('instagram_url')->label('URL Instagram')->columnSpan(['sm' => 1, 'xl' => 3]),
                        Forms\Components\TextInput::make('email_url')->label('E-mail')->columnSpan(['sm' => 1, 'xl' => 3]),
                        Forms\Components\TextInput::make('whatsapp_url')->label('WhatsApp')->columnSpan(['sm' => 1, 'xl' => 3]),

                        Forms\Components\Textarea::make('iframe')->label('Iframe video')->columnSpanFull()->columnSpan(['sm' => 1, 'xl' => 12]),
                        Forms\Components\SpatieMediaLibraryFileUpload::make('featured_image')->label('Logo')->collection('main')->columnSpanFull()->columnSpan(['sm' => 1, 'xl' => 12]),
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nombre'),
                Tables\Columns\SelectColumn::make('allie_category_id')->label('Categoría')->options(AlliesCategory::all()->pluck('name', 'id'))
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('allie_category_id')->label('Filtrar por categoría')->options(AlliesCategory::all()->pluck('name', 'id'))
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAllies::route('/'),
            'create' => Pages\CreateAllie::route('/create'),
            'edit' => Pages\EditAllie::route('/{record}/edit'),
        ];
    }
}
