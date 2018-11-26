<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{theme('css/main.css')}}">
</head>
<body>
    <div class="container">
        <div class="row vertical-center">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card shadows bg-{{$errors->any()? 'danger' : 'light'}}">
                    <div class="card-header">
                        @yield('heading')
                    </div>
                    <div class="card-body">
                        @include('layouts.errors')
                       
                        @yield('body')
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>