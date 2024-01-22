<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>

<div class="container">
    <h3 class="text-center mt-3 mb-5">SILAHKAN TAMBAH DAFTAR FILM</h3>
    <div class="card p-5 mb-5">
      <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
          <label for="menu1">Nama Film</label>
          <input type="text" class="form-control" id="film1" name="nama_film">
        </div>
        <div class="form-group">
          <label for="harga1">Harga</label>
          <input type="text" class="form-control" id="harga1" name="harga">
        </div>
        <div class="form-group">
          <label for="gambar">Upload Foto</label>
          <input type="file" class="form-control-file border" id="gambar" name="gambar">
        </div><br>
        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
        <button type="reset" class="btn btn-danger" name="reset">Hapus</button>
      </form>

      <?php 
  if(isset($_POST['tambah'])){
    $nama = $_POST['nama_film'];
    $harga = $_POST['harga'];
    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = './images/';

    move_uploaded_file($source, $folder.$nama_file);
    $insert = mysqli_query($koneksi, "INSERT INTO film VALUES (NULL, '$nama','$harga', '$nama_file')");

    if($insert){
      header("location: index.php");
    }
    else {
      echo "Maaf, terjadi kesalahan saat mencoba menyimpan data ke database";
    }
  }

   ?>

  </div>
  </div>