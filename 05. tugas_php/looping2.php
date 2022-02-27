<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      table {
         text-align: center;
      }

      tr {
         height: 30px;
      }

      tr:nth-child(even) {
         background-color: gainsboro;
      }
   </style>
</head>

<body>
   <table border="1" cellspacing="0" width="30%">
      <tr bgcolor="blue">
         <th>No</th>
         <th>Nama</th>
         <th>Kelas</th>
      </tr>
      <?php for ($nama = 1; $nama < 11; $nama++) {  ?>
         <tr>
            <td><?= $nama; ?></td>
            <td>Nama ke <?= $nama; ?> </td>
            <?php $kelas = 11; ?>
            <td>kelas <?= $kelas - $nama; ?></td>
         </tr>
      <?php  } ?>
   </table>
</body>

</html>