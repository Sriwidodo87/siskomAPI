<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribusi;
use Illuminate\Support\Facades\DB;


class DistribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $Distribusis = Distribusi::all();
        $page_title ="List Barang  ";
        return view('distribusi.index',compact('Distribusis','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $page_title ="Distribusi  Barang  ";
        return view('distribusi.create',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //
        $d = now()->format('m');
        $ym= now()->format('Y/m');
        $maxID= Distribusi::whereMonth('tanggal_permintaan',$d)->count();
        $nextID = $maxID + 1 ;
        $nomer_surat= $ym.'-'. sprintf("%03s",$nextID);


        $request->validate([

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
        Distribusi::create([
            'nomer_surat'=> $nomer_surat,
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
        $Distribusis = Distribusi::findOrFail($id);
        $page_title ="List Barang  ";
        return view('distribusi.index',compact('Distribusis','page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Distribusi = Distribusi::findOrFail($id);
        $page_title ="Update Distribusi  ";
        return view('distribusi.edit',compact('Distribusi','page_title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

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
         $Distribusis = Distribusi::findOrFail($id);
        $Distribusis->update([
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
        ->with('success','Distribusi  Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $Distribusis = Distribusi::findOrFail($id);
         $Distribusis->delete();

        return redirect()->route('distribusi.index')
        ->with('success','Distribusi deleted successfully');
    }
}

