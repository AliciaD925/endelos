@extends('admin.website_rebrand.app')

@section('title')
Join Now
@endsection

@section('description')
Join now and become a client with Endelos today. 
@endsection

@section('css')
<link rel="stylesheet" href="{{asset("rebrand_css/join.css")}}">
<link rel="stylesheet" href="{{asset("rebrand_css/responsiveJoin.css")}}">
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
<div class="joinPage">
    <div class="joinIntro">
        <h1>JOIN</h1>
        <img class='logoimg' src={{asset('img/rebrand/Logoimg_name.png')}} alt="">
        <h2>and Start Processing TODAY!</h2>
    </div>
    <form action="client-store" method="post">
    @csrf
        <div class="form-group">
        @if($error = session("error"))
        <div class="alert alert-danger alert-dismissible fade in" role="alert" style="width: 100%;">

            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong> {{$error}} </strong>
        </div>

        @endif
        @if($msg = session("message"))
        <div class="alert alert-success alert-dismissible fade in" role="alert" style="width: 100%;">

            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong> {{$msg}} </strong>
        </div>

        @endif
            <input type="text" id="first_name" placeholder='First Name' name="template-contactform-first-name" required>
            <input type="text" id="last_name" placeholder='Last Name' name="template-contactform-last-name" required>
            <input type="email" id="email" placeholder='Email'  name="template-contactform-business-email" required>
            <input type="password" id="password" placeholder='Password' name="template-contactform-password" required>
            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" style="display: none;"/>
            <!-- @if(getenv('NOCAPTCHA_SITEKEY'))
                <div class="col_full">
                    <div class="g-recaptcha" data-sitekey="{{getenv('NOCAPTCHA_SITEKEY')}}"></div>
                </div>	
            @endif -->
            
            <!-- <div class="col_full">{!! app('captcha')->display() !!}</div> -->
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
            <button type='submit' id="join" class='joinBtn'>Join Now</button>
        </div>
    </form>
</div>
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