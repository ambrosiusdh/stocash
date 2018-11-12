@extends('layout.master')

@section('title')
    STOCASH - Login
@endsection

@section('contents')
    <div class="cashier-login">
        <div class="cashier-login-header">
            <h2>Stocash</h2>
            <p>Your Personal Shop Assistant</p>
        </div>
        <div class="cashier-login-form">
            <form action="{{url('/login')}}" method="POST">
                <div class="form-group">
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <input type="checkbox" style="width: initial;" name="checkbox"> Remember me
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" value="Masuk" name="submit">
                </div>
                {{csrf_field()}}
            </form>

            <p>Tidak punya akun ? <span>Daftar sekarang.</span></p>
            @if($errors->any())
            <div style="font-weight: bold;">
                @foreach($errors->all() as $error)
                    <p style="color: yellow; margin: 0;">{{ $error }}</p>
                @endforeach
            </div>
            @endif
            @if(session('error'))
                <div style="font-weight: bold; color: yellow;">
                    <p>{{session('error')}}</p>
                </div>
            @endif
        </div>
    </div>
@endsection
