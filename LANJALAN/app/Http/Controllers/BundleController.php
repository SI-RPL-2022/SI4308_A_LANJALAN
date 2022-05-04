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

    public function create()
    {
        return view('dashboardtravel.bundle.addbundle');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'judulBundle' => 'required',
            'hargaBundle' => 'required',
            'deskripsiBundle' => 'required',
            'tanggalExpBundle' => 'required',
        ]);
      
        bundle::create($request->all());
       
        return redirect('/bundles')->with('success','Bundle created successfully.');
    }

    public function edit(bundle $bundle)
    {
        return view('dashboardtravel.bundle.editbundle',compact('bundle'));
    }

    public function update(Request $request, bundle $bundle)
    {
        $request->validate([
            'judulBundle' => 'required',
            'hargaBundle' => 'required',
            'deskripsiBundle' => 'required',
            'tanggalExpBundle' => 'required',
        ]);
      
        $bundle->update($request->all());
      
        return redirect('/bundles')->with('success','Bundle edited successfully.');
    }

    public function show($id){

        return view('dashboardtravel.bundle.detailbundle', [
            "title" => "Detail Bundle",
            "detailbundle" => bundle::findOrFail($id)
    
        ]);
    }

    public function bundleuser($id){

        return view('userarea.bundle.detailbundle', [
            "title" => "Detail Bundle",
            "detailbundle" => bundle::findOrFail($id)
    
        ]);
    }
    public function bundlebundle(){

        return view('userarea.bundle.bundlebundle', [
            "title" => "Bundle Bundle",
            "bundles" => bundle::paginate(8)->withQueryString()

        ]);
    }
}
