<?php
$b=$_POST['base']; $h=$_POST['altura']; $l=$_POST['lado'];
echo "Área: ".($b*$h)."<br>";
echo "Perímetro: ".(2*($b+$l));
?>