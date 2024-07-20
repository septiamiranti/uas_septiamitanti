@extends('layout.main')
@section('content')

<h3>Input Data Nilai </h3>
<div class="card">
<div class="card-header">
<a href="{{ route('nilai.create') }}">Add</a>
<a class="btn btn-danger btn-sm" href="{{ route('cetak_nilai') }}" target="_BLANK">Cetak Nilai</a>
</div>
<div class="card-body">
  @if (session('msg')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> {{ session('msg') }}
      <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>Nomor</th>
          
            <th>Nama Siswa</th>
            <th>Mata Pelajaran</th>
            <th>Nama Guru</th>
            <th>Nilai</th>            
        </tr>
    </thead>

    <tbody>
        @foreach($nilai as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
       
            <td>{{ $row->nama_siswa }}</td>
            <td>{{ $row->nama_pelajaran }}</td>
            <td>{{ $row->nama_guru }}</td>
            <td>{{ $row->nilai }}</td>
           
           
              <td><a href="{{ route('nilai.edit', $row->id) }}">Edit</a></td>
              <td>
            <form action="{{ route('nilai.destroy', $row->id) }}" method="POST">
              @csrf 
              @method('delete')
              <button>Del</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>

<script>
  function deleteData(name){
    pesan = confirm('Yakin data dengan nama ${name} ini dihapus?');
    if(pesan) return true;
    else return false;
  }
</script>
@endsection