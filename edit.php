<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:tampil.php?");
}
   $id=$_GET['id'];
   $sql="SELECT * FROM tb_pinjaman INNER JOIN
   tb_motor WHERE tb_pinjaman.id_pemnjam='$id'";
   $query= mysqli_query($db, $sql);
   $motor= mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
   }
   ?>

<html>
<head>
</head>
<body>
<div class="container">
        <div class="form">
            <h2 class="text-center">Edit Data</h2>
    <form action="proses_edit.php" method="POST">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $motor['id_pemnjam']?>" />
            <p>
            <label for="nama_peminjam">Nama Peminjam :</label>
                <input type="text" name="nama_peminjam"  value="<?php echo $motor['nama_peminjam']?>" />
            </p>
            <p>
                <label for="alamat">Alamat :</label><br>
                <textarea name="alamat" id="" cols="30" rows="10" value="<?php echo $motor['alamat']?>"></textarea>
            </p>
            <p>
                <label for="umur">Umur :</label>
                <input type="number" name="umur" value="<?php echo $motor['umur']?>"/>
            </p>
            <p>
                <label for="keperluan">Keperluan :</label>
                <input type="text" name="keperluan" value="<?php echo $motor['keperluan']?>"/>
            </p>
            <p>
                <label for="jaminan">Jaminan :</label>
                <input type="text" name="jaminan" value="<?php echo $motor['jaminan']?>"/>
            </p>
            <p>
                <label for="nomor_rangka">Nomor Rangka :</label>
                <input type="number" name="nomor_rangka" value="<?php echo $motor['nomor_rangka']?>"/>
            </p>
            <p>
                <label for="merek">Merek :</label>
                <input type="text" name="merek" value="<?php echo $motor['merek']?>"/>
            </p>
            <p>
                <label for="jenis_motor">Jenis Motor :</label>
                <input type="text" name="jenis_motor" value="<?php echo $motor['Jenis_motor']?>"/>
            </p>
            <p>
                <label for="tahun_motor">Tahun Motor :</label>
                <input type="number" name="tahun_motor" value="<?php echo $motor['Tahun_motor']?>"/>
            </p>
            <p>
                <label for="tanggal_pinjam">Tanggal Pinjam :</label>
                <input type="date" name="tanggal_pinjam" value="<?php echo $motor['Tanggal_pinjam']?>"/>
            </p>
            <p>
                <label for="tanggal_kembali">Tanggal Kembali :</label>
                <input type="date" name="tanggal_kembali" value="<?php echo $motor['Tanggal_kembali']?>"/>
            </p>
            <p>
                <input type="submit" value="edit data" name="edit_data"/>
            </p>
        </fieldset>
</form>
</center>
<a class="action-btn" href="tampil.php">Back</a>
</body>
</html>