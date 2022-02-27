<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas Function</title>

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <!-- Internal CSS -->
   <style>
      * {
         --secondary-color: #084594;
         --primary-color: #203239;
      }

      body {
         font-family: 'Montserrat', sans-serif;
         color: var(--primary-color);
      }

      .navbar-brand {
         font-weight: 600;
         color: var(--primary-color) !important;
         letter-spacing: 2px;
      }

      .nav-link {
         font-weight: 600;
         font-size: 15px;
         color: var(--primary-color) !important;
      }

      #bangunRuang {
         padding-top: 4.6em;
      }

      .section-heading-title {
         font-weight: 600;
         font-size: 26px;
      }

      .card .card-img-top {
         height: 30vh;
      }

      /* Utility */
      .color-blue {
         color: var(--secondary-color) !important;
      }

      .spacing {
         letter-spacing: 2px;
      }

      .color-black {
         color: var(--primary-color) !important;
      }

      /* end utility */
   </style>
</head>

<body>
   <?php
   $p = 12;
   $l = 7;
   $t = 5;
   $sisi = 13;
   $alas = 7;
   $tinggiSegitiga = 10;
   $jariJari = 6;
   function hitungVolumeBalok($p = 0, $l = 0, $t = 0)
   {
      return $p * $l * $t;
   }

   function hitungVolumeKubus($sisi)
   {
      return $sisi * $sisi * $sisi;
   }

   function luasPermukaanKubus($sisi)
   {
      return 6 * ($sisi * $sisi);
   }

   function luasPersegiPanjang($p = 0, $l = 0)
   {
      return $p * $l;
   }

   function kelilingPersegiPanjang($p = 0, $l = 0)
   {
      return 2 * ($p + $l);
   }

   function kelilingPersegi($sisi)
   {
      return 4 * $sisi;
   }

   function luasSegitiga($a, $t)
   {
      return 1 / 2 * ($a * $t);
   }

   function luasLingkaran($r)
   {
      return 3.14 * ($r * $r);
   }
   ?>

   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container py-2">
         <a class="navbar-brand" href="#">Web Rumus</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto me-5">
               <a class="nav-link pe-4 active" aria-current="page" href="#">Home</a>
               <a class="nav-link pe-4" href="#bangunRuang">Bangun Ruang</a>
               <a class="nav-link pe-4" href="#bangunDatar">Bangun Datar</a>
            </div>
         </div>
      </div>
   </nav>
   <!-- End Navbar -->

   <!-- Bangun Ruang -->
   <section id="bangunRuang">
      <div class="container pt-4">
         <h2 class="section-heading-title color-blue">Bangun Ruang</h2>
         <div class="row py-3">

            <!-- Volume Balok -->
            <div class="col-12 col-md-4 mb-5">
               <div class="card" style="width: 20rem;">
                  <img src="img/balok.jpg" class="card-img-top" alt="balok">
                  <div class="card-body spacing">
                     <div class="card-title fw-bold color-black">Volume Balok</div>
                     <p>hitunglah volume balok jika panjang <?= $p ?> cm, lebar <?= $l ?> cm dan tinggi <?= $t ?> cm</p>
                     <p>v = p x l x t</p>
                     <p><?= "v = $p x $l x $t" ?></p>
                     <p>hasil <?= hitungVolumeBalok($p, $l, $t) ?> cm<sup>3</sup></p>
                  </div>
               </div>
            </div>
            <!-- End Balok -->

            <!-- Volume Kubus -->
            <div class="col-12 col-md-4 mb-5">
               <div class="card" style="width: 20rem;">
                  <img src="img/kubus.png" class="card-img-top" alt="balok">
                  <div class="card-body spacing">
                     <div class="card-title fw-bold color-black">Volume Kubus</div>
                     <p>hitunglah volume kubus jika panjang sisinya <?= $sisi ?> cm</p>
                     <p>v = s x s x s</p>
                     <p><?= "v = $sisi x $sisi x $sisi" ?></p>
                     <p>Hasil <?= hitungVolumeKubus($sisi) ?> cm<sup>3</sup></p>
                  </div>
               </div>
            </div>
            <!-- End Kubus -->

            <!-- Luas Permukaan Kubus -->
            <div class="col-12 col-md-4 mb-5">
               <div class="card" style="width: 20rem;">
                  <img src="img/kubus.png" class="card-img-top" alt="balok">
                  <div class="card-body spacing">
                     <div class="card-title fw-bold color-black">Luas Permukaan Kubus</div>
                     <p>hitunglah luas permukaan kubus jika panjang sisinya <?= $sisi ?> cm</p>
                     <p>LP = 6 x (s x s)</p>
                     <p><?= "LP = 6 x ($sisi x $sisi)" ?></p>
                     <p>Hasil <?= luasPermukaanKubus($sisi) ?> cm<sup>3</sup></p>
                  </div>
               </div>
            </div>
            <!-- End Luas Permukaan -->
         </div>
      </div>
   </section>
   <!-- End Bangun Ruang -->

   <!-- Bangun Datar -->
   <section id="bangunDatar">
      <div class="container pt-4">
         <h2 class="section-heading-title color-blue">Bangun Datar</h2>
         <div class="row py-3">

            <!-- Luas Persegi -->
            <div class="col-12 col-md-4 mb-5">
               <div class="card" style="width: 20rem;">
                  <img src="img/persegi-panjang.png" class="card-img-top" alt="balok">
                  <div class="card-body spacing">
                     <div class="card-title fw-bold color-black">Luas Persegi Panjang</div>
                     <p>hitunglah Luas persegi panjang dengan panjang <?= $p ?> cm dan lebar <?= $l ?> cm</p>
                     <p>Luas = P x L</p>
                     <p><?= "Luas = $p x $l" ?></p>
                     <p>Hasil <?= luasPersegiPanjang($p, $l); ?> cm<sup>2</sup></p>
                  </div>
               </div>
            </div>
            <!-- End Luas Persegi -->

            <!-- Keliling Persegi -->
            <div class="col-12 col-md-4 mb-5">
               <div class="card" style="width: 20rem;">
                  <img src="img/persegi-panjang.png" class="card-img-top" alt="balok">
                  <div class="card-body spacing">
                     <div class="card-title fw-bold color-black">Keliling Persegi Panjang</div>
                     <p>hitunglah Keliling persegi panjang dengan panjang <?= $p ?> cm dan lebar <?= $l ?> cm </p>
                     <p>Keliling = 2 (P + L)</p>
                     <p><?= "Keliling = 2 ($p + $l)" ?></p>
                     <p>Hasil <?= kelilingPersegiPanjang($p, $l); ?> cm<sup>2</sup></p>
                  </div>
               </div>
            </div>
            <!-- End Keliling Pesegi -->

            <!-- Keliling Persegi Panjang -->
            <div class="col-12 col-md-4 mb-5">
               <div class="card" style="width: 20rem;">
                  <img src="img/persegi-2.jpg" class="card-img-top" alt="balok">
                  <div class="card-body spacing">
                     <div class="card-title fw-bold color-black">Keliling Persegi</div>
                     <p>hitunglah Keliling persegi dengan panjang sisi nya <?= $sisi ?> cm</p>
                     <p>K = 4 x S</p>
                     <p><?= "Keliling = 4 x $sisi" ?></p>
                     <p>Hasil <?= kelilingPersegi($sisi); ?> cm<sup>2</sup></p>
                  </div>
               </div>
            </div>
            <!-- End Keliling Persegi Panjang -->

            <!-- Luas Segitiga -->
            <div class="col-12 col-md-4 mb-5">
               <div class="card" style="width: 20rem;">
                  <img src="img/segitiga.jpg" class="card-img-top" alt="balok">
                  <div class="card-body spacing">
                     <div class="card-title fw-bold color-black">Luas Segitiga</div>
                     <p>Luas segitiga dengan alas <?= $alas; ?> cm dan tinggi <?= $tinggiSegitiga; ?> cm </p>
                     <p>L = 1/2 x a x t</p>
                     <p><?= "L = 1/2 x $alas x $tinggiSegitiga " ?></p>
                     <p>Hasil <?= luasSegitiga($alas, $tinggiSegitiga); ?> cm<sup>2</sup></p>
                  </div>
               </div>
            </div>
            <!-- End Luas Segitiga -->

            <!-- Luas Lingkaran -->
            <div class="col-12 col-md-4 mb-5">
               <div class="card" style="width: 20rem;">
                  <img src="img/lingkaran.jpg" class="card-img-top" alt="balok">
                  <div class="card-body spacing">
                     <div class="card-title fw-bold color-black">Luas Lingkaran</div>
                     <p>hitunglah Luas lingkaran dengan jari-jari <?= $jariJari; ?> cm, dan phi = 3.14 </p>
                     <p>L = phi x r<sup>2</sup></p>
                     <p><?= "L = 3.14 x $jariJari<sup>2</sup>"; ?></p>
                     <p> hasil <?= luasLingkaran($jariJari); ?> cm<sup>2</sup></p>
                  </div>
               </div>
            </div>
            <!-- End Luas Segitiga -->
         </div>
      </div>
   </section>
   <!-- End Bangun Datar -->

   <!-- Bootstrap Script -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>