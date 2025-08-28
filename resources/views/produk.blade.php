@extends('master')

@section('konten')
 <h3>Tampil Data produk</h3>
<a class="btn btn-success" href="{{route('tambahproduk')}}"><i class="fa fa-plus"></i> Tambah produk</a><br><br>
<table class="table table-bordered table-hover">
  <tr>
    <th>#ID</th>
    <th>Nama produk</th>
    <th>Harga</th>
    <th>Qty</th>
    <th>Jumlah</th>
    <th>Aksi</th>
  </tr>
  @foreach($produk as $p) 
  <tr>
    <td>{{$p->id}}</td>
    <td>{{$p->nm_produk}}</td>
    <td>{{$p->harga}}</td>
    <td>{{$p->qty}}</td>
    <td>{{$p->jumlah}}</td>
    <td>
      <a href="/produkubah{{$p->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="/produkhapus{{$p->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" 
        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
  @endforeach
</table>
@endsection