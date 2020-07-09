<?php

namespace App\Helper;

class FlashMsg
{ 
    /**
     * Flash list
     *
     * @var array
     */
    public static $flashes = [];


    public function __construct() {
        $template = [
            'primary' => [],
            'success' => [],
            'error' => [],
            'warning' => [],
            'info' => [],
            'dark' => [],
        ];
        FlashMsg::$flashes = session()->get('_flash_msg') + $template;
    }

    public static function primary(String $msg)
    {
        return FlashMsg::add('primary', $msg);
    }

    public static function success(String $msg)
    {
        return FlashMsg::add('success', $msg);
    }
    
    public static function error(String $msg)
    {
        return FlashMsg::add('error', $msg);
    }
    
    public static function warning(String $msg)
    {
        return FlashMsg::add('warning', $msg);
    }

    public static function info(String $msg)
    {
        return FlashMsg::add('info', $msg);
    }

    public static function dark(String $msg)
    {
        return FlashMsg::add('dark', $msg);
    }

    /**
     * Add Flash Message
     *
     * @param  string  $type
     * @param  string  $msg
     */
    private static function add(String $type, String $msg)
    {
        FlashMsg::$flashes[$type][] = $msg;
     
        session()->flash('_flash_msg', FlashMsg::$flashes);
    }
}
