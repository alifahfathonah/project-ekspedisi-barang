  <!-- footer -->
  <section id="footer-2">
     <div class="container">
        <div class="row">
           <div class="col-lg-5">
              <?php
               $data = getInfo();
               ?>
              <img src="images/info/<?= $data['logo'] ?>" alt="">
              <br>
              <br>
              <p>
                 <?= $data['visi'] ?>
              </p>
           </div>
           <div class="col-lg-3">
              <h1>Perusahaan</h1>
              <p>
                 Layanan Kami
              </p>
              <?php
               $layanan = getLayanan();
               $no = 1;
               foreach ($layanan as $data_layanan) : ?>
                 <p>
                    <?= $data_layanan['layanan'] ?>
                 </p>
              <?php endforeach ?>
              <!-- <p>
                REG (Reguler)
             </p> -->
           </div>
           <div class="col-lg-3">
              <h1> <?= $data['alamat'] ?></h1>
           </div>
        </div>
        <hr style="border-color: wheat;">
        <div class="row">
           <p>
              <?= $data['copyright'] ?>
           </p>
        </div>
     </div>
  </section>
  <!-- akhir footer -->