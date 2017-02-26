<?php
class config
{
    protected static $data= array();

    public static function get($key, $default = null)
    {
        //if a configuration value exists within
        //Not good enought because if the value in NULL, the isset will return false even if the key exist ->if(isset(static::$data[$key]))
        if(array_key_exists($key,static::$data))
        {
            return static::$data[$key];
        }
        else
        {
            return $default;
        }
    }
    /**
    *load the configuration setting from config.php and
    *put it inside static ::$data
    */
    public static function load()
    {
        //include the configuration file (which hopefully includes $config variable)
        include CONFIG_DIR.'/config.php';

        //assign $config as the value of static::$data
        static::$data = $config;
    }
}
