<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/6/12
 * Time: 14:03
 */
namespace App\Templates;
use Illuminate\View\View;

abstract class AbstractTemplate
{
    protected $view;
    abstract public function prepare(View $view, array $parameters);
    public function getView()
    {
        return $this->view;
    }
}