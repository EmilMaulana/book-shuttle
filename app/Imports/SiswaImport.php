<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Biodata;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Mengabaikan baris header
        if ($row[0] === 'Nama Lengkap' && $row[1] === 'NIS' && $row[2] === 'NISN') {
            return null; // Mengabaikan baris header
        }

        // Mengambil NIS dan NISN dari baris yang diimpor
        $name = $row[0]; // Nama Lengkap berada di kolom pertama
        $nis = $row[1]; // NIS berada di kolom kedua
        $nisn = $row[2]; // NISN berada di kolom ketiga

        // Membuat email dari NIS
        $email = strtolower($nis) . '@siakad.com'; // Format email
        $password = bcrypt($nis); // Menghasilkan password dari NIS

        // Membuat user baru
        $user = User::create([
            'name' => $name, // Nama lengkap
            'email' => $email, // Email yang dihasilkan
            'password' => $password, // Password yang dihasilkan
        ]);

        // Menyimpan biodata
        Biodata::create([
            'user_id' => $user->id, // Mengaitkan biodata dengan user
            'nis' => $nis, // NIS
            'nisn' => $nisn, // NISN
        ]);

        return $user; // Mengembalikan user yang baru dibuat
    }

}
