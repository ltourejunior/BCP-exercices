<?php

class Product_Model extends model
{
     protected static $object_class = 'Product_Object';

     public static function getTopProducts()
     {
         $query="
            SELECT `product` . *
            FROM `product`
            WHERE `product`. `is_top` = 1
        ";
        $resultset = db::query($query);
        // retrieve all the rows as object
        $objects = static::fetchObjects($resultset);
        //$resultset->setFetchMode(PDO::FETCH_OBJ); not needed anymore because done byr the model class// this one set fetching of resultset to return objects. You can alsso use (PDO::FETCH_NUM) -> only numerical array or (PDO::FETCH_ASSOC) -> only associative array
        //Put the object with the products into the view
        
        return $objects;
    }
}