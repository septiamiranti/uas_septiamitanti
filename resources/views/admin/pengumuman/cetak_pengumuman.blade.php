<h3>cetak_pengumuman</h3>
<table border="1" width="75%">
    <tr><b>
    <td>No</td>
        <td>Judul</td>
        <td>Isi Pengumuman</td>
        <td>Tanggal</td>
       <b>
    </tr>

    @foreach($pengumuman as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->judul }}</td>
    <td>{{ $item->isi_pengumuman }}</td>
    <td>{{ $item->tgl_posting }}</td>
    </tr>
    @endforeach
</table>

<!-- Tombol cetak -->
<button onclick="printTable()">Cetak Tabel</button>

<!-- Script untuk fungsi cetak -->
<script>
    function printTable() {
        window.print(); // Memanggil fungsi print bawaan dari window
    }
</script>