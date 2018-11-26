<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
class UsersController extends Controller
{

    protected $users;
    public function __construct(User $users)
    {
        $this->middleware('auth');
        $this->middleware('isNotSU');
        $this->users = $users;
    }

    public function index()
    {
        $users = $this->users->paginate(10);
//        dd($users);
        return view('backend.users.index', compact('users'));
    }

    public function confirm($id)
    {
        $user = $this->users->findOrFail($id);
        return view('backend.users.confirm', compact('user'));
    }

    public function edit($id)
    {
        $user = $this->users->findOrFail($id);

        return view('backend.users.form', compact('user'));
    }

    public function delete($id)
    {
        $user = $this->users->findOrFail($id);
        $user->delete();
        return redirect(route('users.index'))->with('status', '用户已删除');
    }

    public function create()
    {
        return view('backend.users.form');
    }

    public function store(StoreUserRequest $request)
    {
        $this->users->create($request->only('name', 'workid', 'password','department_id','email'))->recordLoginTime();
        return redirect(route('users.index'))->with('status', '用户创建成功');
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = $this->users->findOrFail($id);
        $user->fill($request->only('name', 'workid', 'password','department_id','email'))->save();
        return redirect(route('users.index'))->with('status', '用户更新成功');
    }

}
