<?php 
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("masuk.txt", "r");
echo "<table border = 0>";


$tanggal=date("d-m-Y");

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo("<tr><td>$tanggal</td><td>$pisah[0]</tr>");
}
echo "</table></center>";
?>