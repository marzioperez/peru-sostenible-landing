<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Users implements WithHeadingRow, ToModel {

    public function model(array $row) {
        $commitments = explode("\n", $row['commitments']);
        $email = trim($row['email']);
        if (!empty($email)){
            $user = User::where('email', $email)->get()->first();
            if (!$user) {
                $row['password'] = "123456";
                $row['commitments'] = $commitments;
                User::create($row);
            }
        }
    }
}
