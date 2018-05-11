<?php

namespace App\Http\Controllers;
use App\M_barang;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;
class C_barang extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    public function index(){
        $id = M_barang::all();
        // dd($id->nama);
        return view('index',['id'=>$id]);
    }

    public function create(){
        
        return view('create');
    }
    // public function ajaxValidation($id){
    //     $cekdata = M_barang::where('kode',$id)->get();
    //     if(count($cekdata)==0){
    //         return null;
    //     }else{
    //         return $cekdata;
    //     }

    // }

    public function input(Request $request){
        $cekdata = M_barang::where('kode',$request->kode)->get();
        // dd(count($cekdata));
        if(count($cekdata) == 1){
            Session::flash('gagal','Kode Barang sudah ada!');
            return redirect('/buat');
        }else{
            $data = new M_barang;
            $data->jumlah=$request->jumlah;
            $data->nama=$request->nama;
            $data->status="Baik";
            $data->kode=$request->kode;
            $data->save(); 
            Session::flash('success','Data Anda Berhasil Ditambahkan!');
            return redirect('/buat');         
        }
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
        $data->kode=$request->kode;
        $data->save(); 
        return redirect('/');
    }

    public function delete($id){
        $data = M_barang::find($id);
        $data->delete(); 
        return redirect('/');
    }
}
