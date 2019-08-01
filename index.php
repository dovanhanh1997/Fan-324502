<?php
include_once 'Fan.php';

$Fan_one = new Fan();
$Fan_one->setSpeed(FAST);
$Fan_one->setRadius(10.0);
$Fan_one->setColor('yellow');
$Fan_one->setOn(true);
echo 'Fan one: '.$Fan_one->toString().'<br>';

$Fan_two = new Fan();
$Fan_two->setSpeed(MEDIUM);
echo 'Fan two: '.$Fan_two->toString();