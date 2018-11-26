@extends('layouts.backend')

@section('title')
    服务器管理
@endsection
@section('topic')
    服务器
@endsection
@section('body')
    <a href="{{route('servers.create')}}" class="btn btn-primary vertical-spacing">增加服务器</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>IP地址</th>
            <th>使用人</th>
            <th>操作系统</th>
            <th>编辑</th>
            <th>删除</th>
        </tr>
        </thead>
        <tbody>
        @if(!$servers)
            <tr>
                <td colspan="5" align="center">没有任何服务器，快添加几台服务器吧！</td>
            </tr>
        @else

            @foreach($servers as $server)
                <tr>
                    <td><a href="{{route('servers.edit',$server->id)}}">{{$server->ip}}</a></td>
                    <td>{{$server->user->name}}</td>
                    <td>{{$server->os}}</td>
                    <td>
                        <a href="{{route('servers.edit',$server->id)}}"><span class="fas fa-edit"></span></a>
                    </td>
                    <td>
                        <a href="{{route('servers.confirm',$server->id)}}"><span class="fas fa-trash-alt"></span></a>
                    </td>
                </tr>


            @endforeach
        @endif
        </tbody>

    </table>
    {!! $servers->render() !!}
@endsection