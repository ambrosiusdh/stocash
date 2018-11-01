@extends('layout.master')

@section('contents')
    <div class="cashier-login">
        <div class="cashier-login-header">
            <h2>Stocash</h2>
            <p>Your Personal Shop Assistant</p>
        </div>
        <div class="cashier-login-form">
            <form action="">
                <div class="form-group">
                    <input type="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="button" class="btn" value="Masuk">
                </div>
            </form>
            <p>Tidak punya akun ? <span>Daftar sekarang.</span></p>
        </div>
    </div>
@endsection
