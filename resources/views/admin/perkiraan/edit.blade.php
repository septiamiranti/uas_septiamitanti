
@extends('layout.main')
@section('content')

<h1>Edit Data</h1>
<form action="{{ route('perkiraan.update', $perkiraan->id_perkiraan) }}" method="post">
    @csrf

    @method('put')
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nomor Perkiraan</label>
  <input type="text" class="form-control" name="nomor_perkiraan" id="exampleFormControlInput1" placeholder="Nomor Perkiaan" value="{{ $perkiraan->nomor_perkiraan }}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Nama Perkiraan</label>
  <input type="text" class="form-control" name="nama_perkiraan" id="exampleFormControlInput1" placeholder="Nama Perkiraan" value="{{ $perkiraan->nama_perkiraan }}">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Tipe</label>
  <input type="text" class="form-control" name="tipe" id="exampleFormControlInput1" placeholder="Tipe" value="{{ $perkiraan->tipe }}">
</div>

<div class="mb-3">
<input class="btn btn-danger btn-sm" type="submit" value="Kirim">
</div>



</form>
@endsection