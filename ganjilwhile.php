<?php
echo "<br><br>Bilangan ganjil (dengan while):<br>";

$i = 1;
while ($i <= 20) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
    $i++;
}
?>