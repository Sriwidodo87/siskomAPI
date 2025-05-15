<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Komputer;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\KomputerResource;
class KomputerController extends Controller
{
    //
    public function index()
    {
        //get all posts
        $komputers = Komputer::latest()->paginate(5);

        //return collection of posts as a resource
        return new KomputerResource(true, 'List Data Komputer', $komputers);
    }

    public function store(Request $request)
    {
       //define validation rules
       $validator = Validator::make($request->all(), [
        'hostname'     => 'required',
        'manufacture'     => 'required',
        'productname'     => 'required',
        'sn'     => 'required|unique:komputers',
        'snbios' => 'required',
        'lokasi'     => 'required',
        'ipaddress'     => 'required',
        ],$messages = [
            'required' => 'The :attribute field is required.',
            'unique'=>'Duplicate Serial Number',
        ]);

   
    //check if validation fails
       
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }else{
            $komputers = Komputer::create([
                'hostname'     => $request->hostname,
                'manufacture'     => $request->manufacture,
                'productname'   => $request->productname,
                'sn'   => $request->sn,
                'snbios'=>$request->snbios,
                'lokasi'   => $request->lokasi,
                'ipaddress'   => $request->ipaddress,
                
            ]);
            return new KomputerResource(true, 'List Data Komputer ditambahkan', $komputers);
        }
   

    }


    public function update(Request $request , $id){
        //define validation rules
        $validator = Validator::make($request->all(), [
            'hostname'     => 'required',
            'manufacture'     => 'required',
            'productname'     => 'required',
            'sn'     => 'required',
            'snbios' => 'required',
            'lokasi'     => 'required',
            'ipaddress'     => 'required',
            ],$messages = [
                'required' => 'The :attribute field is required.',
            ]);

         
              
            $komputers = Komputer::find($id);;
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }else{
                $komputers->update([
                    'hostname'     => $request->hostname,
                    'manufacture'     => $request->manufacture,
                    'productname'   => $request->productname,
                    'sn'   => $request->sn,
                    'snbios'=>$request->snbios,
                    'lokasi'   => $request->lokasi,
                    'ipaddress'   => $request->ipaddress,
                ]);
                return new KomputerResource(true, 'List Data Komputer di Update', $komputers);
            }
       
    
    }
    
    public function show($id)
    {
        //find post by ID
        
        $komputers = Komputer::where('sn',$id)->get();

        //return single post as a resource
        return new KomputerResource(true, 'List Data Komputer ditampilkan ', $komputers);
    }

}
