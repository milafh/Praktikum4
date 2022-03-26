<?php
require_once "class_lingkaran.php";
echo "NILAI PHI " . lingkaran::PHI;
$lingkar1 = new lingkaran( 5 );
$lingkar2 = new lingkaran( 2 );

echo"<br/>Luas Lingkaran I ".$lingkar1->getLuas();
echo"<br/>Luas Lingkaran II ".$lingkar2->getLuas();
echo "<br/>Keliling Lingkaran I ".$lingkar1->getKeliling();
echo "<br/>Keliling Lingkaran II ".$lingkar2->getKeliling();
?>