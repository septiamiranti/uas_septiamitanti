@extends('layout.main')
@section('content')
    

<h1>Master Data Pengumuman</h1>
<a href="{{ route('pengumuman.create') }}" class="btn btn-danger btn-sm">Tambah Data</a>
<a class="btn btn-danger btn-sm" href="{{ route('cetak_pengumuman') }}" target="_BLANK">Cetak Pengumuman</a>

<table class="table">
    <tr>
        <td scope="col">No</td>
        <td scope="col">Judul</td>
        <td scope="col">Isi Pengumuman</td>
        <td scope="col">Tgl Posting</td>
        <td scope="col">Aksi</td>
    </tr>
</thead>
<tbody>
    @foreach($pengumuman as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->isi_pengumuman }}</td>
        <td>{{ $item->tgl_posting }}</td>
        <td>
            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pengumuman.destroy', $item->id_pengumuman) }}" method="POST">
                <a href="{{ route('pengumuman.show', $item->id_pengumuman) }}" class="btn btn-sm btn-dark">SHOW</a>
                <a href="{{ route('pengumuman.edit', $item->id_pengumuman) }}" class="btn btn-sm btn-primary">EDIT</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
            </form>
        </td>
    </tr>
@endforeach

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    //message with sweetalert
    @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @endif

</script>

</tbody>
</table>
</div>
</div>
@endsection