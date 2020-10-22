<!-- banner -->
<section id="banner-layanan-kami">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 a-kerjasama">
                                    <h1>Kirim Barang Tanpa Khawatir</h1>
                                    <p>
                                        Apapun barang yang anda kirim jangan khawatir karena kami akan menjaga
                                        barang
                                        anda dengan baik dengan layanan cepat sampai aman & terpecaya
                                    </p>
                                    <button type="button" class="btn btn-outline-light">Pilih Layanan</button>
                                </div>
                                <div class="col-lg-5 b-kerjasama">
                                    <img class="img-banner" src="./Assets/img/o-service.png" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 a-kerjasama">
                                    <h1>Kirim Barang Tanpa Khawatir</h1>
                                    <p>
                                        Apapun barang yang anda kirim jangan khawatir karena kami akan menjaga
                                        barang
                                        anda dengan baik dengan layanan cepat sampai aman & terpecaya
                                    </p>
                                    <button type="button" class="btn btn-outline-light">Pilih Layanan</button>
                                </div>
                                <div class="col-lg-5 b-kerjasama">
                                    <img class="img-banner" src="./Assets/img/o-service.png" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <h1>Kirim Barang Tanpa Khawatir</h1>
                                    <p>
                                        Apapun barang yang anda kirim jangan khawatir karena kami akan menjaga
                                        barang
                                        anda dengan baik dengan layanan cepat sampai aman & terpecaya
                                    </p>
                                    <button type="button" class="btn btn-outline-light">Pilih Layanan</button>
                                </div>
                                <div class="col-lg-5">
                                    <img class="img-banner" src="./Assets/img/o-service.png" alt="banner">
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
</section>
<!-- akhir banner -->

<!-- pilihan layanan -->
<section id="pilihan-layanan">
    <div class="container">
        <div class="row text-center justify-content-center a-banner">
            <?php
            $layanan = getLayanan();
            foreach ($layanan as $data) : ?>
                <div class="col-lg-4 bg-layanan">
                    <img src="./images/layanan/<?= $data['icon'] ?>" alt="">
                    <h1><?= $data['layanan'] ?></h1>
                    <p><?= $data['keterangan'] ?></p>
                    <a href="<?= $data['link'] ?>"><button class="btn btn-warning">Cek Biaya</button></a>
                </div>
                <div class="col-lg-1"></div>
                <!-- <div class="col-lg-4 bg-layanan">
                    <img src="./Assets/icon/packet.png" alt="">
                    <h1>REG</h1>
                    <p>REGULER adalah layanan pengiriman ke seluruh wilayah Indonesia, waktu penyampaian kiriman 1-7 hari kerja,</p>
                    <a href="./Reg.html"><button class="btn btn-warning">Cek Biaya</button></a>
                </div> -->
            <?php endforeach ?>
        </div>
    </div>
</section>
<!-- akhir pilihan layanan -->


<!-- gambar -->
<section id="img-icon">
    <div class="container">
        <div class="row text-center justify-content-center a-banner">
            <div class="col-lg-12">
                <img src="./Assets/img/bg4.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- akhir gambar -->