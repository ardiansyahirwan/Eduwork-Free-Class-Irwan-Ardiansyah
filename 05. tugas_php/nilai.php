<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nilai</title>
</head>

<body>
   <?php
   if (isset($_POST['nilai'])) {
      $nilai = $_POST['nilai'];
      $nilai = (int)$nilai;
      switch ($nilai) {
         case $nilai >= 90 && $nilai < 101:
            $hasil =  "Nilai anda $nilai Anda mendapat hasil A";
            break;
         case $nilai < 90 && $nilai > 79:
            $hasil =   "Nilai anda $nilai Anda mendapat hasil B";
            break;
         case $nilai < 80 && $nilai > 69:
            $hasil =   "Nilai anda $nilai Anda mendapat hasil C";
            break;
         case $nilai < 70:
            $hasil =   "Nilai anda $nilai Anda mendapat hasil D";
            break;
         default:
            $hasil =   "cek nilai anda disini";
            break;
      }
   } else {
      $hasil = "Nilai Belum dimasukan";
   }

   ?>
   <h2>Cek Nilai</h2>
   <pre>
      <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST">
      <label for="nilai">Nilai</label> <input type="text" name="nilai" placeholder="input nilai"> <br>
      <button type="submit">Cek Nilai</button>
   </form>
</pre>
   <p>hasil :</p>
   <p><?= $hasil; ?></p>
</body>

</html>