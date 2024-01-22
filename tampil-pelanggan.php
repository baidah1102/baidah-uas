<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Pelanggan</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>id_pelanggan</th><th>nama_film</th><th>theater</th><th>seat</th><th>harga_tiket</th><th>jumlah_tiket</th><th>date</th><th>total_harga</th>
                <th>
                    <a href="input-pelanggan.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from datapelanggan order by id_pelanggan ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id_pelanggan']?></td>
                <td><?php echo $row['nama_film']?></td>
                <td><?php echo $row['theater']?></td>
                <td><?php echo $row['seat']?></td>
                <td><?php echo $row['harga_tiket']?></td>
                <td><?php echo $row['jumlah_tiket']?></td>
                <td><?php echo $row['date']?></td>
                <td><?php echo $row['total_harga']?></td>
                <td>

                <a href="edit-pelanggan.php?id=<?php echo $row['id_pelanggan']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-pelanggan.php?id=<?php echo $row['id_pelanggan']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>