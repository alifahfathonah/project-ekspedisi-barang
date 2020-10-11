<h1>Data Layanan
   <a href="?page=add-layanan" class="btn btn-outline-info float-right">Tambah Layanan</a>
</h1>
<?= tampilNotif() ?>
<table class="table table-striped">
   <thead>
      <tr>
         <th scope="col">#</th>
         <th scope="col">Layanan</th>
         <th scope="col">Keterangan</th>
         <th scope="col">Icon</th>
         <th scope="col">Status</th>
         <th scope="col"><i>Aksi</i></th>
      </tr>
   </thead>
   <tbody>
      <?php
      $no = 1;
      foreach (getLayananById() as $data) : ?>
         <th><?= $no++ ?></th>
         <td><?= $data['layanan'] ?></td>
         <td><?= $data['keterangan'] ?></td>
         <td><?= $data['icon'] ?></td>
         <td><?= $data['status'] ?></td>
         <td>
            <a href="?page=upd-users&id=<?= $data['id_layanan'] ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="?page=act-users&aksi=delete&id=<?= $data['id_layanan'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">Delete</a>
         </td>
         </tr>
      <?php endforeach ?>
   </tbody>
</table>