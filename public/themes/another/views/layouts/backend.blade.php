<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') &mdash; The network Cupcake</title>
    <link rel="stylesheet" href="{{theme('css/main.css')}}">
    <link rel="stylesheet" href="{{theme('css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{theme('css/select2.min.css')}}">
    <script src="{{theme('js/app.js')}}"></script>
    <script src="{{theme('js/select2.min.js')}}"></script>

    @yield('css')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand">The Sunday Sim</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                @if($admin && $admin->isSU())
                <li class="nav-item active"><a href="{{route('users.index')}}" class="nav-link">用户</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">设备</a>
                    <div class="dropdown-menu">
                        <a href="{{route('servers.index')}}" class="dropdown-item">服务器</a>
                        <a href="#" class="dropdown-item">another</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">else</a>
                    </div>
                </li>
                @endif

                <li class="nav-item"><a href="{{route('containers.index')}}" class="nav-link">机架</a></li>
            </ul>
        </div>
        @if($admin && $admin->name)
       <span class="d-inline-block navbar-text mr-md-3 mr-lg-3">Hello, {{$admin->name}}</span>
           <span class="d-inline-block navbar-text"><a href="/logout">退出登录</a></span>
        @endif
</nav>
    
    

<div class="container">
    <div class="row">
        <div class="col-md-12 vertical-spacing">

                <h2>@yield('topic')</h2>
            @include('layouts.errors')
            @yield('body')
        </div>
    </div>
</div>
</body>
@yield('script')

</html>