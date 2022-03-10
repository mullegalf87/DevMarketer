<?php

//ricordati di dare i permessi alle cartelle 777
$id_user=$_POST["id_user"];
$ext_file=$_POST["ext_file"];
$timestamp=time();

$target_dir = "../public/img/bookmap/img_profile/";




if( is_dir($target_dir) === false )
{
    mkdir($target_dir);
}


$target_file = $target_dir . basename($id_user.".".$ext_file);

move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

echo($id_user.".".$ext_file);


?>