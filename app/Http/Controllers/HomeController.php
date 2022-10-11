<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['title'] = "Zulkarnaim";
        // $coba = [
        //     ['nama' => 'Saifur',  'umur' => 33],
        //     ['nama' => 'Mega',  'umur' => 23],
        //     ['nama' => 'Ilham',  'umur' => 43],
        //     ['nama' => 'Dea',  'umur' => 20],
        //     ['nama' => 'Lara',  'umur' => 13]
        // ];
        // $data['coba'] = json_decode(json_encode($coba), FALSE);
        // return view('hello', $data);
        return view('hello', $data);
    }
}
