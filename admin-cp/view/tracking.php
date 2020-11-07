<h3>Data Tracking</h3>
<br>
<form action="" method="POST">
   <table class="table table-striped" id="tableSaya">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">No Resi</th>
            <th scope="col">Posisi Terakhir</th>
            <th scope="col">Waktu</th>
            <th scope="col">Posisi</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $tracking = getTracking();
         $no = 1;
         foreach ($tracking as $data) : ?>
            <tr>
               <th><?= $no++ ?></th>
               <td><?= $data['no_resi'] ?></td>
               <td><?= $data['posisi'] ?></td>
               <td><?= $data['waktu'] ?></td>
               <td><a href="?page=upd-tracking&id=<?= $data['no_resi'] ?>" class="btn btn-sm btn-info">Posisi</a></td>
            </tr>
         <?php endforeach ?>
      </tbody>
   </table>
</form>