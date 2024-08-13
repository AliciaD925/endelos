@extends('admin.website_rebrand.app')

@section('title')
Homepage
@endsection

@section('description')
Welcome to Endelos! Sign up today to start processing. 
@endsection

@section('css')
<link rel="stylesheet" href="{{asset("rebrand_css/homepage.css")}}">
<link rel="stylesheet" href="{{asset("rebrand_css/responsiveHomepage.css")}}">
<style>
/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 150ms infinite linear;
  -moz-animation: spinner 150ms infinite linear;
  -ms-animation: spinner 150ms infinite linear;
  -o-animation: spinner 150ms infinite linear;
  animation: spinner 150ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>
@endsection
@section('content')
<div class="loading" style="display: none;"></div>
<div class="hero section">
    <div class="interior">
        <div class="left">
            <div class="hero-text">
                <h2>Join ENDELOS and Start Processing Today</h2>
            </div>
            <img src="{{asset('img/rebrand/home/home_hero.jpg')}}" alt="">
            <div class="hero-text">
                <h3><b>ONE</b> simple application, <br><b>ONE</b> plugin integration</h3>
                <h3>Access to an <b>ENDLESS</b> number of payment processors</h3>
            </div>

        </div>
        <div class="right">
            <h2 class="main-heading">GET STARTED</h2>
            @if($error = session("error"))
            <div class="alert alert-danger alert-dismissible fade in" role="alert">

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong> {{$error}} </strong>
            </div>

            @endif
            @if($msg = session("message"))
            <div class="alert alert-success alert-dismissible fade in" role="alert">

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong> {{$msg}} </strong>
            </div>

            @endif
            <form action="client-store" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" id="first_name" placeholder='First Name' name="template-contactform-first-name" required>
                    <input type="text" id="last_name" placeholder='Last Name' name="template-contactform-last-name" required>
                    <input type="email" id="email" placeholder='Email' name="template-contactform-business-email" required>
                    <input type="password" id="password" placeholder='Password' name="template-contactform-password" required>
                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" style="display: none;" />
                    <!-- @if(getenv('GOOGLE_RECAPTCHA_KEY'))
                    <div class="col_full">
                        <div class="g-recaptcha" data-sitekey="{{getenv('GOOGLE_RECAPTCHA_KEY')}}"></div>
                    </div>
                    @endif -->
                    <div class="col_full">
                        <div class="col-md-6">
                            {!! app('captcha')->display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <button type='submit' id="join" class='btn btn-primary'>Join Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="benefits section">
    <h2><span class="green">One</span> Integration,<span class="green"> Endless</span> Processors</h2>
    <img class='logoimg' src="{{asset('img/rebrand/Logo.png')}}" alt="">
    <p class="benefits-content">
        Endelos is the only online payment processing marketplace with one of the largest networks of payment providers in the world. Allow us to get you the best deal out there by having banks compete for your business. Getting started couldn’t be any easier. Join today and let Endelos connect you to an endless number of processors, with just ONE simple integration!<br>
        Find out more about <a href="/memberships">client memberships</a> with endelos.</p>
    <div class="benefit-box">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th colspan=3>Endelos Benefits</th>
                </tr>
                <tr>
                    <td>
                        <img src="{{asset('img/rebrand/profiles.svg')}}" alt="">
                    </td>
                    <td>
                        <img src="{{asset('img/rebrand/globalNetwork.svg')}}" alt="">
                    </td>
                    <td>
                        <img src="{{asset('img/rebrand/multipleProcessors.svg')}}" alt="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Simple Application</p>
                    </td>
                    <td>
                        <p>Accepts multiple payment types</p>
                    </td>
                    <td>
                        <p>No limit on processors</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{asset('img/rebrand/paymentGateway.svg')}}" alt="">
                    </td>
                    <td>
                        <img src="{{asset('img/rebrand/appApprove.svg')}}" alt="">
                    </td>
                    <td>
                        <img src="{{asset('img/rebrand/paymentProcessor.svg')}}" alt="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>One Integration</p>
                    </td>
                    <td>
                        <p>Join and approved in seconds</p>
                    </td>
                    <td>
                        <p>Secure payments</p>
                    </td>
                </tr>
            </table>
            <table class="responsive-table">
                <tr>
                    <th colspan=4>Endelos Benefits</th>
                </tr>
                <tr>
                    <td>
                        <img src="{{asset('img/rebrand/profiles.svg')}}" alt="">
                    </td>
                    <td>
                        <img src="{{asset('img/rebrand/globalNetwork.svg')}}" alt="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Simple Application</p>
                    </td>
                    <td>
                        <p>One Integration</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{asset('img/rebrand/multipleProcessors.svg')}}" alt="">
                    </td>
                    <td>
                        <img src="{{asset('img/rebrand/paymentProcessor.svg')}}" alt="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>No limit on processors</p>
                    </td>
                    <td>
                        <p>Secure payments</p>
                    </td>
                </tr>
                <tr>

                    <td>
                        <img src="{{asset('img/rebrand/appApprove.svg')}}" alt="">
                    </td>
                    <td>
                        <img src="{{asset('img/rebrand/paymentGateway.svg')}}" alt="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Join and approved in seconds</p>
                    </td>
                    <td>
                        <p>Accepts multiple payment types</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="learn-more section">
    <div class="box1">
        <div class="box2">
            <div class="box3">
                <div class="sideline"></div>
                <h2>Simple, <span class="bold">Secure</span> Solutions</h2>
                <img class='logoimg' src="{{asset('img/rebrand/Logo.png')}}" alt="">
                <p>Let Endelos save you time and money, by getting you the best deal out there on payment processing for your business. Whether you’re a first time entrepreneur looking for an easy way to take payments or you’re in the market for saving a bundle, we’ve got you covered. </p>
                <p>Endelos connects you with multiple payment processors, banks and payment service providers to bid on and compete for your business in a matter of minutes. With one simple application, Eneldos makes comparison shopping easy. Get started with Endelos today, may the best processor win!</p>
                <a href="about" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</div>
