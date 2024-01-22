<?php

$id_pelanggan=$_POST['id_pelanggan'];
$nama_film=$_POST['nama_film'];
$theater=$_POST['theater'];
$seat=$_POST['seat'];
$harga_tiket=$_POST['harga_tiket'];
$jumlah_tiket=$_POST['jumlah_tiket'];
$date=$_POST['date'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("insert into datapelanggan(id_pelanggan,nama_film,theater,seat,harga_tiket,jumlah_tiket,date,total_harga) 
                        values ('$id_pelanggan', '$nama_film', '$theater', '$seat', '$harga_tiket', '$jumlah_tiket', '$date', '$total_harga')");

if($simpan==true){

    header("location:tampil-pelanggan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>