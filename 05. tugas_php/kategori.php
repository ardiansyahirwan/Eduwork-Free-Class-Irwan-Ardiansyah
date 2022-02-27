<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kategori</title>
</head>

<body>
   <h2>BMI CALCULATOR</h2>
   <pre>
      <form action="" method="POST">
         <input type="text" name="nama" placeholder="Masukkan Nama"><br>
         <input type="text" name="tinggiBadan" placeholder="Tinggi Badan"> <span>Cm</span> <br>
         <input type="text" name="beratBadan" placeholder="Berat Badan"> <span>Kg</span> <br>
         <button type="submit"> Submit</button>
      </form>
   </pre>
   <?php
   if (isset($_POST['beratBadan']) && isset($_POST['tinggiBadan']) && isset($_POST['nama'])) {
      $beratBadan = $_POST['beratBadan'];
      $tinggiBadan = $_POST['tinggiBadan'];
      $nama = $_POST['nama'];
      $tinggiDalamMeter = $tinggiBadan / 100;
      $hasilBmi = $beratBadan / ($tinggiDalamMeter * $tinggiDalamMeter);
      $hasilBmi = round($hasilBmi, 1);
      if ($hasilBmi < 18.5) {
         echo "halo, $nama. Nilai BMI anda adalah $hasilBmi , anda termasuk Kekurangan Berat Badan";
      } else if ($hasilBmi < 25.0) {
         echo "halo, $nama. Nilai BMI anda adalah $hasilBmi , anda termasuk Normal (Ideal)";
      } else if ($hasilBmi < 30.0) {
         echo "halo, $nama. Nilai BMI anda adalah $hasilBmi , anda termasuk Kelebihan Berat Badan";
      } else {
         echo "halo, $nama. Nilai BMI anda adalah $hasilBmi , anda termasuk Kegemukan (Obesitas) ";
      }
   } else {
      echo "nilai Belum dimasukkan";
   }
   ?>
</body>

</html>