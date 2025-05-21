<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DistribusiProduct;

class Distribusi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $distribusiproducts = DistribusiProduct::all();
        $page_title ="List Barang  ";
        return view('distribusi.index',compact('distribusiproducts','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $page_title ="Penambahan Barang  ";
        return view('distribusi.create',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //
        $request->validate([
            'nomer_surat'=> 'required',
            'tanggal_permintaan'=> 'required',
            'unit_kerja'=> 'required',
            'jenis_distribusi'=> 'required',
            'status_barang'=> 'required',
            'alasan'=> 'required',
            'tujuan'=> 'required',
            'kategori_distribusi'=> 'required',
            'prosedur'=> 'required',
            'tanggal_mulai'=> 'required',
            'tanggal_selesai'=> 'required',
            'pemohon'=> 'required',
        ]);
        DistribusiProduct::create([
            'nomer_surat'=> $request->nomer_surat,
            'tanggal_permintaan'=> $request->tanggal_permintaan,
            'unit_kerja'=> $request->unit_kerja,
            'jenis_distribusi'=> $request->jenis_distribusi,
            'status_barang'=>$request-> status_barang,
            'alasan'=> $request->alasan,
            'tujuan'=> $request->tujuan,
            'kategori_distribusi'=> $request->kategori_distribusi,
            'prosedur'=> $request->prosedur,
            'tanggal_mulai'=> $request->tanggal_mulai,
            'tanggal_selesai'=>$request->tanggal_selesai,
            'pemohon'=>$request-> pemohon,
        ]);
        return redirect()->route('distribusi.index')
        ->with('success','Distribusi  created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


        $distribusiproducts = DistribusiProduct::findOrFail($id);
        $page_title ="List Barang  ";
        return view('distribusi.show',compact('distribusiproducts','page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $distribusiproducts = DistribusiProduct::findOrFail($id);
        $page_title ="List Barang  ";
        return view('distribusi.edit',compact('distribusiproducts','page_title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nomer_surat'=> 'required',
            'tanggal_permintaan'=> 'required',
            'unit_kerja'=> 'required',
            'jenis_distribusi'=> 'required',
            'status_barang'=> 'required',
            'alasan'=> 'required',
            'tujuan'=> 'required',
            'kategori_distribusi'=> 'required',
            'prosedur'=> 'required',
            'tanggal_mulai'=> 'required',
            'tanggal_selesai'=> 'required',
            'pemohon'=> 'required',
        ]);
         $distribusiproducts = DistribusiProduct::findOrFail($id);
        $distribusiproducts->update([
            'nomer_surat'=> $request->nomer_surat,
            'tanggal_permintaan'=> $request->tanggal_permintaan,
            'unit_kerja'=> $request->unit_kerja,
            'jenis_distribusi'=> $request->jenis_distribusi,
            'status_barang'=>$request-> status_barang,
            'alasan'=> $request->alasan,
            'tujuan'=> $request->tujuan,
            'kategori_distribusi'=> $request->kategori_distribusi,
            'prosedur'=> $request->prosedur,
            'tanggal_mulai'=> $request->tanggal_mulai,
            'tanggal_selesai'=>$request->tanggal_selesai,
            'pemohon'=>$request-> pemohon,
        ]);
        return redirect()->route('distribusi.index')
        ->with('success','Distribusi  created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $distribusiproducts = DistribusiProduct::findOrFail($id);
         $distribusiproducts->delete();

        return redirect()->route('distribusi.index')
        ->with('success','Distribusi deleted successfully');
    }
}
