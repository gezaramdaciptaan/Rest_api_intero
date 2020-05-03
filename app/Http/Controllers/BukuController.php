<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    //
    public function index(){
        # code...

        $buku=Buku::all();

        $data=['buku'=>$buku];

        return $data;
    }


    public function create(Request $request){
        # code...
        $buku=new Buku();
        $buku->judul=$request->judul;
        $buku->penulis=$request->penulis;
        $buku->sinopsis=$request->sinopsis;
        $buku->save();

        return " Data Tersimpan";
    }

    public function update(Request $request, $id){
        # code...
        $buku=Buku::find($id);
        $buku->judul=$request->judul;
        $buku->penulis=$request->penulis;
        $buku->sinopsis=$request->sinopsis;
        $buku->save();

        return " Data Terupdate";
    }

    public function delete($id){
        # code...
        $buku=Buku::find($id);
        $buku->delete();

        return " Data Terhapus";
    }

    public function detail($id){
        # code...
   
        $buku=Buku::find($id);

        return $buku;
    }



}
