<div class="list-group">

   <a href="?page=dashboard" class="list-group-item list-group-item-action <?= isset($_GET['page']) ? $_GET['page'] == 'dashboard' ? 'active' : '' : '' ?>">
      Dashboard
   </a>
   <a href="?page=users" class="list-group-item list-group-item-action <?= isset($_GET['page']) ? $_GET['page'] == 'users' ? 'active' : '' : '' ?>">Users</a>
   <a href="#" class="list-group-item list-group-item-action">Data Layanan</a>
   <a href="#" class="list-group-item list-group-item-action">Barang</a>
   <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Tracking</a>
</div>