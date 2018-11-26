<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Server;
class ServersController extends Controller
{
    protected $servers;
    function __construct(Server $servers)
    {
        $this->middleware('auth');
        $this->middleware('isNotSU');
        $this->servers = $servers;
    }

    function index()
    {
        $servers = $this->servers->paginate(10);
        return view('backend.servers.index', compact('servers'));
    }

    function edit($id)
    {
        $server = $this->servers->with('container')->findOrFail($id);
        $templates = $this->getServerTemplates();
//        dd($server);
        return view('backend.servers.form', compact('server','templates'));
    }

    function update(Request $request, $id)
    {

        $server = $this->servers->findOrFail($id);
        $server->fill($request->only('ip','container_id', 'index', 'user_id', 'model', 'os', 'desc', 'admin', 'password', 'template'))->save();
        return redirect(route('servers.index'))->with('status', '服务器更新成功');
    }

    function create()
    {
        $templates = $this->getServerTemplates();
        return view('backend.servers.form', compact('templates'));
    }

    function store(Request $request)
    {
        $server = $this->servers->create($request->only('ip','container_id', 'index', 'user_id', 'model', 'os', 'desc', 'admin', 'password','template'));
        dd($server);
        return redirect(route('servers.index'))->with('status', '服务器创建成功');
    }

    function confirm($id)
    {
        $server = $this->servers->findOrFail($id);
        return view('backend.servers.confirm', compact('server'));
    }

    function delete($id)
    {
        $server = $this->servers->findOrFail($id);
        $server->delete();
        return redirect(route('servers.index'))->with('status', '服务器已删除');
    }

    protected function getServerTemplates()
    {
        $templates = config('cms.templates');
        return ['' => ''] + array_combine(array_keys($templates), array_keys($templates));
    }
}
