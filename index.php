<?php
include_once 'Fan.php';

$Fan_one = new Fan();
$Fan_one->setSpeed(FAST);
$Fan_one->setRadius(10.2);
$Fan_one->setColor("Red");
$Fan_one->setOn(true);
echo 'Fan One: ' . $Fan_one . '<br>';

$Fan_two = new Fan();
$Fan_two->setSpeed(MEDIUM);
echo 'Fan Two: ' . $Fan_two;