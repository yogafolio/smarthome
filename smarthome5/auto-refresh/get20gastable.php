<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conntable.php");

$no = 1;
      $res = $conn->query("SELECT * FROM gasdata ORDER BY id DESC");
      while($no<=20&&$row = $res->fetch_assoc()){
        echo '
        <tr>
          <td class="text-center">'.$no.'</td>
          <td class="text-center">'.$row['lpg'].'</td>
          <td class="text-center">'.$row['co'].'</td>
          <td class="text-center">'.$row['smoke'].'</td>
          <td class="text-center">'.$row['total'].'</td>
          <td class="text-center">'.$row['datetime'].'</td>

        </tr>
        ';
        $no++;
      }
 ?>
