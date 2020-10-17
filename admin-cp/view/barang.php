<h3>Data Barang
   <a href="?page=add-barang" class="btn btn-outline-info float-right">Tambah Data Barang</a>
</h3>
<br>
<?php tampilNotif() ?>
<table class="table table-striped">
   <thead>
      <tr>
         <th scope="col">#</th>
         <th scope="col">Nama Barang</th>
         <th scope="col">Jenis</th>
         <th scope="col">Berat</th>
         <th scope="col">Foto</th>
         <th scope="col">Aksi</th>
      </tr>
   </thead>
   <tbody>
      <?php
      $barang = getBarang();
      $no = 1;
      foreach ($barang as $data) : ?>
         <tr>
            <th><?= $no++ ?></th>
            <td><?= $data['nama_barang'] ?></td>
            <td><?= $data['jenis_barang'] ?></td>
            <td><?= $data['berat'] ?></td>
            <td><?= $data['foto'] ?></td>
            <td>
               <a href="?page=upd-barang&id=<?= $data['id_barang'] ?>" class="btn btn-sm btn-info">Edit
               </a>
               <a href="?page=act-barang&delete=one&id=<?= $data['id_barang'] ?>" onclick="return confirm('yakin ingin menghapus data ?')" class="btn btn-sm btn-danger">Delete</a>
            </td>
         </tr>
      <?php endforeach ?>
   </tbody>
</table>