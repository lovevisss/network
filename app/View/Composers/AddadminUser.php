<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/5/17
 * Time: 13:27
 */

namespace App\View\Composers;

use Illuminate\View\View;

class AddadminUser
{
    public function compose(View $view)
    {
        $view->with('admin', auth()->user());
    }
}