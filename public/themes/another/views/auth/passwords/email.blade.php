@extends('layouts.auth')



@section('heading')
    <span class="d-inline-block"><img src="{{theme('imgs/cupcake.png')}}" width= "50px" alt=""></span>

    <span class="d-inline-block heading-text">密码重置</span>


@endsection


@section('title', '密码重置')

@section('body')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class'=> 'form-control']) !!}

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
    </div>

    <div class="form-group">
        {!! Form::submit('发送重置链接', ['class' => 'btn btn-primary spacing']) !!}
        <a href="{{route('login')}}">回到登录</a>
    </div>
</form>

@endsection
