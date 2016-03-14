<?php
error_reporting(0);

$filename = "ftp://ftp.nasdaqtrader.com/SymbolDirectory/nasdaqlisted.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

echo $contents;
