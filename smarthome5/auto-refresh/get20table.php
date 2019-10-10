<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conntable.php");

$no = 1;
      $res = $conn->query("SELECT * FROM tempdata ORDER BY id DESC");
      while($no<=20&&$row = $res->fetch_assoc()){
        echo '
        <tr>
          <td class="text-center">'.$no.'</td>
          <td class="text-center">'.$row['suhu'].' &deg; C</td>
          <td class="text-center">'.$row['lembap'].' %</td>
          <td class="text-center">'.$row['datetime'].'</td>

        </tr>
        ';
        $no++;
      }
 ?>
