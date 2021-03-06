<?php

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["imagen"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["imagen"]["size"] > 500000) {
    header("Location:errorAgregarEvento.php");
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    header("Location:errorAgregarEvento.php");
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("Location:errorAgregarEvento.php");
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imagen"]["name"]). " has been uploaded.";
    } else {
        header("Location:errorAgregarEvento.php");
        echo "Sorry, there was an error uploading your file.";
    }
}


$imagen = basename( $_FILES["imagen"]["name"]);
echo "$imagen";
$fecha = $_POST['fecha'];
echo "$fecha";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"iglesia");
if (isset($imagen)) {
    $insert = "INSERT INTO proximosEventos (nombreEvento,descripcion,fecha,imagen) VALUES ()";
}else{
    $insert = "INSERT INTO proximosEventos (nombreEvento,descripcion,fecha) VALUES ()";
}

?>