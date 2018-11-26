<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/5/16
 * Time: 14:45
 */

namespace App\Http\Controllers\Backend;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function __construct()
    {
//        $this->middleware('auth');
    }
}
