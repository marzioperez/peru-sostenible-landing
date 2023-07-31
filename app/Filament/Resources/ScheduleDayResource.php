<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleDayResource\Pages;
use App\Filament\Resources\ScheduleDayResource\RelationManagers;
use App\Models\ScheduleDay;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScheduleDayResource extends Resource
{
    protected static ?string $model = ScheduleDay::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationLabel = 'Agenda';
    protected static ?string $breadcrumb = 'Agenda';
    protected static ?string $modelLabel = 'agenda';
    protected static ?string $navigationGroup = 'Evento';
    public static ?int $navigationSort = 1;

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
                        Forms\Components\DatePicker::make('schedule_date')->required()->label('Fecha')->columnSpan(['sm' => 1, 'xl' => 12]),
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('schedule_date')->label('Fecha'),
            ])
            ->filters([
                //
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
            RelationManagers\ActivitiesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListScheduleDays::route('/'),
            'create' => Pages\CreateScheduleDay::route('/create'),
            'edit' => Pages\EditScheduleDay::route('/{record}/edit'),
        ];
    }
}
