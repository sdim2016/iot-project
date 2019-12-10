<?php
//include 'authenticate.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST["temperature"])&& !empty($_POST["humidity"])) {
      file_put_contents("data/temp.csv", $_POST["temperature"].",".$_POST["humidity"]);
    }
  }
elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $values = file_get_contents("data/temp.csv");
  $csv_arr = str_getcsv($values);
  echo $csv_arr[0];
  echo "\n";
  echo $csv_arr[1];
}

 ?>
