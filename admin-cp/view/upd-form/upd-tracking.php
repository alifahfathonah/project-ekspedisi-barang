<?php
$noResi = $_GET['id'];
?>

<h3>Ubah Data Layanan</h3>
<?= tampilNotif() ?>
<form action="?page=act-tracking" method="POST">
   <input type="text" class="form-control" name="idlayanan" hidden>
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="noResi">No. Resi</label>
            <input type="text" class="form-control" readonly id="noResi" name="noResi" value="<?= $noResi ?>">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="posisi">Update Posisition</label>
            <textarea class="form-control" id="posisi" name="posisi" rows="3"> </textarea>
         </div>
      </div>
   </div>
   <div class="ROW">
      <div class="col">
         <div class="row justify-content-center">
            <button type="submit" class="btn btn-primary" name="update-tracking" style="width:50%">Simpan</button> &nbsp;
            <a href="?page=tracking" class="btn btn-danger">Batal</a>
         </div>

      </div>
   </div>
   <div class="row">
      <div class="col">
         <i>Last Position</i>
         <ul class="list-group">
            <?php foreach (getTrackingById($noResi) as $tracking) : ?>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  <?= $tracking['posisi'] ?>
                  <span class="badge badge-secondary badge-pill"><?= time_elapsed_string($tracking['waktu']) ?></span>
               </li>
            <?php endforeach ?>
         </ul>
      </div>
   </div>
   <hr>
</form>