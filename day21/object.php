<?php

class car
{
    public function _construct($color){
        $this->color=$color;
    }

    private $manufacturer=null;

    private $model=null;

    public $price=null;
    
    public $nr_of_wheels=4;

    public $fuel_type = 'petrol';

    public $tyre_type=null;

    public $current_speed=0;    

    public function speed_up()
    {
        $this->current_speed += 10;
    }

    public function brake()
    {
        $this->current_speed -= 10;
    }

    public function get_stolen()
    {
        $this->owner = 'chop-shop';        
    }

    public function be_bought($new_owner)
    {
        $this->owner = $new_owner;       
    }
    /**
    *a get method for the manufaturer property because its private
    */
    public function getManufacturer($manufacturer)
  {
      // check if the user has permissions to view the manufacturer
      //this method is within the class so it has access to the private property
    return $this->manufacturer=$manufacturer;
  }

  public function getModel($model)
  {
      return $this->model=$model;
  }
}

// no car was made yet

$new_car = new car ('red');// a new car is created with a red color
$new_car-> getManufacturer('Skoda'); // it got its manufacturer
$new_car-> getModel('Favorit'); // it got its brand

$new_car-> price = 400000; // the car is given a price

$new_car-> price = 1000000; // the car is on sale

$new_car-> be_bought('Jan'); // Jan buy a car

$new_car-> speed_up(); //$new car speed ==10
$new_car-> speed_up(); //$new car speed ==20
$new_car-> speed_up(); //$new car speed ==30
$new_car-> speed_up(); //$new car speed ==40

$new_car-> brake(); //$new car speed ==10




