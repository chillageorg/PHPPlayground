<?php

$path = realpath('./');

$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::LEAVES_ONLY);
foreach($objects as $name => $object){
	echo "$name<br/>";
}

?>