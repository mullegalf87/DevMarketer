<?php

//ricordati di dare i permessi alle cartelle 777
$id_user=$_POST["id_user"];
$id_prod=$_POST["id_prod"];

$files = glob("../bookmap_repo/img_user/".$id_user."/".$id_prod."/*"); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file)) {
    unlink($file); // delete file
  }
}

$target_dir = "../bookmap_repo/img_user/".$id_user."/".$id_prod."/";

if( is_dir($target_dir) === false ){

  mkdir($target_dir, 0777, true);

}

$total = count($_FILES["prod_file"]['name']); 

for ($i = 0; $i < $total; $i++) {

  $num_image=$i+1;

  $target_file = $target_dir . basename($num_image.".".pathinfo($_FILES['prod_file']['name'][$i], PATHINFO_EXTENSION));


  move_uploaded_file($_FILES["prod_file"]["tmp_name"][$i], $target_file);


echo $num_image.".".pathinfo($_FILES['prod_file']['name'][$i], PATHINFO_EXTENSION).",";
}





?>