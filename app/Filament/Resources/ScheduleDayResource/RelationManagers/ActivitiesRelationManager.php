<?php

namespace App\Filament\Resources\ScheduleDayResource\RelationManagers;

use App\Models\PanelistGroup;
use App\Models\ScheduleActivity;
use App\Models\Speaker;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActivitiesRelationManager extends RelationManager
{
    protected static string $relationship = 'activities';

    protected static ?string $recordTitleAttribute = 'title';

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
                    Forms\Components\TextInput::make('title')->required()->maxLength(255)->columnSpan(['sm' => 1, 'xl' => 6, '2xl' => 6]),
                    Forms\Components\TimePicker::make('start')->label('Inicio')->columnSpan(['sm' => 1, 'xl' => 3, '2xl' => 3]),
                    Forms\Components\TimePicker::make('end')->label('Fin')->columnSpan(['sm' => 1, 'xl' => 3, '2xl' => 3]),
                    Forms\Components\Textarea::make('embed')->rows(2)->label('Embed video')->columnSpanFull(),
                    Forms\Components\TextInput::make('add_event_id')->label('Add Event ID')->columnSpanFull(),
                    Forms\Components\Select::make('presentation_type')->label('Tipo de presentador')
                        ->options([
                            ScheduleActivity::SPEAKER => 'Expositor único',
                            ScheduleActivity::PANELIST_GROUP => 'Grupo de panelista',
                        ])->default(ScheduleActivity::SPEAKER)
                        ->searchable()->columnSpan(['sm' => 1, 'xl' => 4, '2xl' => 4]),
                    Forms\Components\Select::make('speaker_id')->label('Expositor')->options(Speaker::all()->pluck('name', 'id'))->searchable()->columnSpan(['sm' => 1, 'xl' => 8, '2xl' => 8]),
                    Forms\Components\Select::make('panelist_group_id')->label('Grupo de panelista')->options(PanelistGroup::all()->pluck('name', 'id'))->searchable()->columnSpan(['sm' => 1, 'xl' => 8, '2xl' => 8])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Título'),
                Tables\Columns\TextColumn::make('start')->label('Inicio'),
                Tables\Columns\TextColumn::make('end')->label('Fin'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
