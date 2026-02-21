<?php
$b=$_POST['base']; $h=$_POST['altura'];
$l1=$_POST['lado1']; $l2=$_POST['lado2'];
echo "Área: ".(($b*$h)/2)."<br>";
echo "Perímetro: ".($b+$l1+$l2);
?>