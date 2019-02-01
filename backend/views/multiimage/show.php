<?php 
$arr = json_decode($model->imagepath);

foreach ($arr as $path) {
  echo '<img src="../web/img/uploads/'.$path.'">';
}
?>