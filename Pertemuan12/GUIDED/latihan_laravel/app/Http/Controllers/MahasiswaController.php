<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function insertData()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = '23110406';
        $mahasiswa->nama_lengkap = 'Haza Zaidan Zidna Fann';
        $mahasiswa->tempat_lahir = 'Kendal';
        $mahasiswa->tanggal_lahir = '2006-01-14';
        $mahasiswa->alamat = 'Jl. KH Abdul Wahab';
        $mahasiswa->fakultas = 'FT';
        $mahasiswa->jurusan = 'Informatika';
        $mahasiswa->ipk = 3.80;
        $mahasiswa->save();

        // OUTPUT RAPI (hanya data penting)
        dump($mahasiswa->toArray());
    }
}
