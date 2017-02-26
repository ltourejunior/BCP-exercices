<?php

class request
{
    /**
    *gets a value from the $_GET global
    *returns the value from $_GET global  with the key $key
    *if not present returns $default
    */
    public static function get($key, $default = null)
    {
        if(isset($_GET[$key])) 
        {
            return $_GET[$key];
        }
        else
        {
            return $default;
        }
    }

     /**
    *gets a value from the $_POST global
    *returns the value from $_POST global  with the key $key
    *if not present returns $default
    */
    public static function post($key, $default = null)
    {
        if(isset($_POST[$key]))
        {
            return $_POST[$key];
        }
        else
        {
            return $default;
        }
    }   
    /*
    *return true if the request in POST
    */
    public static function isPost()
    {   
        if($_SERVER['REQUEST_METHOD']== 'POST')
        {
            return true;
        }
        else
        {
            return false;
        }
    }   
}