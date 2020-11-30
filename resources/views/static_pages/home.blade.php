@extends('layouts.default')
@section('content')
    <div class="jumbotron">
        <h1 >Hello Laravel</h1>
        <p class="lead">
            你现在看到是的 <a href="http://www.baidu.com">百度</a>的演示
        </p>

        <p>一切, 从这里开始</p>
        <p>
            <a href="{{route('signup')}}" class="btn btn-lg btn-success" role="button">立即注册</a>
        </p>
    </div>

@stop
