<?php
define('SLOW',1);
define('MEDIUM',2);
define('FAST',3);

class ReFan
{   private $speed=SLOW;
    private $on = false;
    private $radius = 5.0;
    private $color = 'white';

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param float $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }
    public function isOn(){
        if ($this->on){
            return "Fan's ON";
        }
        return "Fan's OFF";
    }

    public function toString(){
        return 'Seepd: '.$this->getSpeed().' '.'Radius: '.$this->getRadius().' '.'Color: '.$this->getColor().' '. $this->isOn();
    }

}