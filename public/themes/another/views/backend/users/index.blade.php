@extends('layouts.backend')

@section('title')
    用户管理
    @endsection
@section('topic')
    用户
@endsection
@section('body')
        <a href="{{route('users.create')}}" class="btn btn-primary vertical-spacing">新建用户</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>名称</th>
                <th>Email</th>
                <th>上次登录</th>
                <th>编辑</th>
                <th>删除</th>
            </tr>
        </thead>
       <tbody>
               @foreach($users as $user)
                   <tr>
                       <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                       <td>{{$user->email}}</td>
                       <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->lastLogin)->diffForHumans(Carbon\Carbon::now())}}</td>
                       <td>
                           <a href="{{route('users.edit',$user->id)}}"><span class="fas fa-edit"></span></a>
                       </td>
                       <td>
                           <a href="{{route('users.confirm',$user->id)}}"><span class="fas fa-trash-alt"></span></a>
                       </td>
                   </tr>


               @endforeach
       </tbody>

    </table>
    {!! $users->render() !!}
@endsection