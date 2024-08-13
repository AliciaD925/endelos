@extends('admin.website_rebrand.app')

@section('title')
Login
@endsection

@section('description')
Login page for access to client, broker and account manager dashboards.  
@endsection

@section('css')
<link rel="stylesheet" href="{{asset("rebrand_css/login.css")}}">
<link rel="stylesheet" href="{{asset("rebrand_css/responsiveLogin.css")}}">
@endsection

@section('content')
<div class="loginPage">
    <h1>Login</h1>
    <p class="introtxt">Use the login links below to access your active account dashboard</p>
    <div class="loginCards">
        <div class="col-sm-4" id="loginCard">
            <div class="clientLogin">
                <h2>Client</h2>
                <p>Current clients with Endelos login to access your client dashboard</p>
                <a href="/client/" class="loginBtn">Login</a>
            </div>
        </div>

        <div class="col-sm-4" id="loginCard">
            <div class="brokerLogin">
                <h2>Broker</h2>
                <p>Current brokers with Endelos login to access your broker dashboard</p>
                <a href="/broker-dashboard/" class="loginBtn">Login</a>
            </div>
        </div>

        <div class="col-sm-4" id="loginCard">
            <div class="amLogin">
                <h2>Account Manager</h2>
                <p>Account managers with Endelos login to access your dashboard</p>
                <a href="/acm/" class="loginBtn">Login</a>
            </div>
        </div>
    </div>
</div>
@endsection