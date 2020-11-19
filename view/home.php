 <!-- banner -->
 <section id="banner">
    <div class="row justify-content-center">
       <div class="col-lg-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">
                <div class="carousel-item active">
                   <div class="container">
                      <div class="row justify-content-between">
                         <div class="col-lg-5 a-banner">
                            <?php $banner = getMenu("Kirim Barang Tanpa Khawatir"); ?>
                            <h1><?= $banner['judul'] ?> </h1>
                            <p>
                               <?= $banner['paragraf'] ?>
                            </p>
                            <a href="<?= $banner['link'] ?>" <button class="btn btn-outline-light c-banner">Pilih Layanan</button></a>
                         </div>
                         <div class="col-lg-5 d-banner">
                            <img class="img-banner" src="./images/menu/<?= $banner['gambar'] ?>" alt="banner">
                         </div>
                      </div>
                   </div>
                </div>
                <div class="carousel-item">
                   <div class="container">
                      <div class="row justify-content-between">
                         <div class="col-lg-5">
                            <h1><?= $banner['judul'] ?> </h1>
                            <p>
                               <?= $banner['paragraf'] ?>
                            </p>
                            <a href="<?= $banner['link'] ?>" <button class="btn btn-outline-light c-banner">Pilih Layanan</button></a>
                         </div>
                         <div class="col-lg-5">
                            <img class="img-banner" src="./images/menu/<?= $banner['gambar'] ?>" alt="banner">
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
             </a>
          </div>
       </div>
    </div>
    <img class="visual-1" src="./Assets/visual/visual1.png" alt="visual">
 </section>
 <!-- akhir banner -->


 <!-- ongkos-kirim -->
 <section id="ongkir">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="bg-ongkir">
                <div class="container">
                   <div class="row justify-content-center">
                      <div class="col-lg-5 cek-ongkir a-banner">
                         <h1>Hitung Ongkos Kirim</h1>
                         <p>
                            <h6>Hitung estimasi biaya pengiriman paket anda
                               dengan menginput kota asal, tujuan dan berat barang </h6>
                         </p>
                         <p>
                            <input class="form-control" type="text" placeholder="Kota Asal">
                         </p>
                         <p>
                            <input class="form-control" type="text" placeholder="Kota Tujuan">
                         </p>
                         <p>
                            <input class="form-control" type="text" placeholder="Berat Barang (grams)">
                         </p>
                         <p>
                            <button type="button" class="btn btn-outline-warning">Clear</button>
                            <a href="./Informasi.html"><button type="button" class="btn btn-warning">Cek Biaya</button></a>
                         </p>
                      </div>
                      <div class="col-lg-5 lacak a-banner">
                         <h1>Lacak Kiriman</h1>
                         <p>
                            <h6>Lacak keberadaan paket anda secara akurat</h6>
                         </p>
                         <p>
                            <input class="form-control" type="text" placeholder="Lacak Kiriman Anda">
                         </p>
                         <img class="img-lacak" src="./Assets/img/delivery.png" alt="delivery">
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- akhir ongkos kirim -->

 <!-- kerjasama-->
 <section id="kerjasama">
    <div class="container">
       <div class="row justify-content-between">
          <div class="col-lg-5 a-kerjasama">
             <?php $kerjasama = getMenu("Kerjasama Secara Kekeluargaan"); ?>
             <img class="img-work" src="./images/menu/<?= $kerjasama['gambar'] ?>" alt="">
          </div>
          <div class="col-lg-6 b-kerjasama">
             <h1><?= $kerjasama['judul'] ?></h1>
             <p><?= $kerjasama['paragraf'] ?></p>
             <p>
                <a href="<?= $kerjasama['link'] ?>"> <button class="btn btn-warning">Pilih Layanan</button></a>
             </p>
          </div>
       </div>
    </div>
 </section>
 <!-- akhir kerjasama -->


 <!-- timbangan -->
 <section id="timbangan">
    <div class="container">
       <div class="row justify-content-between">
          <div class="col-lg-6 a-kerjasama">
             <?php $timbangan = getMenu("Timbangan Akurat"); ?>
             <h1><?= $timbangan['judul'] ?></h1>
             <p><?= $timbangan['paragraf'] ?></p>
             <p>
                <a href="<?= $timbangan['link'] ?>"> <button class="btn btn-warning">Pilih Layanan</button></a>
             </p>
          </div>
          <div class="col-lg-5 b-kerjasama">
             <img class="img-timbangan" src="./images/menu/<?= $timbangan['gambar'] ?>" alt="">
          </div>
       </div>
    </div>
 </section>
 <!-- alhir timbangan -->


 <!-- pengiriman-->
 <section id="pengiriman">
    <div class="container">
       <div class="row justify-content-between">
          <div class="col-lg-5">
             <?php $pengiriman = getMenu("Pengiriman Lebih Cepat"); ?>
             <img class="img-pengiriman a-kerjasama" src="./images/menu/<?= $pengiriman['gambar'] ?>" alt="">
          </div>
          <div class="col-lg-6 b-kerjasama">
             <h1><?= $pengiriman['judul'] ?></h1>
             <p><?= $pengiriman['paragraf'] ?></p>
             <p>
                <a href="<?= $pengiriman['link'] ?>"> <button class="btn btn-warning">Pilih Layanan</button></a>
             </p>
          </div>
       </div>
    </div>
 </section>
 <!-- akhir kerjasama -->


 <!-- pick up -->
 <section id="pick-up">
    <div class="container">
       <div class="row justify-content-between">
          <div class="col-lg-6 a-kerjasama">
             <?php $pick = getMenu("Pickup Delivery"); ?>
             <h1><?= $pick['judul'] ?></h1>
             <p><?= $pick['paragraf'] ?></p>
             <p>
                <a href="<?= $pick['link'] ?>"> <button class="btn btn-warning">Pilih Layanan</button></a>
             </p>
          </div>
          <div class="col-lg-5 b-kerjasama">
             <img class="img-pick-up" src="./images/menu/<?= $pick['gambar'] ?>" alt="">
          </div>
       </div>
    </div>
 </section>
 <!-- alhir timbangan -->


 <!-- ekspedisi -->
 <section id="ekpedisi">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 text-ekspedisi a-kerjasama">
             <?php $ekpedisi = getMenu("Pilih ekspedisi berkualitas dengan layanan terpercaya"); ?>
             <h1><?= $ekpedisi['judul'] ?></h1>
             <hr style="border-color:rgb(215, 204, 204); border-width: 1px; ">
             <a href="<?= $ekpedisi['link'] ?>"> <button class="btn btn-outline-warning">Pilih Layanan</button></a>
          </div>
       </div>
    </div>
 </section>
 <!-- akhir ekspedisi -->


 <!-- ratings -->
 <section id="rating">
    <div class="container">
       <div class="row text-center judul-rating a-banner">
          <div class="col">
             <h1><b>Apa Kata Mereka</b> <br> Tentang Kami</h1>
             <img src="./Assets/visual/visual2.png" alt="">
          </div>
       </div>
       <div class="row justify-content-between">
          <div class="col-lg-5 content-rating">
             <h1>Yudies Company</h1>
             <img src="./Assets/icon/ic_star.png" alt="">
             <img src="./Assets/icon/ic_star.png" alt="">
             <img src="./Assets/icon/ic_star.png" alt="">
             <img src="./Assets/icon/ic_star.png" alt="">
             <img src="./Assets/icon/ic_star.png" alt="">
             <p>
                kami sudah menggunakan jasa syn cepat sejak pertama kami memulai bisnis kami 2019 , hingga saat
                ini kami bisa lebih luas lagi menjangkau ke daerah seluruh wilayah indonesia
             </p>
             <hr style="border: 1px solid rgba(139, 129, 129, 0.637);">
             <p>
                <a href="?page=ulasan-rating"> <button class="btn btn-warning">Berikan Ulasan Anda</button></a>
             </p>
          </div>
          <div class="col-lg-3">
             <div class="bg-rating text-center">
                <h1>4.8</h1>
                <p>Widi Saputra</p>
                <img src="./Assets/icon/ic_star.png" alt="">
                <img src="./Assets/icon/ic_star.png" alt="">
                <img src="./Assets/icon/ic_star.png" alt="">
                <img src="./Assets/icon/ic_star.png" alt="">
                <img src="./Assets/icon/ic_star.png" alt="">
             </div>
          </div>
          <div class="col-lg-3">
             <div class="bg-rating text-center">
                <h1>4.9</h1>
                <p>Mutia Romawati</p>
                <img src="./Assets/icon/ic_star.png" alt="">
                <img src="./Assets/icon/ic_star.png" alt="">
                <img src="./Assets/icon/ic_star.png" alt="">
                <img src="./Assets/icon/ic_star.png" alt="">
                <img src="./Assets/icon/ic_star.png" alt="">
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- akhir ratings -->