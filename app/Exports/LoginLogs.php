<?php

namespace App\Exports;

use App\Models\LoginLog;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class LoginLogs implements FromView {

    use Exportable;

    public function view(): View {
        $logs = LoginLog::with('user', 'activity')->get();
        return view('export.login-logs', ["logs" => $logs]);
    }
}
