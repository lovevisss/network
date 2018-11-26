@extends('layouts.backend')

@section('title', isset($user) ? '编辑':'新建用户')
@section('topic', isset($user) ? '编辑':'新建用户')
@section('body')
    {!! Form::model(isset($user) ? $user: null , [
        'method' => isset($user) ? 'put' : 'post',
        'route' => isset($user) ? ['users.update', $user->id] : ['users.store']
    ]) !!}

    <div class="form-group">
        {!! Form::label('名称') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
     <div class="form-group">
         {!! Form::label('工号') !!}
         {!! Form::text('workid', null, ['class' => 'form-control']) !!}
     </div>
     <div class="form-group">
         {!! Form::label('email') !!}
         {!! Form::text('email', null, ['class' => 'form-control']) !!}
     </div>
     <div class="form-group">
         {!! Form::label('部门') !!}
         {!! Form::select('department_id', $departments, null, ['class' => 'form-control', 'id' => 'departments']) !!}
     </div>
     <div class="form-group">
             {!! Form::label('密码') !!}
             {!! Form::password('password', ['class' => 'form-control']) !!}
     </div>
     <div class="form-group">
         {!! Form::label('确认密码') !!}
         {!! Form::password('password_confirmation',['class' => 'form-control']) !!}
     </div>

    {!! Form::submit(isset($user) ? '保存':'创建',['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
@section('script')
<script>

    $('#departments').select2();

</script>
@endsection