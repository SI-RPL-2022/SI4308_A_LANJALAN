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

    public function wisatadetail($id){

        return view('dashboard.wisata.detailwisata', [
            "title" => "Detail Wisata",
            "detailwisata" => wisata::findOrFail($id)
    
        ]);
    }

    public function create()
    {
        return view('dashboard.wisata.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'namaWisata' => 'required',
            'hargaWisata' => 'required',
            'deskripsiWisata' => 'required',
            'lokasiWisata' => 'required',
            
        ]);
      
        wisata::create($request->all());
       
        return redirect('/wisatapost')->with('success','Objek Wisata berhasil ditambahkan');
    }

    public function deletewisata($id) {
        $wisata = wisata::find($id);
        $wisata->delete();
        return redirect('/wisatapost')->with('success','Objek wisata berhasil dihapus');
    }

}
