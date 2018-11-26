<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/5/16
 * Time: 14:47
 */
namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.dashboard');
    }

    public function index_su()
    {
        if(Auth::user()->level == 0)
        {
            return view('backend.sudashboard');
        }
        else
        {
            return '没有权限访问';
        }
    }
}