@extends('layouts.default')
@section('content')

    @if(Auth::check())

        <div class="row">
            <div class="col-md-8 section status_form">
                @include('shared._status_form')
            </div>


            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info',['user'=>Auth::user()])
                </section>
            </aside>

        </div>
    @else
        <div class="jumbotron">
            <h1>hello world</h1>
            <p class="lead"><a href="www.baidu.com">laravel 如me</a></p>
            <p>一些开始</p>
            <p>
                <a href="{{route('signup')}}" class="btn btn-lg btn-success">
                    现在这侧
                </a>
            </p>

        </div>

    @endif


@stop
