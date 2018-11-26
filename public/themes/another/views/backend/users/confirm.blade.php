@extends('layouts.backend')

@section('title', isset($user) ? '删除':'新建用户')
@section('topic', isset($user) ? '删除':'新建用户')

@section('body')
    {!! Form::open(['method' => 'delete', 'route' => ['users.delete', $user->id]]) !!}
    <div class="alert alert-danger">
        <strong>
            警告!
        </strong> 您将要删除用户：  {{$user->name}} ，这个操作将不可恢复。确定继续吗？

    </div>
    {!! Form::submit('删除用户', ['class' => 'btn btn-danger']) !!}
    <a href="{{route('users.index')}}" class="btn btn-success">返回</a>
    {!! Form::close() !!}

    @endsection