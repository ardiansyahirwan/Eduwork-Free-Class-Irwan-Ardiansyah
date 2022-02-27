<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bangun Ruang</title>
</head>

<body>
   <h4>volume balok jika panjang 12 cm, lebar 7 cm dan tinggi 5cm</h4>
   <p>v = p x l x t</p>
   <?php
   $p = 12;
   $l = 7;
   $t = 5;
   $volume = $p * $l * $t;
   echo "V = $p x $l x $t = $volume"
   ?>

   <h4>volume kubus jika panjang sisinya 13 cm</h4>
   <p>v = s x s x s</p>
   <?php
   $s = 13;
   $volume = $s * $s * $s;
   echo "V = $s x $s x $s = $volume"
   ?>

   <h4>luas permukaan kubus jika panjang sisinya 13 cm</h4>
   <p>Lp = 6 x (s x s)</p>
   <?php
   $s = 13;
   $lp = 6 * ($s * $s);
   echo "Luas Permukaan = 6 ($s x $s) = $lp"
   ?>
</body>

</html>