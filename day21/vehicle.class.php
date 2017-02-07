<?php

class vehicle
{
    protected $wheels_count = null;

    protected $color = null;

    protected $avg_speed= null;

    /**
    *calculate the time to travel a specified distance at average speed
    *
    *@param float $distance - distance to travel in km
    *@return float time to travel in hours
    */
    public function travel($distance){
        $avg_speed = max(1,$this->avg_speed); // return the bigger value of 1 and $this->avg_speed
        return $distance / $avg_speed;
    }
}


