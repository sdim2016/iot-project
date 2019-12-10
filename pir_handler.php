<?php
//include 'authenticate.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST["timestamp"])) {
      file_put_contents("data/pir.csv", $_POST["timestamp"]);
    }
  }
elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $values = file_get_contents("data/pir.csv");
  echo $values;
}

 ?>
