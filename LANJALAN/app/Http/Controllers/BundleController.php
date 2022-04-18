<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bundle;

class BundleController extends Controller
{
    public function index()
    {
        $bundles = bundle::paginate(10);
      
        return view('dashboardtravel.bundle.daftarbundle',compact('bundles'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
