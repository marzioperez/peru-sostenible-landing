<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Pages\Page;
use Filament\Resources\Form;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Participantes';
    protected static ?string $breadcrumb = 'Participantes';
    protected static ?string $modelLabel = 'participante';
    protected static ?string $navigationGroup = 'Evento';

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
                        Forms\Components\TextInput::make('phone')->label('Celular')->columnSpan(['sm' => 1, 'xl' => 4]),
                        Forms\Components\TextInput::make('company')->label('Empresa')->columnSpan(['sm' => 1, 'xl' => 4]),
                        Forms\Components\TextInput::make('position')->label('Cargo')->columnSpan(['sm' => 1, 'xl' => 4]),
                        Forms\Components\TextInput::make('email')->email()->required()
                            ->unique(ignorable: fn($record) => $record )
                            ->label('E-mail')->columnSpan(['sm' => 1, 'xl' => 4]),
                        Forms\Components\TagsInput::make('commitments')->label('Compromisos')->suggestions([
                            'Resiliencia', 'Respeto', 'Tolerancia', 'Esfuerzo', 'Empatía', 'Transparencia', 'Sostenibilidad', 'Colaboración'
                        ])->columnSpan(['sm' => 1, 'xl' => 12])
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')->label('Nombre'),
                Tables\Columns\TextColumn::make('last_name')->label('Apellidos'),
                Tables\Columns\TextColumn::make('email')->label('E-mail'),
                Tables\Columns\TextColumn::make('created_at')->label('Fecha de registro')->dateTime('d/m/Y')->sortable(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
