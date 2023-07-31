<?php

namespace Database\Seeders;

use App\Models\ScheduleActivity;
use App\Models\ScheduleDay;
use App\Models\Speaker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('schedule_days')->truncate();
        DB::table('schedule_activities')->truncate();

        $jueves_12 = ScheduleDay::create([
            'schedule_date' => '2023-10-12'
        ]);

        ScheduleActivity::create([
            'title' => 'Inauguración y bienvenida',
            'start' => '07:30:00',
            'end' => '08:30:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $jueves_12->id
        ]);

        ScheduleActivity::create([
            'title' => 'Exposición principal y panel de expertos',
            'start' => '09:30:00',
            'end' => '10:30:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $jueves_12->id
        ]);

        ScheduleActivity::create([
            'title' => 'Intermedio y actividades cultural',
            'start' => '10:30:00',
            'end' => '11:00:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $jueves_12->id
        ]);

        ScheduleActivity::create([
            'title' => 'Exposición principal y panel de expertos',
            'start' => '11:00:00',
            'end' => '13:00:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $jueves_12->id
        ]);

        ScheduleActivity::create([
            'title' => 'Almuerzo',
            'start' => '13:00:00',
            'end' => '15:00:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $jueves_12->id
        ]);

        ScheduleActivity::create([
            'title' => 'Exposición principal y panel de expertos',
            'start' => '15:00:00',
            'end' => '17:00:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $jueves_12->id
        ]);

        ScheduleActivity::create([
            'title' => 'Panel corporativo 1',
            'start' => '17:00:00',
            'end' => '17:45:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $jueves_12->id
        ]);

        ScheduleActivity::create([
            'title' => 'Panel corporativo 2',
            'start' => '17:45:00',
            'end' => '18:30:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $jueves_12->id
        ]);

        ScheduleActivity::create([
            'title' => 'Cóctel de bienvenida',
            'start' => '18:30:00',
            'end' => '20:00:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $jueves_12->id
        ]);

        $viernes_13 = ScheduleDay::create([
            'schedule_date' => '2023-10-13'
        ]);

        ScheduleActivity::create([
            'title' => 'Desayuno de CEOs',
            'start' => '07:30:00',
            'end' => '09:30:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $viernes_13->id
        ]);

        ScheduleActivity::create([
            'title' => 'Exposición principal y panel de expertos',
            'start' => '09:30:00',
            'end' => '11:30:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $viernes_13->id
        ]);

        ScheduleActivity::create([
            'title' => 'Intermedio y activación cultural',
            'start' => '11:30:00',
            'end' => '12:00:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $viernes_13->id
        ]);

        ScheduleActivity::create([
            'title' => 'Panel corporativo 3',
            'start' => '12:00:00',
            'end' => '12:45:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $viernes_13->id
        ]);

        ScheduleActivity::create([
            'title' => 'Panel corporativo 4',
            'start' => '12:45:00',
            'end' => '13:30:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $viernes_13->id
        ]);

        ScheduleActivity::create([
            'title' => 'Almuerzo',
            'start' => '13:30:00',
            'end' => '15:00:00',
            'schedule_day_id' => $viernes_13->id
        ]);

        ScheduleActivity::create([
            'title' => 'Exposición principal y panel de expertos',
            'start' => '15:00:00',
            'end' => '17:00:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $viernes_13->id
        ]);

        ScheduleActivity::create([
            'title' => 'Reconocimiento Perú por los ODS 2023',
            'start' => '17:00:00',
            'end' => '19:00:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $viernes_13->id
        ]);

        ScheduleActivity::create([
            'title' => 'Cóctel Kunantuta',
            'start' => '19:00:00',
            'end' => '21:00:00',
            'speaker_id' => Speaker::all()->random()->id,
            'schedule_day_id' => $viernes_13->id
        ]);

        $sabado_14 = ScheduleDay::create([
            'schedule_date' => '2023-10-14'
        ]);

        ScheduleActivity::create([
            'title' => 'Festival de sostenibilidad',
            'start' => '09:30:00',
            'end' => '19:00:00',
            'schedule_day_id' => $sabado_14->id
        ]);

        ScheduleActivity::create([
            'title' => 'Concierto',
            'start' => '19:00:00',
            'end' => '20:00:00',
            'schedule_day_id' => $sabado_14->id
        ]);
    }
}
