@extends('layouts.app')

@section('title', 'produk')

@section('content')
<div class="container">
<div class="jumbotron">
@if(session('msg'))
<div class="alert alert-success alert-dismissible fade show mt-2"
                role="alert">
{{session('msg')}}
<button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<a href="friends/create" class="btn btn-primary mb-1">
Tambah Data Produk</a> </br>

<table class="table table-primary table-success">
<tr>
<th scope="col">No</th>
<th scope="col">Nama Sepatu</th>
<th scope="col">Harga</th>
<th scope="col">Stock</th>
<th scope="col">Ukuran</th>
<th scope="col">Aksi</th>
</th>
</tr>
</thead>
<tbody>
@foreach ($friends as $friend)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $friend->namasepatu }}</td>
<td>{{ $friend->harga }}</td>
<td>{{ $friend->stock }}</td>
<td>{{ $friend->ukuran }}</td>
<td>

<button> <a href="/friends/{{$friend['id']}}/edit" class='button' style='width:auto;'>Edit</button>
<button> <a href="" class='button' style='width:auto;'>Hapus</button>
</td>
</tr>
@endforeach
<div>
    {{$friends->links()}}
 </div>
@endsection