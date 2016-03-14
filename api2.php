<?php
error_reporting(0);

$url = 'http://finance.yahoo.com/d/quotes.csv?';
$symbol = 's='.$_GET['s'];
$f = '&f='.$_GET['f'];
$file = fopen($url.$symbol.$f,"r");
print_r(fgetcsv($file));
fclose($file);