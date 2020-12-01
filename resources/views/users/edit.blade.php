@extends('layouts.default')


@section('title','更新资料')

@section('content')

    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>更新个人资料</h5>
            </div>
            <div class="card-body">
                @include('shared._errors')

                <div class="gravatar_edit">
                    <a href="http://gravatar.com/emails">
                        <img src="{{$user->gravatar('200')}}" alt="{{$user->name}}" class="gravatar">
                    </a>
                </div>

                <form action="{{route('users.update',$user->id)}}" method="POST">
                    {{method_field('PATCH')}}
                    {{csrf_field()}}
                    <div class="form-group"><label for="name"></label><input type="text" name="name"
                                                                             class="form-control"
                                                                             value="{{$user->name}}"></div>
                    <div class="form-group"><label for="email"></label><input disabled type="email" name="email"
                                                                              class="form-control"
                                                                              value="{{$user->email}}"></div>
                    <div class="form-group"><label for="password"></label><input type="password" name="password"
                                                                                 class="form-control"
                                                                                 value="{{old('password')}}"></div>
                    <div class="form-group"><label for="password_confirmation"></label><input type="password"
                                                                                              name="password_confirmation"
                                                                                              value="{{old('password_confirmation')}}"
                                                                                              class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        更新
                    </button>

                </form>


            </div>
        </div>


    </div>

@stop
