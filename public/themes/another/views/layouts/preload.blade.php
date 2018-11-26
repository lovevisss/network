@extends('layouts.backend')

@section('css')
    <link rel="stylesheet" href="{{theme('css/preload.css')}}">

@endsection

@section('body')
    <h2>preload</h2>
    <div class="box">
        <img src="http://uiiiuiii.com/wp-content/uploads/2017/05/TDS.jpg" alt="" width="1200px" id="img">
        <p>
            <a href="#" class="btn" data-control="prev">上一页</a>
            <a href="#" class="btn" data-control="next">下一页</a>
        </p>
    </div>
    <div class="loading">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{theme('js/preload.js')}}"></script>
    <script>
        // alert('start');
        var imgs = [
            'http://uiiiuiii.com/wp-content/uploads/2017/05/TDS.jpg',
            'https://images.uiiiuiii.com/wp-content/uploads/2017/05/%E6%B8%90%E5%8F%98%E8%A1%A8%E6%83%85%E5%8C%85.jpg',
            'https://images.uiiiuiii.com/wp-content/uploads/2017/05/%E9%97%AA%E7%94%B5%E5%AD%97.jpg'
        ];
        
        var index = 0;
        var len = imgs.length;
        var $percent = 0;
        $progress = $('.progress-bar');
        $.preload(imgs, {
            each: function (count) {
                $percent = Math.round((count+1)/len*100);
                $progress.attr('style', 'width:'+$percent+'%');
                $progress.attr('aria-valuenow', $percent);
            },
            all: function () {
                setTimeout(function () {
                    $('.loading').hide();
                }, 500);
                document.title = '1/' + len;
            }
        });
        $('.btn').on('click', function () {
            if($(this).data('control') === 'prev')
            {
                index = Math.max(0, --index);  //取大的
            }else
            {
                index = Math.min(len-1, ++index);
            }

            document.title = (index+1)+'/'+len;
            $('#img').attr('src', imgs[index]);
        });
    </script>
@endsection