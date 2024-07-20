@extends('layout.main')
@section('content')
<h31>Tambah Data Nilai</h3>
<form action="{{ route('nilai.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Nama Siswa</td><td>
                <select name="id_siswa" class="form-select" id="inputGroupSelect01">
                    @foreach($siswa as $item)
                    <option value='{{ $item->id_siswa }}' data-value='{{ $item->id_siswa }}' {{ $item == $item->id_siswa ? 'selected' : '' }}>{{ $item->nama_siswa }}</option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td>Pelajaran</td><td>
                <select name="id_pelajaran" class="form-select" id="inputGroupSelect01">
                    @foreach($pelajaran as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_pelajaran }}</option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td>Nama Guru</td><td>
                <select name="id_guru" class="form-select" id="inputGroupSelect01">
                    @foreach($guru as $item)
                    <option value="{{ $item->id_guru }}">{{ $item->nama_guru }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
                  
        <tr>
            <td>Nilai</td><td><input type="text" name="nilai"></td>
        </tr>
        
        <tr>
            <td>
                <input type="submit" value="Simpan">
                <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}" >Back</a>
            </td>
        </tr>
    </table>
</form>
@endsection