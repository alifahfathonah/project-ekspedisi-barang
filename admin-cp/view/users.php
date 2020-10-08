<h1>Data Users
   <a href="?page=add-users" class="btn btn-outline-info float-right">Tambah Users</a>
</h1>
<?= tampilNotif() ?>
<table class="table table-striped">
   <thead>
      <tr>
         <th scope="col">#</th>
         <th scope="col">Username</th>
         <th scope="col">Nama Lengkap</th>
         <th scope="col">Jenis Kelamin</th>
         <th scope="col">Level</th>
         <th scope="col">Status</th>
         <th scope="col"><i>Last Login</i></th>
         <th scope="col"><i>Aksi</i></th>
      </tr>
   </thead>
   <tbody>
      <?php
      $users = getUsers();
      $no = 1;
      foreach ($users as $data) : ?>
         <th><?= $no++ ?></th>
         <td><?= $data['username'] ?></td>
         <td><?= $data['nama_depan'] . ' ' . $data['nama_belakang'] ?></td>
         <td><?= $data['jk'] ?></td>
         <td><?= $data['level'] ?></td>
         <td><?= $data['status'] ?></td>
         <td><?= $data['login_at'] ?></td>
         <td>
            <a href="?page=upd-users&id=<?= $data['id_user'] ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="?page=act-users&aksi=delete&id=<?= $data['id_user'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">Delete</a>
         </td>
         </tr>
      <?php endforeach ?>
   </tbody>
</table>