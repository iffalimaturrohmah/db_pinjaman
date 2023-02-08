<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <style>
        .action-btn {
    display: inline-block;
    text-decoration: none;
    color: blue;
    font-weight: 700;
    background: linear-gradient(90deg,#a701c8,#55e7fc);
    padding: 0.5em 2em;
    border-radius: 60px;
    margin: 1em 0;
    transition: 0.3s;
  }
    </style>
</head>
<body>
<script>
            ${window}.on{"load",function{}{
                ${".loader-wrapper"}fadeCut{"slow"};
            }};
        </script>
    <center>
        <table border='1'>
            <tr>
                <td>No</td>
                <td>Nama Peminjam</td>
                <td>Alamat</td>
                <td>Umur</td>
                <td>Keperluan</td>
                <td>Jaminan</td>
                <td>Nomor Rangka</td>
                <td>Merek</td>
                <td>Jenis Motor</td>
                <td>Tahun Motor</td>
                <td>Tanggal pinjam</td>
                <td>Tanggal kembali</td>
                <td>Aksi Anda</td>
            </tr>
            <?php
            include("koneksi.php");
            $query = mysqli_query($db, "SELECT * FROM tb_pinjaman INNER JOIN
     tb_motor ON tb_pinjaman.id_motor = tb_motor.id_motor");
        
        while($pinjam=mysqli_fetch_array($query)){
            echo "<tr>";
                       echo "<td>".$pinjam['id_pemnjam']."</td>";
                       echo "<td>".$pinjam['nama_peminjam']."</td>";
                       echo "<td>".$pinjam['alamat']."</td>";
                       echo "<td>".$pinjam['umur']."</td>";
                       echo "<td>".$pinjam['keperluan']."</td>";
                       echo "<td>".$pinjam['jaminan']."</td>";
                       echo "<td>".$pinjam['nomor_rangka']."</td>";
                       echo "<td>".$pinjam['merek']."</td>";
                       echo "<td>".$pinjam['Jenis_motor']."</td>";
                       echo "<td>".$pinjam['Tahun_motor']."</td>";
                       echo "<td>".$pinjam['Tanggal_pinjam']."</td>";
                       echo "<td>".$pinjam['Tanggal_kembali']."</td>";
                       echo "<td>";
                       echo "<button><a href='edit.php?id=".$pinjam['id_pemnjam']."'>Edit</a></button> |";
                       echo "<button><a href='hapus.php?id=".$pinjam['id_pemnjam']."'>hapus</a></button>";
                       echo "</td>";
            echo "</tr>";
           }
        ?>
       <h4><a class="action-btn" href="tambah.php" name="Tambah" value="tambah">Tambah</a></h4>
       <h4><a class="action-btn" href="index.php">Menu Utama</a></h4><br>
        </table>
    </center>
</body>
</html>