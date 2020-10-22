<?php
if (isset($_SESSION['Level'])) {
   header("Location: index.php");
}
?>
<!-- Judul Halaman ulasan & rating -->
<section id="judul-ulasan-rating">
   <div class="container">
      <div class="row text-center">
         <div class="col">
            <h2> Login <b>Your Account</b></h2>
            <hr style="width: 80px; border-width: 3px; border-color: white">
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-lg-6 text-center ">
            <?php tampilNotif(); ?>
            <div class="halaman-ulasan-rating">
               <form action="?page=aksi-login" method="POST">
                  <p>
                     <input class="form-control" name="email" type="text" placeholder="Email" required>
                  </p>
                  <p>
                     <div>
                        <input class="form-control" name="password" id="password" type="password" placeholder="Password" required>
                        <a href="#" id="lihat" class="float-right" style="position:absolute; right:62px; top:110px" onclick="lihatPassword()">Lihat Password</a>
                     </div>
                  </p>
                  <p>
                     <input name="rememberme" id="rememberme" type="checkbox">
                     <label for="rememberme">Ingat Saya</label>
                  </p>
                  <div class="row text-center">
                     <div class="col-lg-12">
                        <p>
                           <button type="submit" name="login" class="btn btn-warning">Login</button>
                        </p>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Akhir judul halaman ulasan & rating -->