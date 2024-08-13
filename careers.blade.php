@extends('admin.website_rebrand.app')

@section('css')
<link rel="stylesheet" href="{{asset("rebrand_css/login.css")}}">
<link rel="stylesheet" href="{{asset("rebrand_css/responsiveLogin.css")}}">
@endsection

@section('content')
<div class="careersPage">
    <h1>Interested in working with Endelos?</h1>
    <p class="introtxt">List of available jobs</p>
    <div class="loginCards">
        <div class="col-sm-4" id="loginCard">
            <div class="clientLogin">
                <h2>Become A Partner</h2>
                <p>For processors t o become partners with Endelos</p>
                <a href="/partner-page" class="loginBtn">Learn More</a>
            </div>
        </div>

        <div class="col-sm-4" id="loginCard">
            <div class="brokerLogin">
                <h2>Become A Broker</h2>
                <p>Work with Endelos as Broker</p>
                <a href="/broker/" class="loginBtn">Sign Up</a>
            </div>
        </div>

        <div class="col-sm-4" id="loginCard">
            <div class="amLogin">
                <h2>Become an Account Manager</h2>
                <p></p>
                <a href="/acm/" class="loginBtn"></a>
            </div>
        </div>
    </div>
</div>
@endsection