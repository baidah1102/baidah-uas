<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-pelanggan.php" method="POST">
                    <div class="form-group">
                        <label for="id_pelanggan">id_pelanggan</label>
                        <input type="number" name="id_pelanggan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_film">nama_film</label>
                        <input type="text" name="nama_film" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="theater">theater</label>
                        <select name="theater" class="form-control">
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
</select>
                    </div>

                    <div class="form-group">
                        <label for="seat">seat</label>
                        <select name="seat" class="form-control">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="c">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                            <option value="J">J</option>
                            <option value="K">K</option>
                            <option value="L">L</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="harga_tiket">harga_tiket</label>
                        <input type="number" name="harga_tiket" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_tiket">jumlah_tiket</label>
                        <select name="jumlah_tiket" class="form-control">
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
</select>
                    </div>

                    <div class="form-group">
                        <label for="date">date</label>
                        <input type="date" name="date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="total_harga">total_harga</label>
                        <input type="number" name="total_harga" class="form-control"></textarea>
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
    
<?php include "footer.php";?>