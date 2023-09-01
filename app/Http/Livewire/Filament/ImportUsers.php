<?php

namespace App\Http\Livewire\Filament;

use App\Imports\Users;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class ImportUsers extends Component {

    use WithFileUploads;
    public $excel_file_path, $excel_file;

    public function upload() {
        $this->validate([
            'excel_file' => 'required|mimes:xlsx,xls'
        ], [
            "excel_file.required" => "Debes seleccionar un archivo",
            "excel_file.mimes" => "El formato de archivo seleccionado es incorrecto"
        ]);
        $this->excel_file_path = $this->excel_file->store("imports");
        Excel::import(new Users(), $this->excel_file_path);
        return redirect()->to('/admin/users');
    }

    public function export() {
        $time = time();
        return Excel::download(new \App\Exports\Users(), "usuarios-{$time}.xlsx");
    }

    public function render() {
        return view('livewire.filament.import-users');
    }
}
