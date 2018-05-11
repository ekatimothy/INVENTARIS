<?php

namespace App\Http\Controllers;
use App\M_barang;

use Illuminate\Http\Request;

class C_barang extends Controller
{
    public function index(){
        $id = M_barang::all();
        // dd($id->nama);
        return view('index',['id'=>$id]);
    }

    public function create(){
        
        return view('create');
    }

    public function input(Request $request){
        $data = new M_barang;
        $data->jumlah=$request->jumlah;
        $data->nama=$request->nama;
        $data->status="Baik";
        $data->save(); 
        return redirect('index');
    }

    public function edit($id){
        $data = M_barang::find($id);
        // $dataa = M_barang::where('nama',"Meja")->get();
        
        return view('edit',['id'=>$data]);
    }

    public function update(Request $request){
        $data = M_barang::find($request->id);
        $data->jumlah=$request->jumlah;
        $data->nama=$request->nama;
        $data->status=$request->status;
        $data->save(); 
        return redirect('index');
    }

    public function delete($id){
        $data = M_barang::find($id);
        $data->delete(); 
        return redirect('index');
    }
}
