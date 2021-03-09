<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class CheckDataController extends Controller
{
    public function checkData()
    {
        $idStation = $_REQUEST['idStation'];
       $dataCheck = Http::get('http://api.gios.gov.pl/pjp-api/rest/station/sensors/'.$idStation)->json();

       return view('welcome')
                ->with('dataCheck', $dataCheck);
    }
}