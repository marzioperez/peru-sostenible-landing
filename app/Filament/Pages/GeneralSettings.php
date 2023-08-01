<?php

namespace App\Filament\Pages;

use App\Models\ScheduleActivity;
use App\Models\ScheduleDay;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Pages\SettingsPage;
use Illuminate\Support\Collection;

class GeneralSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'Ajustes generales';
    public static ?int $navigationSort = 1;
    protected static ?string $navigationGroup = 'Ajustes';

    protected static string $settings = \App\Settings\GeneralSettings::class;

    protected function getFormSchema(): array {
        $activities = new Collection();
        // $current_day = ScheduleDay::whereDate('schedule_date', now())->get()->first();
        $current_day = ScheduleDay::get()->first();
        if ($current_day) {
            $schedule_activities = ScheduleActivity::where('schedule_day_id', $current_day->id)->get();
            foreach ($schedule_activities as $schedule_activity) {
                $activities->put($schedule_activity['id'], "{$schedule_activity['start']} - {$schedule_activity['end']} >>> {$schedule_activity['title']}");
            }
        }
        return [
            Card::make()->schema([
                Grid::make([
                    'default' => 1,
                    'sm' => 3,
                    'xl' => 12,
                    '2xl' => 8
                ])->schema([
                    Select::make('current_activity_id')
                        ->label('Actividad en curso')
                        ->options($activities)->columnSpanFull(),
                    Textarea::make('embed')
                        ->label('Embed a mostrar en Live')->columnSpanFull()
                ])
            ])
        ];
    }
}
