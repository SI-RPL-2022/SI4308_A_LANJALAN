<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisata;
use App\Models\bundle;
use App\Models\pesanan;
use App\Models\travel_agent;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $request->validate([
            'wisata_id' => 'required',
            'totalHarga' => 'required',
            'namaPemesan' => 'required',
            'noTelepon' => 'required',
            'emailPemesan' => 'required',
            'buktiTf' => 'required',
            'status' => 'required',
            'tanggal' => 'required',
            'travelAgent_id' => 'required',

        ]);
      
        pesanan::create($request->all());
       
        return redirect('/riwayatpesanan')->with('success','Pemesanan berhasil dipesan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pemesanan', [
            "title" => "Pemesanan",
            "wisata" => wisata::findOrFail($id),
            "travel" => travel_agent::all(),
            "pesanan" => pesanan::findOrFail($id),
    
        ]);
    }

    public function showBundle($id)
    {
        return view('pemesananBundle', [
            "title" => "Pemesanan Bundle",
            "bundle" => bundle::findOrFail($id),
            "travel" => travel_agent::all(),
            "pesanan" => pesanan::findOrFail($id),
    
        ]);
    }
    public function storeBundle(Request $request )
    {
        $request->validate([
            'bundle_id' => 'required',
            'totalHarga' => 'required',
            'namaPemesan' => 'required',
            'noTelepon' => 'required',
            'emailPemesan' => 'required',
            'buktiTf' => 'required',
            'status' => 'required',
            'tanggal' => 'required',
            'travelAgent_id' => 'required',

        ]);
      
        pesanan::create($request->all());
       
        return redirect('/riwayatpesanan')->with('success','Pemesanan berhasil dipesan.');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('buktiTf')) {
            $files = $request->file('buktiTf');
            $lokasi = public_path('img/images');
            $gambarbuktiTf =  rand(1000, 20000) . "." . $files->getClientOriginalExtension();
            $files->move($lokasi, $gambarbuktiTf);
            $pesans = pesanan::all();
            $pesan = $pesans->find($id);
            $pesan->buktiTf = $gambarbuktiTf;
            $pesan->status = $request->status;
            $pesan->save();
        return redirect('/riwayatpesanan')->with('success','Bukti berhasil dikirim.');

        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function riwayatpesanan()
    {
        return view('riwayatpesanan', [
            "title" => "Riwayat Pesanan",
            "pesanan" => pesanan::all(),
    
        ]);

    }

    public function konfirmasi($id)
    {
        return view('konfirmasi', [
            "title" => "Konfirmasi",
            
            "pesanan" => pesanan::findOrFail($id),
    
        ]);

        // $pesan = $request->session()->get('pesan');
        // return view('konfirmasi',compact('pesan', $pesan));
    }
    public function storebukti(Request $request, $id){
        if ($request->file('buktiTf')) {
            $files = $request->file('buktiTf');
            $lokasi = public_path('/img/images/');
            $gambarbuktiTf =  date('YmdHi').$files->getClientOriginalExtension();
            // $pathImg = $files->storeAs('images', $gambarbuktiTf);
            $files->move($lokasi, $gambarbuktiTf);
            $pesans = pesanan::all();
            $pesan = $pesans->find($id);
            $pesan->buktiTf = $gambarbuktiTf;
            $pesan->status = $request->status;
            $pesan->save();
        return redirect('/riwayatpesanan')->with('success','Bukti berhasil dikirim.');

        }

    }


   
    
    
}