<div class="join-now section">
    <div class="box shadow">
        <div class="title">
            <h2>Accept All Types of Payments!</h2>
        </div>
        <p>Endelos offers a unique Universal Checkout system that allows you to take multiple payment types from your customers, with one simple integration. There is no limit on the number of processors you can be connected to. Choose which payment types you wish to allow the customer to select, or use them all! </p>
        <a href="join" class="btn btn-primary">Join Now</a>
    </div>
    <img class="pay_image" src="{{asset('img/rebrand/home/home_pay.jpg')}}" alt="">
</div>
<div class="integrations section">
    <div class="box">
        <h2>One Integration</h2>
        <p>We built our platform for developers who value their time to delivery and owners that elect to make business decisions, not coding decisions. Invite your developer to integrate into our robust and flexible plugin or ask one of our engineers to do it for you. </p>
    </div>
    <a href="documentation" class="btn btn-primary">Learn More</a>
</div>
<div class="broker section">

    <div class="broker-main">
        <div class="broker-content">
            <h2>The Broker Benefit</h2>
            <p>When you sign up with Endelos, you have the additional benefit of having an assigned broker to help with all of your processing needs. Select your own broker or have us assign one for you. From application to integration, your broker provides much-needed customer service and education so that you can focus on growing your business and revenue!
            </p>
            <a href="brokers" class="btn btn-primary" id="broker_btn">Learn More</a>
        </div>
        <div class="box">
            <div class="broker-benefits">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </td>
                            <td>
                                <span class='table-text'>Seamless Experience</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </td>
                            <td>
                                <span class='table-text'>Phone, text, & email support</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </td>
                            <td>
                                <span class='table-text'>One on one support</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </td>
                            <td>
                                <span class='table-text'>Integration Assitance</span>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="responsive-table">
                    <tbody>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </td>
                            <td>
                                <span class='table-text'>Seamless Experience</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </td>
                            <td>
                                <span class='table-text'>One on one support</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </td>
                            <td>
                                <span class='table-text'>Help with integration</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </td>
                            <td>
                                <span class='table-text'>Phone, text, & email support</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="center-btn">
                    <a href="broker" class="btn btn-primary" id="btn_responsive">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimony">
    <div class="box">
        <h2>Testimonials from our clients</h2>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img class="d-block mx-auto" src="{{asset('img/rebrand/home/testimonialBG.png')}}" alt="Slide 1">
                    <div class="carousel-caption">
                        <h3>"Endelos offers a stable, reliable payment platform that has helped my business grow."</h3>
                        <p>Kennedy Trudie</p>
                    </div>
                </div>
                <div class="item">
                    <img class="d-block mx-auto" src="{{asset('img/rebrand/home/testimonialBG.png')}}" alt="Slide 2">
                    <div class="carousel-caption">
                        <h3>"Since I've used Endelos, they had helped me get E-Check and Crypto processing for my business."</h3>
                        <p>Ezra Reiner</p>
                    </div>
                </div>
                <div class="item">
                    <img class="d-block mx-auto" src="{{asset('img/rebrand/home/testimonialBG.png')}}" alt="Slide 3">
                    <div class="carousel-caption">
                        <h3>"Reliable payments is what I've come to expect from Endleos."</h3>
                        <p>Sacha Gerardo</p>
                    </div>
                </div>
                <div class="item">
                    <img class="d-block mx-auto" src="{{asset('img/rebrand/home/testimonialBG.png')}}" alt="Slide 3">
                    <div class="carousel-caption">
                        <h3>"Endelos payments has opened up my customer base by adding credit card options."</h3>
                        <p>Anne-Laure Siria</p>
                    </div>
                </div>
                <div class="item">
                    <img class="d-block mx-auto" src="{{asset('img/rebrand/home/testimonialBG.png')}}" alt="Slide 3">
                    <div class="carousel-caption">
                        <h3>"Endelos services has offered my company the most amount of payment support than what I've seen."</h3>
                        <p>Peter Henderson</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="join section">
    <h3>One Integration, Endless Processors</h3>
    <a href="join" class="btn btn-primary">Join Now</a>
</div>
@endsection

@section('script')
<script src='https://www.google.com/recaptcha/api.js'></script>
{!! NoCaptcha::renderJs() !!}
<script>
    $(document).ready(function() {
        $('.carousel').carousel({
            // interval: 2000
        })
        $("#join").click(function(){
            var firstName = $('#first_name').val();
            var lastName = $('#last_name').val();
            var email = $('#email').val();
            var password = $('#password').val();
            if(firstName!= '' && lastName!= '' && email != '' && password != '')
            {
                $('.loading').show();
            }
        });
    });
</script>
@endsection