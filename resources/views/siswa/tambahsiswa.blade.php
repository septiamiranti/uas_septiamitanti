@extends('master')

@section('konten')
<h3>Input Siswa</h3>
<form method="post" action="{{route('simpansiswa')}}">
  @csrf
  <div class="form-group">
    <label>Nama Santri</label>
    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" required="">
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label>
    <input type="text" name="gender" class="form-control" placeholder="Jenis Kelamin" required="">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required="">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <textarea name="phone" rows="3" class="form-control" placeholder="Phone" required=""></textarea>
  </div>
  
  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection