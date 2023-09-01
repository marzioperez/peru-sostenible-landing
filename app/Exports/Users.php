<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class Users implements FromView {

    use Exportable;

    public function view(): View {
        $users = User::get();
        return view('export.users', ["users" => $users]);
    }

}
