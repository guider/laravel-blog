@extends('layouts.default')
@section('title','重置密码')
@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h5>重置密码</h5>
            </div>

            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <form action="{{route('password.email')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group"><label for="email" class="form-control-label">
                            邮箱地址:
                        </label><input
                            name="email"
                            type="email"
                            class="form-control"
                            id="email" required>


                        @if($errors->has('email'))
                            <span class="form-text">
                                <strong>{{$errors->first('email')}}</strong>
                            </span>

                        @endif

                    </div>

                    <div class="from-group">
                        <button class="btn btn-primary">
                            发送邮件
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
