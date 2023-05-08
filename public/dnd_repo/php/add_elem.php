<?php
$category=$_POST["category"];
$target_dir = "../".$category."/";
if( is_dir($target_dir) === false ){
  mkdir($target_dir, 0777, true);
}
$total = count($_FILES["elem_file"]['name']); 
for ($i = 0; $i < $total; $i++) {
  $name=explode("/tmp/",$_FILES["elem_file"]["tmp_name"][$i])[1];
  $target_file = $target_dir . basename($name.".".pathinfo($_FILES['elem_file']['name'][$i], PATHINFO_EXTENSION));
  move_uploaded_file($_FILES["elem_file"]["tmp_name"][$i], $target_file);
  echo $name.".".pathinfo($_FILES['elem_file']['name'][$i], PATHINFO_EXTENSION);
}
?>