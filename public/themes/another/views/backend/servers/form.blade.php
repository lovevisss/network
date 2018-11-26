@extends('layouts.backend')

@section('title', isset($server) ? '编辑':'新建服务器')
@section('topic', isset($server) ? '编辑':'新建服务器')
@section('body')
    {!! Form::model(isset($server) ? $server: null , [
        'method' => isset($server) ? 'put' : 'post',
        'route' => isset($server) ? ['servers.update', $server->id] : ['servers.store']
    ]) !!}

    <div class="form-group">
        {!! Form::label('IP地址') !!}
        {!! Form::text('ip', null, ['class' => 'form-control']) !!}
    </div>
     <div class="form-group">
         {!! Form::label('容器') !!}
         {!! Form::select('container_id', $containers, null,  ['class' => 'form-control', 'id' => 'containers']) !!}
     </div>
     <div class="form-group">
         {!! Form::label('位置') !!}
         {!! Form::text('index', null, ['class' => 'form-control']) !!}
     </div>
     <div class="form-group">
         {!! Form::label('使用人') !!}
         {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'id' => 'users']) !!}
     </div>
     <div class="form-group">
             {!! Form::label('型号') !!}
             {!! Form::text('model', null, ['class' => 'form-control']) !!}
     </div>
     <div class="form-group">
         {!! Form::label('操作系统') !!}
         {!! Form::text('os', null, ['class' => 'form-control']) !!}
     </div>

    <div class="form-group">
        {!! Form::label('用户名') !!}
        {!! Form::text('admin',null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('密码') !!}
        {!! Form::text('password',null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('模板') !!}
        {!! Form::select('template', $templates, null, ['class' => 'form-control', 'id' => 'templates']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('描述') !!}
        {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit(isset($server) ? '保存':'创建',['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
@section('script')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script>
    var simplemde = new SimpleMDE();
    $('#users').select2();
    $('#templates').select2();
    $('#containers').select2();
</script>
@endsection