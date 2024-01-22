<?php

include "koneksi.php";

$id=$_POST['id_pelanggan'];
$nama_film=$_POST['nama_film'];
$theater=$_POST['theater'];
$seat=$_POST['seat'];
$harga_tiket=$_POST['harga_tiket'];
$jumlah_tiket=$_POST['jumlah_tiket'];
$date=$_POST['date'];
$total_harga=$_POST['total_harga'];

$ubah=$koneksi->query("update datapelanggan set id_pelanggan='$id', nama_film='$nama_film', theater='$theater', seat='$seat', harga_tiket='$harga_tiket', jumlah_tiket='$jumlah_tiket', date='$date', total_harga='$total_harga' where id_pelanggan='$id'");

if($ubah==true){

    header("location:tampil-pelanggan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>