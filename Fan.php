<?php
const SLOW = 1;
const MEDIUM = 2;
const FAST = 3;

class Fan
{
    public $speed = SLOW;
    public $on = false;
    public $radius = 5.0;
    public $color = 'white';

    public function isON()
    {
        if ($this->on) {
            return 'Fan is ON';
        }
        return 'Fan is OFF';
    }

    public function __toString()
    {
        return 'Speed' . $this->getSpeed() . ' ' . 'Radius' . $this->getRadius() . ' ' . 'Color' . $this->getColor() . ' ' . $this->isON();
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setOn($on)
    {
        $this->on = $on;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

}