<style>
    table, td, th {
                    border: 1px solid black;
                    }

                    table {
                    width: 100%;
                    border-collapse: collapse;
                    }
</style>

<?php 
    require 'function.php';

    $manajemen = query("SELECT * FROM manajemen");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>NO telp</th>
            <th>No kamar</th>
            <th>Masuk</th>
            <th>Keluar</th>
        </tr>

        <?php $id = 1; ?>
        <?php 
          foreach ($manajemen as $baris)
         : ?>

            <tr>
              <td class="text-center"><?php echo $id;?></td>
              <td><?php echo $baris["nama"]; ?></td>
              <td> <?php echo $baris["telp"]; ?></td>
              <td><?php echo $baris["nokamar"]; ?></td>
              <td><?php echo $baris["masuk"]; ?></td>
              <td><?php echo $baris["keluar"]; ?></td>
            </tr>

          <?php $id =$id+1; ?>      
        <?php endforeach; ?>
    </table>
</body>
</html>