<?php
$ancho = 150;
$alto = 50;
$imagen = imageCreate($ancho, $alto);
$azul = imageColorAllocate($imagen, 135, 206, 250);
ImageFill($imagen, 0, 0, $azul);
$rojo = ImageColorAllocate($imagen, 255, 0, 0);
$valoraleatorio = rand(100000,999999);
session_start();
$_SESSION['numeroaleatorio'] = $valoraleatorio;
$fuente = 5;
$posx = 50;
$posy = 15;
imagestring($imagen, $fuente, $posx, $posy, $valoraleatorio, $rojo);
for($c = 0; $c  <= 5 ; $c++){
    $x1 = rand(0, $ancho);
    $y1 = rand(0, $alto);
    $x2 = rand(0, $ancho);
    $y2 = rand(0, $alto);
    ImageLine($imagen, $x1, $y1, $x2, $y2, $rojo);
}
Header("Content-type: image/jpeg");
ImageJPEG($imagen);
ImageDestroy($imagen);
?>
