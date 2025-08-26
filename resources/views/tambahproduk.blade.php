@extends('master')

@section('konten')
<h3>Form Input produk</h3>
<form method="post" action="{{route('simpanproduk')}}">
  @csrf
  <div class="form-group">
    <label>Nama produk</label>
    <input type="text" name="nm_produk" class="form-control" 
    placeholder="Nama produk" required="">
  </div>
  <div class="form-group">
    <label>harga</label>
    <input type="number" name="harga" class="form-control" 
    placeholder="harga" required="">
  </div>
  <div class="form-group">
    <label>qty</label>
    <input type="number" name="qty" class="form-control" placeholder="qty" required="">
  </div>

  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary">
      <i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection