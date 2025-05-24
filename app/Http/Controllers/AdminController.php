<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminDashboard(){
        return view('admin.index');
    }

      public function adminOrganisateur(){
        return view('admin.pages.organisateur.organisateur');
    }

    public function adminEvenement(){
        return view('admin.pages.evenement.evenement');
    }

    public function adminSite(){
        return view('admin.pages.site-touristique.site');
    }

    public function adminReservation(){
        return view('admin.pages.reservation.reservation');
    }

  
}
