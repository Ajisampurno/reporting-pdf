

<?php 

    require_once __DIR__ . '/vendor/autoload.php';


    require 'function.php';
    $manajemen = query("SELECT * FROM manajemen");
  

    $mpdf = new \Mpdf\Mpdf();

    
    $html = '

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <h1>REPORT DATA PENGUNJUNG HOTEL</h1>
        
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>NO telp</th>
                <th>No kamar</th>
                <th>Masuk</th>
                <th>Keluar</th>
            </tr>';

             $id = 1; 
             
            foreach ($manajemen as $baris)
            
                
            $html .= '<tr>
                    <td class="text-center">'. $id++ .'</td>
                    <td>'.$baris["nama"] .'</td>
                    <td>'.$baris["telp"] .'</td>
                    <td>'.$baris["nokamar"].'</td>
                    <td>'. $baris["masuk"] .'</td>
                    <td>'. $baris["keluar"] .'</td>
                </tr>';

        $html .= '      </table>
                        </body>
                    </html>';

    $mpdf->WriteHTML($html);
    $mpdf->Output();


    ?>
