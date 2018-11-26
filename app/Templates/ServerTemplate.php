<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/6/12
 * Time: 14:15
 */
namespace App\Templates;

use Illuminate\View\View;

class ServerTemplate extends AbstractTemplate
{
    protected $view = 'server';
    public function prepare(View $view, array $parameters)
    {
        // TODO: Implement prepare() method.
    }

}