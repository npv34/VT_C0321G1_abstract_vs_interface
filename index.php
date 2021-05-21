<?php

include_once "Printer.php";
include_once "BrownPrinter.php";
include_once "FilePrinter.php";

//$brown = new BrownPrinter("BrownPrinter");
//$brown->print("Xin chao");

$filePrinter = new FilePrinter("FilePrinter","data.txt");
$filePrinter->print("Hello my friend");
echo $filePrinter->getName();