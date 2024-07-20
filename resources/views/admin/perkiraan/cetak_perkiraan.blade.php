<h3>Master Data Perkiraan</h3>
<table border="1" width="75%">
    <tr>
        <td>NO</td>
        <td>Nomor Perkiraan</td>
        <td>Nama Perkiraan</td>
        <td>Kelompok</td>
    </tr>

    @foreach($perkiraan as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nomor_perkiraan }}</td>
    <td>{{ $item->nama_perkiraan }}</td>
    <td>{{ $item->tipe }}</td>
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