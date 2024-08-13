<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Endelos | @yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("rebrand_css/w3.css")}}">
    <link rel="stylesheet" href="{{asset("rebrand_css/app.css")}}">
    <link rel="stylesheet" href="{{asset("rebrand_css/responsiveApp.css")}}">   
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    @yield("css")
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BB8Z1CP1EY"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BB8Z1CP1EY');
    </script>
</head>

<body>
    <div class='app_header'>
        <div class="main-nav">
            <img src="{{asset('img/rebrand/headerlogo.png')}}" alt="Main Logo">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a href="/join" type="button" class="btn btn-link btn1 shadow">Join Now</a>
                </li>
                <li class="nav-item">
                    <a href="/login" type="button" class="btn btn-link btn2">Login</a>
                </li>
            </ul>
            <div class="topnav" id="myTopnav">
                <a href="/" class='nav-link divider'>Home</a>
                <a href="/about" class="nav-link divider">About</a>
                <a href="/brokers" class="nav-link divider">Broker</a>
                <a href="/documentation" class="nav-link divider">Documentation</a>
                <a href="" class="nav-link divider">Blog</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
    </div>
</body>
<div class=" page">
    @yield('content')
</div>

<footer>        
        <div class="table-responsive main">
            <table class="table">
                <tr>
                    <th><img src="{{asset('img/rebrand/footerlogo.png')}}" alt=""></th>
                    <th>Company</th>
                    <th>Partnerships</th>
                    <th>Support</th>
                </tr>
                <tr>
                    <td class="information">Dallas, TX</td>
                    <td>
                        <a href="/about">About Us</a>
                    </td>
                    <td>
                        <a href="/memberships">Memberships</a>
                    </td>
                    <td>
                        <a href="/documentation">Documentation</a>
                    </td>
                </tr>
                <tr>
                    <td class="information"></td>
                    <td>
                        <a href="/faq">FAQs</a>
                    </td>
                    <td>
                        <a href="/brokers">Brokers</a>
                    </td>
                    <td>
                        <a href="/docs/v1.1" target="_blank">Integration</a>
                    </td>                   
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <a href="/terms" target="_blank">Terms & Conditions</a>
                    </td>
                    <td>
                        <a href="">Account Managers</a>
                    </td>
                    <td>
                        <a href="/docs/v1.1/techdocs" target="_blank">Developers</a>
                    </td>                    
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <a href="/privacy_policy" target="_blank">Privacy Policy</a>
                    </td>
                    <td>
                    <a href="">Refer a Client</a>
                    </td>
                    <td>
                        <a href="">Contact Us</a>            
                    </td>                    
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <a href="">Endelos Blog</a>
                    </td>
                    <td>
                        <!-- <a href="">Careers</a> -->
                    </td>                  
                </tr>
            </table>
        </div>
        <!-- <div class='language'>
            <h4>Language</h4>
        </div> -->
   <div class="links">
       <div class= "footerlogo">
        <img src="{{asset('img/rebrand/Logo.png')}}" alt="Endelos Logo">
        </div>
        <div class="social-links">
            <a href="https://www.facebook.com/endelospay" target="_blank" class="fa fa-facebook"></a>
            <a href="https://www.linkedin.com/company/endelospay" target="_blank" class="fa fa-linkedin"></a>   
        </div>     
   </div>
    
    <hr>
    <div class="botRow">
        <p class='copy'>Copyright 2021 Endelos</p>
    </div>
</footer>
<script src="{{ asset('gentelella/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    $('.icon').click(function() {
        $(this).find('i').toggleClass('fa-bars fa-angle-up')
    });
</script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@yield("script")
</body>

</html>