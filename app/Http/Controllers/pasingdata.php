<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pasingdata extends Controller
{
public function index(){
    return view('form');
}

public function formproses(Request $req){
  // $nama=$req->nama;
  // $alamat=$req->alamat;
  $angka1=$req->angka1;
  $angka2=$req->angka2;
  $jumlah = $angka1 + $angka2;
  return view('formproses',compact('angka1','angka2','jumlah'));
}
}
