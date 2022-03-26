<?php
require_once "class_persegipanjang.php";
$luaspersegi = new __persegipanjang();
echo "Panjang : ".$luaspersegi-> settpanjang(4);
echo "<br>";
echo "Lebar : ".$luaspersegi-> settlebar(2);
echo "<br>";
echo $luaspersegi-> luaspersegippanjang();
echo "<br>";
echo $luaspersegi-> kelilingpersegippanjang();
?>