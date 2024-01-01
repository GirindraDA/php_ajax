<button id="addButton" class="btn btn-primary">Tambah Data</button>
<br>
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM Mahasiswa ORDER BY idMahasiswa DESC") or die(mysqli_error_list($koneksi));
        while( $result = mysqli_fetch_array($query)){
        ?>

         <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $result['nama']; ?></td>
            <td><?php echo $result['jenisKelamin']; ?></td>
            <td><?php echo $result['alamat']; ?></td>
            <td><?php echo $result['telepon']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td>
                <button id="editButton" class="btn btn-warning"  value="<?php echo $result['idMahasiswa']; ?>">Edit</button>
                <button id="deleteButton" class="btn btn-danger"  value="<?php echo $result['idMahasiswa']; ?>">Delete</button>
            </td>
        </tr>

        <?php 
            } 
        ?>
    </tbody>
</table>