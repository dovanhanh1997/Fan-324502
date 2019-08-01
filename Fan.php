<?php
define('SLOW', 1);
define('MEDIUM', 2);
define('FAST', 3);


class Fan
{
    private $speed = SLOW;
    private $on = false;
    private $radius = 5.0;
    private $color = 'blue';

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @param float $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function isOn()
    {
        if ($this->on) {
            return 'Fan is On';
        }
        return 'Fan is Off';
    }

    public function toString()
    {
        return 'Speed: ' . $this->speed . ' ' . 'Radius: ' . $this->radius . ' ' . 'Color: ' . $this->color . ' ' . $this->isOn();
    }

}