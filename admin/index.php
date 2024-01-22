<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display4"><span class="font-weight-bold">MY YOU MOVIE</span></h1>
          <hr>
          <p class="lead font-weight-bold">Dengan Menonton Film Bisa Membuatmu Terasa Lebih Hidup <br> 
          Enjoy Your Movie Time</p>
        </div>
      </div>
		<br><div class="container">
		<!-- Awal Panel -->
        <p><p> <b><h1 class="text-center">NOW SHOWING</h1></p></b></p>
        <p><p> <b><h1 class="text-center">CHOOSE YOUR MOVIE</h1></p></b></p> <br>
        
        <div class="container">
        <div class="row mt-3">

        <br><div class="container">
        <a href="tambah-menu-film.php" class="btn btn-warning mt-3">TAMBAH DAFTAR FILM</a>
        <div class="row"> <br> <br>

          <?php 

          include('../koneksi.php');

          $sql=$koneksi->query("SELECT * FROM film");
          $result = mysqli_fetch_all($sql, MYSQLI_ASSOC);
            

          ?>

          <?php foreach($result as $result) : ?>
          <div class = "row">
          <div class="col-md-3 mt-3">
            <div class="card brder-dark">
              <img src="images/<?php echo $result['gambar'] ?>" width="200" height="300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold"><?php echo $result['nama_film'] ?></h5>
               <label class="card-text harga"><strong>Rp.</strong> <?php echo number_format($result['harga']); ?></label><br>
                <a href=".php?id_film=<?php echo $result['id_film']; ?>" class="btn btn-success btn-sm  ">EDIT</a>
                <a href="sinopsis=<?php echo $result['sinopsis']; ?>" class="btn btn-danger btn-sm  ">SINOPSIS</a>
                <a href="https://youtu.be/1VIZ89FEjYI?si=w5nrSr65cYGgvb6O trailer=<?php echo $result['trailer']; ?>" class="btn btn-info btn-sm  ">TRAILER</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
         </div> 
      </div>
<!-- Akhir Panel -->
		</div><!--  Akhir Page -->
<br><?php include "footer.php"; ?> <!-- Akhir Jumbotron -->
