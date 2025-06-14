<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribusi;
use PDF;
use Illuminate\Support\Facades\DB;


class DistribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Distribusis = Distribusi::orderBy('created_at', 'desc')->get();
        $page_title ="List Distribusi  ";
        return view('distribusi.index',compact('Distribusis','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $page_title ="Create Distribusi";
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
        $nomer_surat= $ym.'/'. sprintf("%03s",$nextID);


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
        $data = Distribusi::findOrFail($id);
        $page_title ="List ID   ";
        // return view('distribusi.show',compact('data','page_title'));
       return response()->json($data);
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

 public function generatePDF($id)
    {
            $data = Distribusi::findOrFail($id);
            $pdf = PDF::loadView('distribusi.cetak_pdf',compact('data'));
            return $pdf->download('Infrastruktur_distribusi.pdf');
    }


     public function upload_file(string $id)
    {
        $Distribusi = Distribusi::findOrFail($id);
        $page_title ="Update Distribusi  ";
        return view('distribusi.upload',compact('Distribusi','page_title'));
    }

    public function update_upload(Request $request, string $id){

        $Distribusis = Distribusi::findOrFail($id);
        $no_surat= $Distribusis->nomer_surat;

       $request->validate([
            'uploads' => 'required|mimes:pdf|max:2048', // Example validation rules
        ]);
        $file = $request->file('uploads');
         $fileName =$file->getClientOriginalName();
        //  $fileName =$no_surat . '_' . $file->getClientOriginalName();

        $filePath = $file->storeAs('uploads', $fileName);

        $Distribusis->update([
            'uploads'=> $fileName,
             ]);
        return redirect()->route('distribusi.index')
        ->with('success','Distribusi Upload   Successfully');
    }


    public function viewPdf($id){
        $pdf = Distribusi::findOrFail($id);
        $filename = $pdf->uploads;

        // $filePath = storage_path($filename);
        $filePath = storage_path('app/private/uploads/' . $filename);



            if (file_exists($filePath))
            {
            // $headers = ['Content-Type' => 'application/pdf'];
            header('Content-Type:'. 'application/pdf');
            header("Content-Length: " . filesize($filePath));
            // return response()->download($filePath, 'Test File', $headers, 'inline');
            // return response()->stream($filePath);
            // return  $filePath ->stream();

            // Send the file to the browser.
            readfile($filePath);
            exit;

            } else {
            abort(404, 'File not found!');
            }


    }
}

