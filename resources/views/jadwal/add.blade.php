@extends('layout.main')
@section('content')
<h31>Tambah Data Jadwal</h3>
<form action="{{ route('jadwal.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Tahun Akademik</td><td><input type="text" name="tahunid"></td>
        </tr>

        <tr>
            <td>Guru</td><td>
                <select name="id_guru" class="form-select" id="inputGroupSelect01">
                    @foreach($guru as $item)
                    <option value='{{ $item->id_guru }}' data-value='{{ $item->id_guru }}' {{ $idguruplh == $item->id_guru ? 'selected' : '' }}>{{ $item->nama_guru }}</option>
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
            <td>Hari</td><td>
                <select name="HariID" class="form-select" id="inputGroupSelect01">
                    @foreach($hari as $item)
                    <option value="{{ $item->HariID }}">{{ $item->NamaHari }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
                  
        <tr>
            <td>Nama Kelas</td><td><input type="text" name="nama_kelas"></td>
        </tr>
        <tr>
            <td>Jam Mulai</td><td><input type="text" name="jam_mulai"></td>
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