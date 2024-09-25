<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1,$p2) {
        //return "A soma de $p1 + $p2 é: " . ($p1 + $p2);
        //return view('site.teste',compact('pq', 'p2'));

        return view('site.teste')->with('adc', $p1)->with('xxx', $p2);
        //compact, with pode ser usado para parametros de controller na visualizacao
    }


    }
