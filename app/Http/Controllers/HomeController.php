<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
    public function get_deneme()
    {
        $adim = Request::input('adim');
        $soyadim = Request::input('soyadim');
        return view('deneme')->with('isim', $adim)->with('soyadim',$soyadim);
    }
    public function get_form()
    {
        return view('form');
    }
    public function post_form(Request $request)
    {
        $birinci = $request->birinci;
        $ikinci = $request->ikinci;
        $toplam = $birinci + $ikinci;
        return view('form')->with('toplam', $toplam);
    }

    public function get_deneme_isim($isim) {
        return view('deneme')->with('isim', $isim);
    }

}
