@extends('layouts.backend')

@section('title')
    容器管理
@endsection

@section('css')
    <link rel="stylesheet" href="{{theme('css/jd.css')}}">
    @endsection

@section('body')

    <div class="wrap" id="test">
        <ul>
            @foreach($containers as $container)
                <li data-id="{{$container->id}}"><span>{{$container->name}}</span></li>
            @endforeach
            {{--<li data-id="a">--}}
                {{--<span>家用电器</span>--}}
            {{--</li>--}}
            {{--<li data-id="b">--}}
                {{--<span>手机/运营商/数码</span>--}}
            {{--</li>--}}
            {{--<li data-id="c">--}}
                {{--<span>电脑办公</span>--}}
            {{--</li>--}}
            {{--<li data-id="d">--}}
                {{--<span>家具/家装/厨具</span>--}}
            {{--</li>--}}
            {{--<li data-id="e">--}}
                {{--<span>男装/女装/童装/内衣</span>--}}
            {{--</li>--}}
        </ul>
        <div id="sub" class="none">
            @foreach($containers as $container)
            <div id="{{$container->id}}" class="sub_content none">
                <dl>
                    <dd>
                        @foreach($container->servers()->orderBy('index')->get() as $server)

                            <a href="{{route('servers.edit', $server->id)}}">{{$server->desc}}({{$server->ip}})</a>
                        @endforeach
                    </dd>
                </dl>
            </div>
            @endforeach
        </div>
    </div>


@endsection


@section('script')
    <script src="{{theme('js/jquery.min.js')}}"></script>
    <script src="{{theme('js/vector.js')}}"></script>
    <script src="{{theme('js/megadropdown.js')}}"></script>

    @endsection