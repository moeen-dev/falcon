@extends('layouts.frontend')
@section('content')
<div class="single-checkout">
    <div class="container">
        <div class="wrapper">
            <div class="checkout flexwrap">
                <div class="item left styled">
                    <h1>Please Login</h1>
                    <div style="margin-bottom: 2em; text-align: center;">
                        @if(Session::has('success'))
                        <p style="color: red" class="text-center">{{ Session::get('success')}}</p>
                        @endif
                        @if(Session::has('error'))
                        <p style="color: red" class="text-center">{{ Session::get('error')}}</p>
                        @endif
                    </div>
                    <form method="POST" action="">
                        @csrf
                        <p>
                            <label for="email">Email Address <span></span></label>
                            <input type="email" name="email" id="email" autocomplete="off">
                            @if($errors->has('email'))
                            <small style="color: red">{{ $errors->first('email')}}</small>
                            @endif
                        </p>
                        <div class="primary-checkout">
                            <button class="primary-button primary-checkout">Reset Password</button>
                        </div>
                    </form>
                </div>

                <div class="item right">
                    <h2>Login Page</h2>
                    <div class="summary-order is-sticky">
                        <div class="summary-totals">
                            <p>If you have not an account please register first by clicking <strong><a style="color: red;" href="{{ route('user.register')}}">Create An Account?</a></strong>.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection