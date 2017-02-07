<?php
require_once 'vehicle.class.php';

class horse extends vehicle{
    protected $wheels_count = 0;

    protected $is_fed=false;

    public function feed()
    {
        echo 'the horse is feeded';
        $this->is_fed=true;
    }
}