<div class="container">
    <form id="formAdd" method="post">
        <table class="table table-responsive">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" class="form-control" name="nama" id="nama" required="" />
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <label>
                        <input type="radio" name="jenisKelamin" id="jenisKelamin" value="Laki-laki" required=""/>Laki-laki
                    </label>
                    <label>
                        <input type="radio" name="jenisKelamin" id="jenisKelamin" value="Perempuan" required="" />Perempuan
                    </label>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" class="form-control" id="alamat" cols="20" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>
                    <input type="text" class="form-control" name="telepon" id="telepon" required="" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" class="form-control" name="email" id="email" required="" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-warning"  name="simpan" id="simpan">Simpan</button>
                    <button type="button" class="btn btn-danger"  name="cancel" id="cancelButton">Cancel</button>
                </td>
            </tr>
        </table>
    </form>
</div>