<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index(){
        return view('nilai',[
            'nilai' => [
                [
                    'nim' => '202061',
                    'nama' => 'Yiska',
                    'mata_kuliah' => 'Web Framework',
                    'nilai' => 'A'
                ],
                [
                    'nim' => '202062',
                    'nama' => 'Udin',
                    'mata_kuliah' => 'Web Framework',
                    'nilai' => 'C'
                ],
                [
                    'nim' => '202063',
                    'nama' => 'Martin',
                    'mata_kuliah' => 'Web Framework',
                    'nilai' => 'B'
                ],
            ]
        ]);
    }
}
