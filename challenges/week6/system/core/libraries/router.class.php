<?php

class router
{
    public static function runController($controller_name)
    {
        //get the path to the proper controller file based on the controller namespace
        $controller_file =static::getControllerFile($controller_name);

        //include the file
        include $controller_file;
    }
    /**
    *find the name of the page to display in URL and determine
    *the right name of the controller to use
    */
    public static function getControllerName()
    {
        //get the name of the page from URL
        $page_name = request::get('page','home');

        //get the path to the proper controller file based on the page name
        $controller_file=static::getControllerFile($page_name); //static represent the current class that we are (router)

        //if such a controller exists
        if(file_exists($controller_file))
        {
            //return the name of the page
            return $page_name;
        }
        else 
        {
            //return name 'error 404'
            return 'error404';
        }  
    }

    /**
    *determine what php file should be used to prepare a page
    *based on the page's name ('home', 'contact', 'details', etc.)
    */
    protected static function getControllerFile($page_name)
    {
        $filename=$page_name .'.controller.php'; //home.controller.php
        $filepath= CONTROLLERS_DIR . '/' . $filename; // /Users/mohamed/web/codingbootcamp/exercices/class_project/system/project/controllers"
        return $filepath;
    }
}