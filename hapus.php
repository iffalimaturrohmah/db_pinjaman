<?php
//------------koneksi---------------------//
include("koneksi.php");
//---------------------------------------//
$id = $_GET['id'];
//--------query------------------------//
$sql= "DELETE FROM tb_pinjaman where id_pemnjam=$id";
$query = mysqli_query($db, $sql);
//---------------------------------------------------//
$sql= "DELETE FROM tb_motor where id_motor=$id";
$query = mysqli_query($db, $sql);
//-------------------------------------------------//
if($query){
    header("Location:tampil.php?status=sukses");
}else{
    die("akses dilarang");  
}
?>