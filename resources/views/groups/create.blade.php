@extends('layouts.app')

@section('title', 'Tambah Data Barang')

@section('content')
<div class="container">
<div class="jumbotron">
<form action="/friends" method="POST">

@csrf

<div class="form-group" >
<label for="id">Id</label>
<input type="text" class="form-control" id="Id"
                    name="Id" placeholder="Id"
                    value="{{ old('Id') }}">
</div>

<div class="form-group">
<label for="namasepatu">namasepatu</label>
<input type="text" class="form-control" id="namasepatu"
                    name="namasepatu" placeholder="namasepatu"
                    value="">
</div>

<div class="form-group">
<label for="harga">harga</label>
<input type="text" class="form-control" id="harga"
                    name="harga" placeholder="harga"
                    value="">
<div class="form-group">
<label for="stock">stock</label>
<input type="text" class="form-control" id="stock"
                    name="stock" placeholder="stock"
                    value="">
                    <div class="form-group">
<label for="ukuran">ukuran</label>
<input type="text" class="form-control" id="ukuran"
                    name="ukuran" placeholder="ukuran"
                    value="">
</div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



   
@endsection