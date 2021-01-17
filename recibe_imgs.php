<?php 
$archivoImg = $_FILES["foto".$i]["name"];
$source   = $_FILES["foto".$i]["tmp_name"];


//Verifico la extension de la Imagen 
$explode        = explode('.', $archivoImg);
$extension      = array_pop($explode);
$grado = 180;
//$grado = 360;


if ($extension =="png") {
    $imgpngOne  = imagecreatefrompng($archivoImg); 
    $rotatepng  = imagerotate($imgpngOne, $grado, 0);
    imagepng($rotatepng,"filesImgs/".$archivoImg);
}
if ($extension =="PNG") {
    $imgpngTwo = imagecreatefrompng($archivoImg); 
    $rotatepng = imagerotate($imgpngTwo, $grado, 0);
    imagepng($rotatepng, "filesImgs/".$archivoImg);
}
if ($extension =="jpg") {
    $imgjpgOne  = imagecreatefromjpeg($archivoImg);
    $rotatejpg  = imagerotate($imgjpgOne, $grado, 0);
    imagejpeg($rotatejpg,"filesImgs/". $archivoImg);
}
if ($extension =="jpeg") {
    $imgjpegTwo   = imagecreatefromjpeg($archivoImg);
    $rotatejpeg   = imagerotate($imgjpegTwo, $grado, 0);
    imagejpeg($rotatejpeg,"filesImgs/". $archivoImg);
}

	

?>