@extends('layouts.backend')

@section('css')
    <link rel="stylesheet" href="{{theme('css/preload.css')}}">
    <link rel="stylesheet" href="{{theme('css/fontawesome-all.css')}}">
@endsection

@section('body')
  <h1>qq preload</h1>
  <a href="#" id="face-btn"><i class="far fa-smile">表情</i></a>
    <div class="card qq-face">
        <p class="loading-block">
            加载中...
        </p>
        {{--<ul>--}}
            {{--<li><img src="{{theme('imgs/QQ/01.gif')}}" alt=""></li>--}}
            {{--<li><img src="{{theme('imgs/QQ/02.gif')}}" alt=""></li>--}}
            {{--<li><img src="{{theme('imgs/QQ/03.gif')}}" alt=""></li>--}}
        {{--</ul>--}}
    </div>
@endsection

@section('script')
    <script src="{{theme('js/preload.js')}}"></script>
    <script>
        function PrefixInteger(num, lenth)
        {
            return ( "0000000000000000" + num).substr(-lenth);
        }
        // alert('num');

        var $btn = $('#face-btn'),
            $panel = $('.card');
        var imgs = [];
        for (var i=0; i<9;i++)
        {
            imgs[i] = 'themes/another/assets/imgs/QQ/'+PrefixInteger(i,2)+'.gif';
        }

        var len = imgs.length;

        $btn.on('click', function (e) {
            // alert('face');
            e.stopPropagation();
            $panel.show();
            $.preload(imgs,{
               all: function(){
                    // alert('all');
                    var html = '';
                    html +='<ul class="list">';
                    for(var i=0; i<len; i++)
                    {
                        html += '<li><img src="' + imgs[i] + '" alt=""></li>';
                    }
                    html += '</ul>';
                    // $panel.html(html);
                    setTimeout(function(){
                        $panel.html(html);
                    }, 1000);
               }
           });
        });

        $(document).on('click', function () {
            $panel.hide();
        })
    </script>
@endsection