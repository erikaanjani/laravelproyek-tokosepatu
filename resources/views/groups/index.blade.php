ph@extends('layouts.app')

@section('title', 'Edit Barang') 

@section('content')
<form action="/friends/{{ $friend['id'] }}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Sepatu</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="namasepatu" aria-describedby="emailHelp" value="{{ old('namasepatu') ? old('namasepatu') : $friend['namabarang'] }}">
    @error('namasepatu')
    <div class="alert alert-danger">{{ $message}}</div> 
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga</label>
    <input type="text" class="form-control" name="harga" id="exampleInputPassword1" value="{{ old('harga') ? old('harga') : $friend['harga'] }}">
    @error('harga')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">stock</label>
    <input type="text" class="form-control" name="stock" id="exampleInputPassword1" value="{{ old('stock') ? old('stock') : $friend['stock'] }}">
    @error('stock')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">ukuran</label>
    <input type="text" class="form-control" name="ukuran" id="exampleInputPassword1" value="{{ old('ukuran') ? old('ukuran') : $friend['ukuran'] }}">
    @error('ukuran')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Save</button>
</form>



   
@endsection