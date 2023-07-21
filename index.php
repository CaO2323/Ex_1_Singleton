<?php
require_once "Tigger.php";

$tigger = Tigger::getInstance();

$tigger-> roar();
$tigger-> roar();

echo $tigger->getCounter();





?> 