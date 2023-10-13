<?php

namespace App\Filament\Pages;

use App\Models\ScheduleActivity;
use App\Models\ScheduleDay;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Pages\Actions\Action;
use Filament\Pages\SettingsPage;
use Illuminate\Support\Collection;
use Pusher\Pusher;

class GeneralSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'Ajustes generales';
    public static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = 'Ajustes';

    protected static string $settings = \App\Settings\GeneralSettings::class;

    protected function getFormSchema(): array {
        $activities = new Collection();
        $current_day = ScheduleDay::whereDate('schedule_date', now())->get()->first();
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
                    '2xl' => 12
                ])->schema([
                    Select::make('current_activity_id')->label('Actividad en curso')->options($activities)->columnSpanFull(),
                    Forms\Components\Toggle::make('show_countdown')->inline(false)->label('Mostrar cuenta regresiva')->columnSpan(4),
                    Forms\Components\DateTimePicker::make('end_date_countdown')->label('Fecha de fin de cuenta regresiva')->columnSpan(8),
                    Forms\Components\Toggle::make('show_users_number')->inline(false)->label('Mostrar número de usuarios registrados')->columnSpan(4),
                    Forms\Components\TextInput::make('users_default_number')->numeric()->label('Número de registrados por defecto')->columnSpan(8),
                    Textarea::make('embed')->label('Embed a mostrar en Live')->columnSpanFull()->helperText('Actualizar parámetro width a 100% y height a 100%')
                ])
            ])
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array {
        $options = array(
            'cluster' => 'us2',
            'useTLS' => true
        );

        $current_embed = app(\App\Settings\GeneralSettings::class)->embed;
        $send_video_pusher = false;

        if ($current_embed !== $data['embed']) {
            $send_video_pusher = true;
        }

        if ($send_video_pusher) {
            $pusher = new Pusher(
                '8b317cc8640c671a3803',
                '75abebe78a8abe779a77',
                '1457807',
                $options);
            $pusher->trigger('video', 'send-video', $data['embed']);
        }

        $current_activity_id = app(\App\Settings\GeneralSettings::class)->current_activity_id;
        $send_activity_pusher = false;
        if ($current_activity_id !== $data['current_activity_id']) {
            $send_activity_pusher = true;
        }

        if ($send_activity_pusher) {
            $pusher = new Pusher(
                '8b317cc8640c671a3803',
                '75abebe78a8abe779a77',
                '1457807',
                $options);
            $pusher->trigger('activity', 'update-activity', $data['current_activity_id']);
        }
        return parent::mutateFormDataBeforeSave($data);
    }

}
