<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nilai</title>
</head>

<body>
   <h2>Cek Nilai</h2>
   <pre>
      <form action="" method="POST">
      <label for="nilai">Nilai</label> <input type="text" name="nilai" placeholder="input nilai"> <br>
      <button type="submit">Cek Nilai</button>
   </form>
   </pre>
</body>

</html>

<?php
$nilai = $_POST['nilai'];
$nilai = (int)$nilai;
switch ($nilai) {
   case $nilai >= 90 && $nilai < 101:
      echo "Anda mendapat nilai A";
      break;
   case $nilai < 90 && $nilai > 79:
      echo "Anda mendapat nilai B";
      break;
   case $nilai < 80 && $nilai > 69:
      echo "Anda mendapat nilai C";
      break;
   case $nilai < 70:
      echo "Anda mendapat nilai D";
      break;
   default:
      echo "cek nilai anda disini";
      break;
}
?>