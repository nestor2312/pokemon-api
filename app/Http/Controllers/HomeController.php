<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $pokemones = Http::get('http://pokeapi.co/api/v2/pokemon/');

        return view('home',compact('pokemones'));
    }
    public function pokemon($url)
    {
        $pokemon = Http::get('http://pokeapi.co/api/v2/pokemon/'.$url);
      
        return view('Pokemon',compact('pokemon'));
    }
   
}
