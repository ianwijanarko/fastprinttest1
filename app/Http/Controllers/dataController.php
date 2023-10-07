<?php

namespace App\Http\Controllers;
use App\Models\produk;
use App\Models\kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataController extends Controller
{
    // public function index(){
    //     $dataproduk = produk::all();
    //     return view('data', compact('dataproduk'));
    // }
    

    public function index(){
        $dataproduk = DB::table('produks')
                ->join('kategori', 'produks.kategori_id_kategori', '=' , 'id_kategori')
                ->join('status', 'produks.status_id_status', '=' , 'id_status')
                ->select('produks.*','kategori.nama_kategori','status.nama_status')
                ->orderBy('id_produk','asc')
                ->get();
        return view('data', compact('dataproduk'));
    }

    public function datadijual(){
        $dataproduk = DB::table('produks')
                ->join('kategori', 'produks.kategori_id_kategori', '=' , 'id_kategori')
                ->join('status', 'produks.status_id_status', '=' , 'id_status')
                ->select('produks.*','kategori.nama_kategori','status.nama_status')
                ->where('produks.status_id_status','=','1')
                ->orderBy('id_produk','asc')
                ->get();
        return view('data', compact('dataproduk'));
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function kategori(){
        $dataproduk = DB::table('produks')
                ->join('kategori', 'produks.kategori_id_kategori', '=' , 'id_kategori')
                ->join('status', 'produks.status_id_status', '=' , 'id_status')
                ->select('produks.*','kategori.nama_kategori','status.nama_status')
                ->where('produks.status_id_status','=','1')
                ->orderBy('id_produk','asc')
                ->get();
        return view('tambahdata', compact('dataproduk'));
    }

    public function insertdata(Request $request){
        //dd($request->all());
        $request->timestamps = false;
        produk::create($request->all());

        return redirect()->route('data')->with('success','data berhasil di tambahkan ');
    }

    public function tampildata($id_produk){
        $data = produk::whereId_produk($id_produk)->first();
        return view('tampildata', compact('data'));
    }

    public function updateData(Request $request,$id){
        $data = produk::find($id);
        $data->update($request->all());
        return redirect()->route('data')->with('success','data berhasil di update ');
    }

    public function delete($id){
        $data = produk::find($id);
        $data->delete();
        return redirect()->route('data')->with('success','data berhasil di HAPUS ');
    }
}
