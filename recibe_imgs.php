<?php 
$archivoImgName = $_FILES["file"]["name"];
$archivoImg   = $_FILES["file"]["tmp_name"];


//Verifico la extension de la Imagen 
$explode        = explode('.', $archivoImgName);
$extension      = array_pop($explode);
$grado = 180;
$gradojpg = 360;


$png = 'png';
$PNG = 'PNG';    
if ($extension == $png || $extension == $PNG) {
    $imgpngTwo =  imagecreatefrompng($archivoImg);
    $rotatepng = imagerotate($imgpngTwo, $grado, 0);
    imagepng($rotatepng, "filesImgs/".$archivoImgName);
}elseif ($extension == "jpg" || $extension == "jpeg") {
    $imgjpgOne  = imagecreatefromjpeg($archivoImg);
    $rotatejpg  = imagerotate($imgjpgOne, $gradojpg, 0);
    imagejpeg($rotatejpg,"filesImgs/". $archivoImgName);
}
else{
   echo "Formato de Imagen no Valido...";
}
?>

<script type="text/javascript">
   location.href ="index.html";
</script>