<?php
include_once 'ReFan.php';

$Fan_one = new ReFan();
$Fan_one->setSpeed(FAST);
$Fan_one->setRadius(10.2);
$Fan_one->setColor("Red");
$Fan_one->setOn(true);
echo 'Fan One: '.$Fan_one->toString().'<br>';

$Fan_two = new ReFan();
$Fan_two->setSpeed(MEDIUM);
echo 'Fan Two: '.$Fan_two->toString();