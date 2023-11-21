<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index(){
        return view('mahasiswa',[
            'mahasiswa' => [
                [
                    'nim' => '202061',
                    'nama' => 'Yiska',
                    'jurusan' => 'Teknik Informatika'
                ],
                [
                    'nim' => '202062',
                    'nama' => 'Udin',
                    'jurusan' => 'Sistem Informasi'
                ],
                [
                    'nim' => '202063',
                    'nama' => 'Martin',
                    'jurusan' => 'Rekayasa Perangkat Lunak'
                ],
            ]
        ]);
    }
}
