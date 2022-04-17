<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\travel_agent;


class TravelController extends Controller
{
    public function travelpost(){
        return view('dashboard.travel.travelpost', [
            "title" => "Travel Agent",
            "travelagentpost" => travel_agent::paginate(8)->withQueryString()

        ]);
    }
    public function traveldetail($id){

        return view('dashboard.travel.detailtravel', [
            "title" => "Detail Travel",
            "detailtravel" => travel_agent::findOrFail($id)
    
        ]);
    }

    public function deletetravelpost($id) {
        $travel = travel_agent::find($id);
        $travel->delete();
        return redirect('/travelpost')->with('success','Travel Agent berhasil dihapus');
    }
}
