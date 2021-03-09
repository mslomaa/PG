<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class FetchDataController extends Controller
{
    public function getData()
    {
       $data = Http::get('http://api.gios.gov.pl/pjp-api/rest/station/findAll')->json();

       return view('welcome')
                ->with('data', $data);
    }
}
