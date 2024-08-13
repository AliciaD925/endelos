@extends('admin.website_rebrand.app')

@section('title')
Brokers
@endsection

@section('description')
Become a broker with Endelos. 
@endsection

@section('css')
<link rel="stylesheet" href="{{asset("rebrand_css/broker.css")}}">
<link rel="stylesheet" href="{{asset("rebrand_css/responsiveBroker.css")}}">
<style>
    .alert {
        margin: 10px;
    }
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
<div class="hero section" id='hero'>
    <div class="hero-background">
        <div class="hero-form">
            <h2>Become a Broker Today</h2>
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
            <form method="POST" action="{{ url('admin/broker/save-broker') }}" data-alert-type='inline'>
                @csrf
                <div class="form-group">
                    <input type="text" id="first_name" name="first_name" placeholder='First Name' required>
                    <input type="text" id="last_name" name="last_name" placeholder='Last Name' required>
                    <input type="email" id="email" name="email" placeholder='Email' required>
                    <input type="password" id="password" name="password" placeholder='Password' required>
                    <button type='submit' id="join" class='sign-up-btn'>Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="intro">
    <div class="intro-outer">
        <div class="intro-inner">
            <h2>Being a Broker with</h2>
            <img class='logoimg' src={{asset('img/rebrand/Logoimg_name.png')}} alt="">
            <p>A broker is a liaison between a client and their payment processing account. A broker is there to help a client if they should have any questions or issues during their terms of service with Endelos.</p>
        </div>
    </div>
    <div class="howTo">
        <img class='broker-img' src={{asset('img/rebrand/broker/broker-howto.jpg')}} alt="">
        <div class="howTo-text">
            <h2>Broker Responsibilities</h2>
            <p>There are no requirements to become a broker with Endelos, anyone can sign up! Basic knowledge of payment processing is a strong advantage. A broker should be able to willing and able to dedicate their time to helping clients with their accounts. This means supporting them through the application process, integration of the plugin, and understanding their terms of processing. Brokers main responsibilities include: </p>
            <ul>
                <li><b>Educate: </b>be able to explain terms, risks, and costs to your clients effectively.</li>
                <li><b>Manage: </b>ensure you are able to manage all of your clients and their needs efficiently.</li>
                <li><b>Help: </b>clients with application questions, integration issues, securing additional processors.</li>
                <li><b>Customer support: </b>answer questions and train clients through the life of their account.</li>
            </ul>

        </div>
    </div>
</div>
<div class="brokerBenefits">
    <table class="table">
        <tr>
            <th colspan=4>Benefits of being a Broker</th>
        </tr>
        <tr>
            <td>
                <img src="{{asset('img/rebrand/paymentGateway.svg')}}" alt="">
            </td>
            <td>
                <img src="{{asset('img/rebrand/profiles.svg')}}" alt="">
            </td>
        </tr>
        <tr>
            <td>
                <p>Weekly Payouts</p>
            </td>
            <td>
                <p>Bring your own Clients</p>
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{asset('img/rebrand/globalNetwork.svg')}}" alt="">
            </td>
            <td>
                <img src="{{asset('img/rebrand/multipleProcessors.svg')}}" alt="">
            </td>
        </tr>
        <tr>
            <td>
                <p>No limits on Clients</p>
            </td>
            <td>
                <p>Access to consultants</p>
            </td>
        </tr>
    </table>
    <a href="#hero"><button class='sign-up-btn'>Sign Up</button></a>
</div>

