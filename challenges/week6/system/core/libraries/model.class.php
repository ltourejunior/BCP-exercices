<?php

class model 
{
    protected static $object_class = 'stdClass';

    public static function fetchObjects($stmt)
    {
        $stmt->setFetchMode(PDO::FETCH_CLASS, static::$object_class);
        
        return $stmt->fetchAll(); // get all records (row), diff with fetch (just one row)
    }

     public static function fetchObject($stmt)
    {
        $stmt->setFetchMode(PDO::FETCH_CLASS, static::$object_class);
        
        return $stmt->fetch(); // get the next record (just one row)
    }
}