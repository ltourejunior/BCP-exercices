<?php

class Category_Model extends model
{
     protected static $object_class = 'Category_Object';

     public static function getTopCategories()
     {
        $query="
            SELECT `category` . *
            FROM `category`
            WHERE `category`. `parent_id` IS NULL
        ";
        $resultset = db::query($query);

        //retrieve all the rows as objects of tyoe set in static::$object_class
        $objects = static::fetchObjects($resultset);
        return $objects;
    }

    public static function getSubcategories($parents_category_id)
    {
        $query="
            SELECT `category` . *
            FROM `category`
            WHERE `category`. `parent_id` = ?
        ";
        $resultset = db::query($query, array($parents_category_id));
        
        //retrieve all the rows as objects of tyoe set in static::$object_class
        $objects = static::fetchObjects($resultset);
        return $objects;
    }

    /**
    *retrieves 1 object of the class category_object
    *based on its id column
    */
    public static function retrieveById($id)
    {
        $query="
            SELECT `category` . *
            FROM `category`
            WHERE `category` . `id` = ?
        ";
        $resultset = db::query($query, array($id));
        $object = static::fetchObject($resultset);
        return $object;

    }
}