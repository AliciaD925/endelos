@extends('admin.website_rebrand.app')

@section('title')
Memberships
@endsection

@section('description')
Find out about memebership tiers when you become a client with Endelos. 
@endsection

@section('css')
<link rel="stylesheet" href="{{asset("rebrand_css/memberships.css")}}">
<link rel="stylesheet" href="{{asset("rebrand_css/responsiveMemberships.css")}}">
@endsection

@section('content')
<div class="member-page">
    <div class="hero">
        <div class="hero-title">
            <h1>Endelos<br>Membership Tiers</h1>
            <img class='logoimg' src="{{asset('img/rebrand/Logo.png')}}" alt="">
            <h3>Reach the Elite with Endelos</h3>            
        </div>
        <div class="hero-image">
            <img src="{{asset('img/rebrand/member/member-status.jpg')}}" alt="">
        </div>
    </div>
    <div class="headline">
        <h2>Becoming a client with Endelos is completely free!</h2>
        <button href="/join" id="join" class='btn btn-primary'>Join Now</button>
    </div>
    <div id="basic">
        <div class="member">
            <div class="half">
                <h3>Basic Membership</h3>
                    <p>Once you sign up and verify your email you will be given access to your client dashboard. 
                    Here you will complete a very simple application to become a basic member with Endelos. 
                    Upon submission of your application, you will <b>instantly</b> qualify for basic membership processing partners.</p>
                    <p>Enable the processors of your choice, integrate the Endelos plugin and you’re ready to start accepting payments from your customers! 
                    </p>
            </div>
            <div class="benefits">
                <h4>Benefits of a Basic Membership:</h4>
                    <ul>
                        <li>Instant approval! Start accepting payments immediately</li><br>
                        <li>Access to dashboard</li><br>
                        <li>Accept online payments from customers</li><br> 
                        <li>Assigned a broker to help you with integration</li> 
                    </ul>
            </div>
        </div>
        <div class="processors">
                <p>These processors are included with a basic membership</p>               
            <div class="main-gallery js-flickity"
                data-flickity-options='{ "cellAlign": "left", "contain": true }'>
                <div class="gallery-cell">
                    <img class="pay-logo" src="{{asset('img/rebrand/processor-logo/echeck.jpg')}}" alt="">
                    <p class="pay-label">E-Check</p></div>
                <div class="gallery-cell">
                    <img class="pay-logo" src="{{asset('img/rebrand/processor-logo/apple-pay-logo-sm.png')}}" alt="">
                    <p class="pay-label">Apple Pay</p></div>
                <div class="gallery-cell">
                    <img class="pay-logo" src="{{asset('img/rebrand/processor-logo/google-pay.png')}}" alt="">
                    <p class="pay-label">Google Pay</p></div>
                <div class="gallery-cell">
                    <img class="pay-logo" src="{{asset('img/rebrand/processor-logo/cash-app-sm.png')}}" alt="">
                    <p class="pay-label">Cash App</p></div>
                <div class="gallery-cell">
                    <img class="pay-logo" src="{{asset('img/rebrand/processor-logo/venmo.png')}}" alt="">
                    <p class="pay-label">Venmo</p></div>
                <div class="gallery-cell">
                    <img class="pay-logo" src="{{asset('img/rebrand/processor-logo/zelle-sm.png')}}" alt="">
                    <p class="pay-label">Zelle</p></div>
                <div class="gallery-cell">
                    <img class="pay-logo" src="{{asset('img/rebrand/processor-logo/money-order-sm.png')}}" alt="">
                    <p class="pay-label">Money Order</p></div>
                <div class="gallery-cell">
                    <img class="pay-logo" src="{{asset('img/rebrand/processor-logo/bitcoin-sm.png')}}" alt="">
                    <p class="pay-label">Cryptocurrency</p></div>
            </div>
        </div>
    <div class="member" id="premium">
        <div class="half">
            <h3>Premium Membership</h3> 
                <p>Having a premium membership with Endelos gives you the ability to accept major credit cards and ACH from your customers.<br>
                In order to qualify for Premium membership, complete the application found within your dashboard. Once the application is submitted, it will need to be reviewed and approved. You will receive a notification in your dashboard once processors are approved. In order to activate the approved processor, simply enable it from your dashboard.<br>
                No further integration is required, you will just need to ensure that the credit card toggle is activated within the plugin you already have integrated on your website.
                </p>
        </div>
        <div class="benefits">
            <h4>Benefits of a Premium Membership:</h4>
                <ul>
                    <li>Ability to accept credit cards including:<br>Visa, Mastercard, AMEX, Discover</li><br>
                    <li>Accept ACH payments from your customers</li><br> 
                    <li>Even more processing options available to you, with lower rates</li><br>
                    <li>See new approvals generated right in your dashboard</li>
                </ul>
        </div>
    </div>
    <div id="elite">
        <div class="member">
            <div class="half">
                <h3>Elite Membership</h3>
                    <p>Do you want to be eligible for more processing at even lower rates?</p>
                    <p>Upgrade your account at no charge to unlock even more processing. From the membership page found on your dashboard upgrade to an elite limited membership by uploading and submitting the required documents. Absolutely no further integration is required by you, once you’re approved by additional processors simply enable it from your dashboard and it will be active immediately.</p> 
                    <p style="color:#b3efb2"><span id="tip">Elite Tip:</span> The more information you submit, the more processing you can get!<br> Reach the highest memembershp tier <b>Elite Endless</b> when you submit all required docmentation.
                    </p>               
            </div>
            <div class="benefits">
                <h4>Benefits of an Elite Membership:</h4>
                    <ul>
                        <li>Lower your rates by having access to more processing providers</li><br> 
                        <li>Integrate approved processors with just one click</li><br>
                        <li>Approval rates for processing accounts increases</li><br> 
                        <li>Increased monthly and annual volume limits</li><br>
                        <li>Unlock the ability to have an endless number of processors at your fingertips</li>
                    </ul>
            </div>
        </div>
    </div>
    <div class="join section">
        <h3>One Integration, Endless Processors</h3>
        <a href="join" class="btn btn-primary">Join Now</a>
    </div>
</div>
@endsection

@section('script')
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endsection