<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteTouristiqueController extends Controller
{
    public function show(){
        return view('client.pages.detail-site-touristique');
    }
}
