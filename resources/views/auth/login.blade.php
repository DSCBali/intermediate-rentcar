@extends('layouts.auth')

@section('content')
<div class="login-wrapper ">
    <div class="bg-pic">
        <img src="{{asset('assets/pictures/login-background.jpg')}}" data-src="{{asset('assets/pictures/login-background.jpg')}}" data-src-retina="{{asset('assets/pictures/login-background.jpg')}}" alt="" class="lazy">
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
            <h2 class="semi-bold text-white">KuhaKu 8 Rent Car</h2>
            <p class="small">Web Application For Management Rent Car<br>Copyright © 2018 KuhaKu 8</p>
        </div>
    </div>
    <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
            <img src="{{asset('assets/pictures/logo.png')}}" alt="logo" data-src="{{asset('assets/pictures/logo.png')}}" data-src-retina="{{asset('assets/pictures/logo_2x.png')}}" width="78" height="22">
            <p class="p-t-35">Sign in to Continue</p>
            <form id="form-login" class="p-t-15" role="form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <div class="form-group form-group-default">
                    <label>Login</label>
                    <div class="controls">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Your E-Mail" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group form-group-default">
                    <label>Password</label>
                    <div class="controls">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Your Password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 no-padding sm-p-l-10">
                        <div class="checkbox ">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">Keep Me Signed in</label>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-end">
                        <!-- <a href="#" class="text-info small">Help? Contact Support</a> -->
                    </div>
                </div>
                <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
            </form>
            <!-- <div class="pull-bottom sm-pull-bottom">
                <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                    <div class="col-sm-3 col-md-2 no-padding">
                        <img alt="" class="m-t-5" data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" height="60" src="assets/img/demo/pages_icon.png" width="60">
                    </div>
                    <div class="col-sm-9 no-padding m-t-10">
                        <p>
                        <small>
                        Create a pages account. If you have a facebook account, log into it for this
                        process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
                        </small>
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="overlay hide" data-pages="search">
    <div class="overlay-content has-results m-t-20">
        <div class="container-fluid">
            <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
            <a href="#" class="close-icon-light overlay-close text-black fs-16">
                <i class="pg-close"></i>
            </a>
        </div>
        <div class="container-fluid">
            <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
            <br>
            <div class="inline-block">
                <div class="checkbox right">
                    <input id="checkboxn" type="checkbox" value="1" checked="checked">
                    <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
                </div>
            </div>
            <div class="inline-block m-l-10">
                <p class="fs-13">Press enter to search</p>
            </div>
        </div>
        <div class="container-fluid">
            <span>
                <strong>suggestions :</strong>
            </span>
            <span id="overlay-suggestions"></span>
            <br>
            <div class="search-results m-t-40">
                <p class="bold">Pages Search Results</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                <div>
                                    <img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                                </div>
                            </div>
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                                <p class="hint-text">via john smith</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                <div>T</div>
                            </div>
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                                <p class="hint-text">via pages</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                <div>
                                    <i class="fa fa-headphones large-text "></i>
                                </div>
                            </div>
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                                <p class="hint-text">via pagesmix</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                                <div>
                                    <i class="fa fa-facebook large-text "></i>
                                </div>
                            </div>
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                                <p class="hint-text">via facebook</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                                <div>
                                    <i class="fa fa-twitter large-text "></i>
                                </div>
                            </div>
                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                                <p class="hint-text">via twitter</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                                <div>
                                    <i class="fa fa-google-plus large-text "></i>
                                </div>
                            </div>

                            <div class="p-l-10 inline p-t-5">
                                <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                                <p class="hint-text">via google plus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->