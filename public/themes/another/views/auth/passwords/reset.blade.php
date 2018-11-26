@extends('layouts.auth')

@section('title', '密码重置')

@section('heading')
    <span class="d-inline-block"><img src="{{theme('imgs/cupcake.png')}}" width= "50px" alt=""></span>

    <span class="d-inline-block heading-text">密码重置</span>


@endsection

@section('body')
    {!! Form::open(['route' => ['password.request']]) !!}
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('密码') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('确认密码') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('重置', ['class' => 'btn btn-primary spacing']) !!}
    <a href="{{route('password.request')}}">  忘记密码？</a>
    {!! Form::close() !!}
@endsection