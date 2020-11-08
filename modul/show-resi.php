<?php
include '../koneksi/koneksi.php';
include '../koneksi/function.php';
include '../admin-cp/model/m_tracking.php';

$noResi = $_POST['noResi'];

if (getTrackingById($noResi) == null) : ?>
   <div class="alert alert-warning">
      No.Resi tidak ditemukan!.
   </div>
<?php else : ?>
   <small>
      <div class="alert alert-success">
         <h5>No Resi: #<?= $noResi ?></h5>
         <p>
            <h6>Last Tracking</h6>
         </p>
         <p>
            <ul class="list-group">
               <?php foreach (getTrackingById($noResi) as $tracking) : ?>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     <?= $tracking['posisi'] ?>
                     <span class="badge badge-secondary badge-pill"><?= time_elapsed_string($tracking['waktu']) ?></span>
                  </li>
               <?php endforeach ?>
            </ul>
         </p>
      </div>
   </small>
<?php endif ?>