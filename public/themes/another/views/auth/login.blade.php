@extends('layouts.auth')

@section('title', '后台登录')

@section('heading')
            <span class="d-inline-block"><img src="{{theme('imgs/cupcake.png')}}" width= "50px" alt=""></span>

            <span class="d-inline-block heading-text">后台登录</span>


@endsection

@section('body')
    {!! Form::open(['route' => 'login']) !!}
    <div class="form-group">
        {!! Form::label('工号') !!}
        {!! Form::text('workid', null, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('密码') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('登录', ['class' => 'btn btn-primary spacing']) !!}
    <a href="{{route('password.request')}}">  忘记密码？</a>
    {!! Form::close() !!}
@endsection