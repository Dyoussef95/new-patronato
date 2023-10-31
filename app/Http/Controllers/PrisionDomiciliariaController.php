<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

class PrisionDomiciliariaController extends Controller
{
    public function Index() {
        return view('PrisionDomiciliaria.Index');
    }


}
