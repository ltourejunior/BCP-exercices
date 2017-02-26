<?php
class giraffe extends animal
{
    public static $giraffes_by_the_pond = 0;

    public static $list_of_giraffes=array();

    public static $list_of_giraffes_in_forest=array();   

    public static function getNumberOfGiraffes()
    {
        return count(static::$list_of_giraffes);
    }

    public static function getNumberOfGiraffesAtLocation($location)
    {
        $number = 0;
        foreach(static::$list_of_giraffes as $giraffe)
        {
            if($giraffe->location==$location)
            {
                $number++;
            }
        }
        return $number;
    }


    public $is_thirsty = true;

    public $is_hungry=true;


    public $name='Micky';

    public $location = 'location';

    public function __construct($name, $location='forest')
    {
        //storring in the array all new giraffes
        static::$list_of_giraffes[] = $this;//($this represent the entire current object)
        // Set the name the giraffe was born with
        $this->name = $name;
        //location of the newly created giraffe        
        $this->location = $location;
        //determine which number of giraffe to rise based on the location
        //location of the newly created giraffe
        switch($this->location)
        {
            case 'forest':
           
            break;
            case 'pond':
           
            default:
            break;
        }
        
    }

    public function __toString()
    {
        return $this->name;
    }

    public function canItFly()
    {
        if($this->can_fly)
        {
            echo 'It can fly!';
        }
        else{
            echo 'It cannot fly :-(';
        }
    }

    public function drink()
    {
        if($this->location=='pond')
        {
            $this->is_thirsty=false;
        }
        else
        {
            echo 'Nothing to drink here!';
        }
    $this->$is_thirsty=false;
    }

    public function eat()
    {
        if($this->location=='forest')
        {
            $this->is_hungry=false;
        }
        else
        {
            echo 'Nothing to eat here!';
        }
    $this->$is_hungry=false;
    }

    public function sleep()
    {
        $this->is_thirsty = true;
        $this->is_hungry=true;
    }

    public function goToLocation($location)
    {

        $this->location=$location;
    }
    /**
    *DEPRECATED
    */
    public function go_to_forest()
    {

        $this->goToLocation('forest');
    }

    public function go_to_pond()
    {
        $this->goToLocation('pond');
    }

    public function getLocationName()
    {
        switch($this->location)
        {
            case 'forest':
            return 'in the forest';
            break;
            case 'pond':
            return 'at the pond';
            break;
            default:
            return 'lost';
            break;
        }
    }
}