<div class="list-group">
   <?php
   if ($_SESSION['Level'] == 'admin') : ?>
      <a href="?page=dashboard" class="list-group-item list-group-item-action <?= isset($_GET['page']) ? $_GET['page'] == 'dashboard' ? 'active' : '' : 'active' ?>">
         Dashboard
      </a>

      <a href="?page=users-2" class="list-group-item list-group-item-action <?= isset($_GET['page']) ? $_GET['page'] == 'users-2' ? 'active' : '' : '' ?>">Users-2</a>

      <a href="?page=datalayanan" class="list-group-item list-group-item-action <?= isset($_GET['page']) ? $_GET['page'] == 'datalayanan' ? 'active' : '' : '' ?>">Data Layanan</a>


      <a href="?page=barang" class="list-group-item list-group-item-action <?= isset($_GET['page']) ? $_GET['page'] == 'barang' ? 'active' : '' : '' ?>">Barang</a>

      <a href="?page=pengiriman" class="list-group-item list-group-item-action <?= isset($_GET['page']) ? $_GET['page'] == 'pengiriman' ? 'active' : '' : '' ?>">Pengiriman</a>

   <?php else : ?>
      <a href="?page=dashboard" class="list-group-item list-group-item-action <?= isset($_GET['page']) ? $_GET['page'] == 'dashboard' ? 'active' : '' : 'active' ?>">
         Dashboard
      </a>

      <a href="?page=tracking" class="list-group-item list-group-item-action <?= isset($_GET['page']) ? $_GET['page'] == 'tracking' ? 'active' : '' : '' ?>">Tracking</a>

   <?php endif ?>

</div>