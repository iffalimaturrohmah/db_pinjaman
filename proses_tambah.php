<?php
include("koneksi.php");
if(isset($_POST['kirim'])){
    $Nama=$_POST['nama_peminjam'];
    $Alamat=$_POST['alamat'];
    $Umur=$_POST['umur'];
    $Keperluan=$_POST['keperluan'];
    $Jaminan=$_POST['jaminan'];
    $Nomor_Rangka=$_POST['nomor_rangka'];
    $Merek=$_POST['merek'];
    $Jenis_Motor=$_POST['jenis_motor'];
    $Tahun_Motor=$_POST['tahun_motor'];
    $Tanggal_Pinjam=$_POST['tanggal_pinjam'];
    $Tanggal_Kembali=$_POST['tanggal_kembali'];

    $sql="INSERT INTO tb_motor(nomor_rangka,merek,jenis_motor,tahun_motor,tanggal_pinjam,tanggal_kembali) 
    VALUES ('$Nomor_Rangka','$Merek','$Jenis_Motor','$Tahun_Motor','$Tanggal_Pinjam','$Tanggal_Kembali' )";
    $query=mysqli_query($db, $sql);

    $sql="SELECT max(id_motor) AS motor_id FROM tb_motor LIMIT 1";
    $query=mysqli_query($db, $sql);

    $data = mysqli_fetch_array($query);
    $as = $data ['motor_id'];

    $sql="INSERT INTO tb_pinjaman(nama_peminjam,alamat,umur,keperluan,jaminan,id_motor)
     VALUES ('$Nama','$Alamat','$Umur','$Keperluan','$Jaminan','$as' )";
    $query=mysqli_query($db, $sql);

    
    if($query){
                    header('location:tampil.php?status:sukses');
                }else{
                    header('location:tampil.php?status:gagal'); 
                }
            }
            ?>