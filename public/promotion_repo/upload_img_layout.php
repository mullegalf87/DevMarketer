<?php

//ricordati di dare i permessi alle cartelle 777
$id_user=$_POST["id_user"];
$id_layout=$_POST["id_layout"];
$class_image=$_POST["class_image"];
$ext_file=$_POST["ext_file"];

$target_dir = "../public/upload_promotion/img_layout/".$id_user."/".$id_layout."/".$class_image."/";

$files = glob($target_dir."*"); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file)) {
    unlink($file); // delete file
  }
}

if( is_dir($target_dir) === false ){

  mkdir($target_dir, 0777, true);

}

$target_file = $target_dir . basename("1.".$ext_file);

move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

echo($target_dir."1.".$ext_file);

?>

