<?php

namespace App\Http\Controllers\Backend;

use App\Container;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContainersController extends Controller
{

    protected $containers;
    function __construct(Container $containers)
    {
        $this->middleware('auth');
        $this->middleware('isNotSU');
        $this->containers = $containers;
    }
    function index()
    {
        $containers = $this->containers->all();
        return view('backend.containers.index', compact('containers'));
    }

}
