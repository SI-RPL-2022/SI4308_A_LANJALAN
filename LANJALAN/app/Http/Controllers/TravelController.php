<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\travel_agent;
use App\Models\User;


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

    public function deletetravelpost($id, $email) {
        $travel = travel_agent::find($id);
        $travel->delete();
        $user = User::where("email", $email)->first()->id;
        $iduser = User::find($user);
        $iduser->delete();
        return redirect('/travelpost')->with('success','Travel Agent berhasil dihapus');
    }

    public function create()
    {
        return view('dashboard.travel.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
      
        travel_agent::create($request->all());
        User::create($request->all());
       
        return redirect('/travelpost')->with('success','Travel created successfully.');
    }
}
