@extends('project1/generalUser/layouts')
@section('style')
<style>
    .con{
        padding-left: 10%;
        padding-right: 10%;
    }
    .t{
        font: 20px Montserrat, sans-serif;
        line-height: 1.8;
        font-size: 16px;
        color:#777;
    }
    a{
        color:#777;
    }
    a:hover {
      color: #1abc9c !important;
    }
    .pagination>li>a,
    .pagination>li>span {
        color: #1abc9c;
    }
    .pagination>.active>span:hover,.pagination>li.active>span {
      background: #1abc9c;
      color: #fff;
      border: 1px solid #1abc9c;
    }
    .right{
        float:right;
    }
    .btn{
        background: #1abc9c;
        color:#fff;
    }
    .btn:hover{
        background:#148f77;
        color:#fff;
    }
    input:focus, input[text]:focus, .uneditable-input:focus{
        box-shadow: 0 1px 1px #3ee4a8 inset, 0 0 8px #3ee4a8 !important;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
