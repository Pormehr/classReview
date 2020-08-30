<?php

include_once __DIR__ . '/vendor/autoload.php';

$snipe1 = new Robot\Snipe(12);
$M16_I = new Robot\Snipe(15);

$Armin = new Robot\Robot('Armin');
$AliReza = new Robot\Robot('AliReza', $M16_I);
$majid = new Robot\Robot('Majid');
