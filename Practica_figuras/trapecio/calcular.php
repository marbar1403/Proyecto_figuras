<?php
$B=$_POST['B']; $b=$_POST['b']; $h=$_POST['h'];
$l1=$_POST['l1']; $l2=$_POST['l2'];
echo "Área: ".((($B+$b)*$h)/2)."<br>";
echo "Perímetro: ".($B+$b+$l1+$l2);
?>