<h3>Data Pengiriman
   <a href="?page=add-pengiriman" class="btn btn-outline-info float-right">Tambah Data Pengiriman</a>
</h3>
<br>
<?php tampilNotif() ?>
<form action="?page=act-barang" method="POST">
   <table class="table table-striped" id="tableSaya">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jenis</th>
            <th scope="col">Berat</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
            <th scope="col">Delete</th>
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
               <td>
                  <input type="checkbox" name="delete[]" value="<?= $data['id_barang'] ?>">
               </td>
            </tr>
         <?php endforeach ?>
      </tbody>
      <tfoot>
         <tr>
            <td colspan="7">
               <button type="submit" class="btn btn-outline-danger btn-sm float-right" name="btn-deleteByChecklist">Delete by Checklist</button>
            </td>
         </tr>
      </tfoot>
   </table>
</form>