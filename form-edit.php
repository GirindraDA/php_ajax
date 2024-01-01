<?php
include "koneksi.php";

$idMahasiswa = $_GET['idMahasiswa'];
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE idMahasiswa = '$idMahasiswa'");
$result = mysqli_fetch_array($query);
?>

<div class="container">
    <form id="formEdit" method="post">
        <table class="table table-responsive">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" class="form-control" name="idMahasiswa" id="idMahasiswa" value="<?php echo $result['idMahasiswa']; ?>" required="" />
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $result['nama']  ?>" required="" />
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <label>
                        <input type="radio" name="jenisKelamin" id="jenisKelamin" value="Laki-laki" <?php if($result['jenisKelamin'] == "laki-laki") echo "checked"; ?>  required="" />Laki-laki</label>
                    <label>
                        <input type="radio" name="jenisKelamin" id="jenisKelamin" value="Perempuan" <?php if($result['jenisKelamin'] == "perempuan") echo "checked"; ?> required="" />Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" class="form-control" id="alamat" cols="20" rows="5">
                        <?php echo $result['alamat']; ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>
                    <input type="text" class="form-control" name="telepon" id="telepon" value="<?php echo $result['telepon']; ?>" required="" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $result['email']; ?>" required="" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-warning" name="simpan" id="simpan">Simpan</button>
                    <button type="button" class="btn btn-danger" name="cancel" id="cancelButton">Cancel</button>
                </td>
            </tr>
        </table>
    </form>
</div>