<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/6/1
 * Time: 11:03
 */
namespace App\View\Composers;
use App\User;
use Illuminate\View\View;
class AddUser
{
    public function compose(View $view)
    {
        $users = User::all();
        $arr_users =[];
        foreach($users as $user)
        {
            $arr_users[$user->id] = $user->name;
        }
        $view->with('users', $arr_users);
    }
}