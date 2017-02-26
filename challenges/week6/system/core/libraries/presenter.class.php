<?php

class presenter
{
    public static $title= null;

    public static function present($content)
    {
        //top_page
        $top_page = new view('top_page');  

        //navigation
        $navigation = new view('navigation');// /system/project/views/navigation.php
        // footer
        $footer = new view('footer');

        //HTML wrapper
        $html_wrapper = new view('html_wrapper');
        $html_wrapper->top_page=$top_page;
        $html_wrapper->top_navigation=$navigation;
        $html_wrapper->page_layout=$content;
        $html_wrapper->footer=$footer;
        $html_wrapper->title= static::$title;

        // print it all out (wrapper contains layout, layout contains boxes)
        echo $html_wrapper;
    }

    public static function setTitle($title)
    {
        static::$title = $title;
    }
}