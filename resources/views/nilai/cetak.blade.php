<h3>Nilai Siswa</h3>
<table border="1" width="75%">
    <tr>
        <td>NO</td>
        <td>Nama Siswa</td>
        <td>Mata Pelajaran</td>
        <td>Nilai</td>
    </tr>

    @foreach($nilai as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nama_siswa }}</td>
    <td>{{ $item->nama_pelajaran }}</td>
    <td>{{ $item->nilai }}</td>
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