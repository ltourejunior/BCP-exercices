<?php

ini_set('display_errors','on');// switch it off when website is on production
error_reporting(E_ALL);

// on development server, use those at the beggining
ini_set('display_errors','on');// switch it off when website is on production
error_reporting(E_ALL | E_STRICT);// all errors including strict errors

// all errors exept notices, use this one on production server

function dd($value)
{
    var_dump($value);
    die;
}