<?php

class Category_Object
/*
*as the object is being created from the resulset, these properties are automatically created and initialized with their values
*/
{
    public function getUrl() 
    { 
       return url::to('category', array('id'=>$this->id)); 
    } 
}