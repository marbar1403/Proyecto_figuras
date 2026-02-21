<?php
$r=$_POST['r'];
echo "Área: ".round(pi()*$r*$r,2)."<br>";
echo "Perímetro: ".round(2*pi()*$r,2);
?>