<div class="client section">
    <div class="client-broker">
        <div class="client-broker-intro">
            <h2>Already A Client?</h2>
            <p>Why must I have a payment processing broker? </br>Every successful business owner knows one thing, “I can’t do everything!” <br />Brokers provide much needed customer services and education to their clients. Our experience has taught us that most payment processing providers have limited or no valuable customer service. Faced with the most important aspect of most businesses, “Getting Paid!”, having a broker on your team to resolve questions or issues is mission critical!
            </p>
        </div>
        <img class='client-img' src={{asset('img/rebrand/broker/clientImg.jpg')}} alt="">
    </div>
    <div class="clientBenefits">
        <h2>The Broker Benefit</h2>
        <p>If you don’t have a broker, don’t worry. We will connect you to our brokers and their wealth of knowledge and experience. Don’t forget to rate your broker. Getting the best broker can be as important as getting the best payment processor.
        </p>

        <table class="table">
            <tr>
                <td>
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </td>
                <td class='table-text'>
                    <span>Seamless Experience</span>
                </td>
                <td>
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </td>
                <td class='table-text'>
                    <span>Phone, text, or email support</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </td>
                <td class='table-text'>
                    <span>One on one support </span>
                </td>
                <td>
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </td>
                <td class='table-text'>
                    <span>Help with integration</span>
                </td>
            </tr>
        </table>
        <table class="responsive-table">
            <tr>
                <td>
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </td>
                <td>
                    <span>Seamless Experience</span>
                </td>

            </tr>
            <tr>
                <td>
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </td>
                <td>
                    <span>Phone, text, or email support</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </td>
                <td>
                    <span>One on one support </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </td>
                <td>
                    <span>Help with integration</span>
                </td>
            </tr>
        </table>

    </div>
</div>

<div class="sb-background">
    <div class="self-broker">
        <div class="sb-content">
            <h2>Become your own Broker!</h2>
            <p>Become your own broker today and not only save on fees, but get paid for every transaction you run! Bring on your own clients and get paid even more!</p>
        </div>
        <a href="#hero"><button class='sign-up-btn' id="sb-btn">Sign Up</button></a>
    </div>
</div>
</div>

<div class="faq">
    <h2>Frequently Asked Questions</h2>
    <div class="box shadow-lg">
        <img class='logoimg' src="{{asset('img/rebrand/Logo.png')}}" alt="">
        <hr>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Is the onboarding process of a client difficult?
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        No! The client simply needs to submit 1 simple application and integrate 1 simple plugin and they can get started processing.
                        The more documentation and information submitted by the clients the more processing options will become available to them.
                        Help your client unlock the best rates out there by answering questions they may have through the application and integration process!
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How many clients am I able to have?
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        There are no limits to the number of clients you can have, just ensure you are able to manage all of your clients' needs in a timely manner.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Do I have to have development knowledge to understand the plugin integration?
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        Previous development knowledge is not required, but helpful.
                        It is easy to learn the plugin integration process and be able to help your client through set up.
                        If you have any questions there will be a tech team available to reach out to for questions.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What if I don’t know the answer to a client’s question?
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        We will have dedicated consultants that you can contact in case you encounter a question that you can not answer.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            What are my responsibilities as a broker?
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                        Educate: be able to explain terms, risks, and costs to your clients effectively<br>
                        Manage: ensure you are able to manage all of your clients and their needs efficiently.<br>
                        Help: clients with application questions, integration issues, securing additional processors<br>
                        Customer support: answer questions and train clients through the life of their account

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Can I lose a client?
                        </a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">
                        With the right pricing, personality, and service...NO.<br>

                        However, clients do have the freedom to change brokers at any time.
                        So keep your pricing competitive, your knowledge sharp and you communication consistent and you’ll be sure to retain your clients.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="cta-card" id="joinCard">
        <div class="card-inner" id="joinCard-inner">
            <h3>Interested in Becoming a <strong>Client?</strong></h3>
            <p>Join Endelos now and start <br>processing today!</p>
        </div>
        <a href="/join" class="sign-up-btn">Join Now</a>
    </div>

    <div class="cta-card" id="signupCard">
        <div class="card-inner" id="signupCard-inner">
            <h3>Interested in Becoming a <strong>Broker?</strong></h3>
            <p>Sign up today and someone from our team will contact you shortly!</p>
        </div>
        <a href="#hero" class="sign-up-btn">Sign Up</a>
    </div>

</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
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