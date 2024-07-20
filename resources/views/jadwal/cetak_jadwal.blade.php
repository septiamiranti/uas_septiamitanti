<h3>cetak_jadwal</h3>
<table border="1" width="75%">

        

    <tr>
    <td>No</td>
    <td>Nama Guru</td>
    <td>Pelajaran</td>
    <td>Jam Mulai</td>
       
    </tr>
        
   

    @foreach ($jadwal as $rows);
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->id_guru }}</td>
                    <td>{{ $rows->id_pelajaran }}</td>
                    <td>{{ $rows->jam_mulai }} </td>
                    <td>{{ $rows->created_at }}</td>
                    <td>
                </tr>

    
    @endforeach
</table>

<!-- Tombol cetak -->
<button onclick="printTable()">Cetak</button>

<!-- Script untuk fungsi cetak -->
<script>
    function printTable() {
        window.print(); // Memanggil fungsi print bawaan dari window
    }
</script>