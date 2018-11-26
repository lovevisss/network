<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/6/1
 * Time: 11:03
 */
namespace App\View\Composers;
use App\Container;
use App\User;
use Illuminate\View\View;
class AddContainer
{
    public function compose(View $view)
    {
        $containers = Container::all();
        $arr_containers =[];
        foreach($containers as $container)
        {
            $arr_containers[$container->id] = $container->name;
        }
        $view->with('containers', $arr_containers);
    }
}