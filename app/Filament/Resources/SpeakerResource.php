<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpeakerResource\Pages;
use App\Filament\Resources\SpeakerResource\RelationManagers;
use App\Models\AlliesCategory;
use App\Models\Speaker;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SpeakerResource extends Resource
{
    protected static ?string $model = Speaker::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Expositores';
    protected static ?string $breadcrumb = 'Expositores';
    protected static ?string $modelLabel = 'expositor';
    protected static ?string $navigationGroup = 'Evento';
    public static ?int $navigationSort = 2;

    public static function form(Form $form): Form {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\Grid::make([
                        'default' => 1,
                        'sm' => 3,
                        'xl' => 12,
                        '2xl' => 12
                    ])->schema([
                        Forms\Components\TextInput::make('first_name')->required()->label('Nombre')->columnSpan(['sm' => 1, 'xl' => 4]),
                        Forms\Components\TextInput::make('last_name')->required()->label('Apellidos')->columnSpan(['sm' => 1, 'xl' => 4]),
                        Forms\Components\TextInput::make('position')->label('Cargo')->columnSpan(['sm' => 1, 'xl' => 4]),

                        Forms\Components\TextInput::make('facebook_url')->label('URL Facebook')->columnSpan(['sm' => 1, 'xl' => 4]),
                        Forms\Components\TextInput::make('linkedin_url')->label('URL Linkedin')->columnSpan(['sm' => 1, 'xl' => 4]),
                        Forms\Components\TextInput::make('twitter_url')->label('URL Twitter')->columnSpan(['sm' => 1, 'xl' => 4]),
                        Forms\Components\TextInput::make('instagram_url')->label('URL Instagram')->columnSpan(['sm' => 1, 'xl' => 4]),
                        Forms\Components\TextInput::make('web_url')->label('URL Web')->columnSpan(['sm' => 1, 'xl' => 4]),

                        Forms\Components\RichEditor::make('biography')->required()->toolbarButtons(['bold', 'italic', 'link', 'undo', 'strike', 'h2', 'h3', 'orderList'])->label('Biografía')->columnSpanFull()->columnSpan(['sm' => 1, 'xl' => 12]),
                        Forms\Components\SpatieMediaLibraryFileUpload::make('featured_image')->label('Foto')->collection('main')->columnSpanFull()->columnSpan(['sm' => 1, 'xl' => 12]),
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')->searchable()->label('Nombre')->searchable(),
                Tables\Columns\TextColumn::make('last_name')->searchable()->label('Apellidos')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('up')
                    ->icon('heroicon-o-arrow-up')->label('')
                    ->action(fn (Speaker $record) => $record->moveOrderUp()),
                Tables\Actions\Action::make('down')
                    ->icon('heroicon-o-arrow-down')->label('')
                    ->action(fn (Speaker $record) => $record->moveOrderDown())
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
            'index' => Pages\ListSpeakers::route('/'),
            'create' => Pages\CreateSpeaker::route('/create'),
            'edit' => Pages\EditSpeaker::route('/{record}/edit'),
        ];
    }
}
