@if($errors->any())
<div class="alert alert-danger">
    <strong>似乎遇到了问题</strong>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

@if(Session::get('status'))
   <div class="alert alert-info">
       {{Session::get('status')}}
   </div>
@endif