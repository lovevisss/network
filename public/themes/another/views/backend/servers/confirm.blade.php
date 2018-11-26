@extends('layouts.backend')

@section('title', isset($server) ? '删除':'新建用户')
@section('topic', isset($server) ? '删除':'新建用户')

@section('body')
    {!! Form::open(['method' => 'delete', 'route' => ['servers.delete', $server->id]]) !!}
    <div class="alert alert-danger">
        <strong>
            警告!
        </strong> 您将要删除IP为：  {{$server->ip}} 的服务器，这个操作将不可恢复。确定继续吗？

    </div>
    {!! Form::submit('删除服务器', ['class' => 'btn btn-danger']) !!}
    <a href="{{route('servers.index')}}" class="btn btn-success">返回</a>
    {!! Form::close() !!}

@endsection