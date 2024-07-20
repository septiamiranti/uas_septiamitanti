@extends('layout.main')
@section('content')
<h3>Edit Data</h3>
<form action="{{ route('hari.update', $hari->HariID) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Nama Hari</td><td><input type="text" name="NamaHari" value="{{ $hari->NamaHari }}"></td>
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