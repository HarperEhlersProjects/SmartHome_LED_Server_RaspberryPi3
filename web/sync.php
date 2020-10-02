<?php

class Sync
{
    public static $filename = "../data/config.json";                //Config file
    public static $filename_reset = "../data/config_default.json";  //Default config file

    //Returns the content of the config file as string
    public static function readConfig()
    {
        
        $file = fopen(Sync::$filename, 'r');
        $config_string = fread($file,filesize(Sync::$filename));
        fclose($file);

        return $config_string;
    }

    //Replaces content of config file with specified string
    public static function writeConfig($config_string)
    {
            $file = fopen(Sync::$filename, 'w');

            fwrite($file, $config_string);
            fclose($file);
    }

        //Replaces content of config file with content of the default configuration file
        public static function resetConfig()
        {
            $file_reset = fopen(Sync::$filename_reset, 'r');
            $config_string = fread($file_reset,filesize(Sync::$filename_reset));
            fclose($file_reset);
    
            $file = fopen(Sync::$filename, 'w');
            fwrite($file,$config_string);
            fclose($file);
        }
}
?>