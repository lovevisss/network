<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{theme('css/jd.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="wrap" id="test">
      <ul>
          <li data-id="a">
                <span>家用电器</span>
          </li>
          <li data-id="b">
              <span>手机/运营商/数码</span>
          </li>
          <li data-id="c">
            <span>电脑办公</span>
          </li>
          <li data-id="d">
              <span>家具/家装/厨具</span>
          </li>
          <li data-id="e">
              <span>男装/女装/童装/内衣</span>
          </li>
      </ul>
        <div id="sub" class="none">
            <div id="a" class="sub_content none">
                <dl>
                    <dt>
                        <a href="#">电视 <i>&gt;</i></a>
                    </dt>
                    <dd>
                        <a href="#">曲面电视</a>
                        <a href="#">超薄电视</a>
                        <a href="#">HDR电视</a>
                        <a href="#">4K超清电视</a>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</body>
<script src="{{theme('js/jquery.min.js')}}"></script>
<script src="{{theme('js/vector.js')}}"></script>
<script src="{{theme('js/megadropdown.js')}}"></script>
</html>