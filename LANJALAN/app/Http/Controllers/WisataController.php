<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use Illuminate\Http\Request;


class WisataController extends Controller
{

    public function dashboard(){
        return view('dashboard.dash', [
            "title" => "Dashboard",

        ]);
    }

    public function wisatapost(){
        return view('dashboard.wisata.wisatapost', [
            "title" => "Wisata Post",
            "wisatas" => wisata::paginate(8)->withQueryString()

        ]);
    }
}
