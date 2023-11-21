<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    //
    public function index(){
        return view('mata-kuliah',[
            'mata_kuliah' => [
                [
                    'matkul' => 'Pemrograman Framework'
                ],
                [
                    'matkul' => '202062'
                ],
                [
                    'matkul' => '202063'
                ],
            ]
        ]);
    }
}
