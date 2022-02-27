<?php
$data = file_get_contents('http://localhost/IRWAN_ARDIANSYAH_freeclass_eduwork/05.%20tugas_php/data.json');
$json = json_decode($data, true); ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas Array</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <div class="container">
         <a class="navbar-brand" href="#">Daftar Nilai</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
      </div>
   </nav>
   <!-- End Navbar -->

   <!-- Table -->
   <div class="container mt-5">
      <div class="row">
         <div class="col-12">
            <table class="table table-striped table-hover">
               <thead>
                  <tr>
                     <th scope="col">No</th>
                     <th scope="col">Nama</th>
                     <th scope="col">Tanggal Lahir</th>
                     <th scope="col">Umur</th>
                     <th scope="col">Alamat</th>
                     <th scope="col">Kelas</th>
                     <th scope="col">Nilai</th>
                     <th scope="col">Hasil</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($json as $data) { ?>
                     <?php
                     $nilai = $data['nilai'];
                     switch ($nilai) {
                        case $nilai >= 90 && $nilai < 101:
                           $hasil = 'A';
                           break;
                        case $nilai < 90 && $nilai > 79:
                           $hasil = 'B';
                           break;
                        case $nilai < 80 && $nilai > 69:
                           $hasil = 'C';
                           break;
                        case $nilai < 70:
                           $hasil = 'D';
                           break;
                        default:
                           break;
                     }

                     $today = new DateTime("today");
                     $birth = new DateTime($data['tanggal_lahir']);
                     $y = $today->diff($birth)->y;
                     ?>
                     <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['tanggal_lahir']; ?></td>
                        <td><?= $y; ?> Tahun</td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['kelas']; ?></td>
                        <td><?= $data['nilai']; ?></td>
                        <td><?= $hasil; ?></td>
                        <?php $no++; ?>
                     <?php } ?>
                     </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>

   <!-- End Table -->

   <!-- Bootstrap Script -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>