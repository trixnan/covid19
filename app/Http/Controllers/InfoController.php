<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InfoController extends Controller
{
    public function index() {
      $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
      $count = Http::get('https://api.kawalcorona.com/indonesia');
      $data = $response->json();
      $data2 = $count->json();
      return view('index', compact('data', 'data2'));
    }
}
