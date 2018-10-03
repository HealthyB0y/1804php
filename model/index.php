<?php

include 'SmartPhone.php';
include 'TriAngle.php';
$newSmartPhone = new SmartPhone();
$newSmartPhone->setName('sony');
pr($newSmartPhone->getName());

// $iphone = new Iphone();
// var_dump($iphone);

$phone = SmartPhone::test();

pr($phone);

$triAngle = new TriAngle();

$triAngle->setCanh(3,4,5);
pr($triAngle->calP());
pr($triAngle->calS());