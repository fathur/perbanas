<?php 

$array = array(
	'e','d','c','b','a'
);

$x = array_slice($array, 0, count($array)-1);
$z = array_slice($array, count($array)-1, count($array));
$f = array_merge($x,array('ss'),$z);
print_r($f);


?>