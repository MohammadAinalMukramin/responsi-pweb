<?php
echo "<head><title>My GuestBook </head></title>";
$fp = fopen("masuk.txt","a+");
$Presensi = $_POST['Presensi'];
fputs($fp, "$Presensi|");

echo "<a href=masuk.php> periksa presensi anda </a><br>";
?>