<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bangun Datar</title>
</head>

<body>
   <h4>Luas persegi panjang dengan panjang 5 dan lebar 10</h4>
   <p>L = P x L</p>
   <?php
   $p = 5;
   $l = 10;
   $luas = $p * $l;
   echo "$p x $l = $luas"
   ?>

   <h4>Keliling persegi panjang dengan panjang 5 dan lebar 10</h4>
   <p>K = 2 (P + L)</p>
   <?php
   $p = 5;
   $l = 10;
   $keliling = 2 * ($p + $l);
   echo "2 x ($p + $l) = $keliling"
   ?>

   <h4>Keliling persegi dengan panjang sisi nya 7 </h4>
   <p>K = 4 x S</p>
   <?php
   $s = 7;
   $keliling = 4 * $s;
   echo "4 x $s = $keliling"
   ?>

   <h4>Luas segitiga dengan alas 7 dan tinggi 10 </h4>
   <p>L = 1/2 x a x t</p>
   <?php
   $a = 7;
   $t = 10;
   $luas = 1 / 2 * ($a * $t);
   echo "1/2 x $a x $t = $luas"
   ?>

   <h4>Luas lingkaran dengan jari-jari 6 </h4>
   <p>L = phi x r <sup>2</sup></p>
   <?php
   $phi = 3.14;
   $r = 6;
   $luas = $phi * ($r * $r);
   echo "$phi x $r x $r = $luas"
   ?>


</body>

</html>