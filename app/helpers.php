<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/5/9
 * Time: 9:21
 */

if(! function_exists('theme'))
{
    function theme($path)
    {
        $config = app('config')->get('cms.theme');
        return url($config['folder'].'/'.$config['active'].'/assets/'.$path);
    }
}