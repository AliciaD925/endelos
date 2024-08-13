@extends('admin.website_rebrand.app')

@section('title')
About Page
@endsection

@section('description')
Learn more about Endelos. 
@endsection

@section('css')
<link rel="stylesheet" href="{{asset("rebrand_css/about.css")}}">
<link rel="stylesheet" href="{{asset("rebrand_css/responsiveAbout.css")}}">
@endsection

@section('content')
<div class="hero section">
    <div class="definition">
        <h2>Capitalism</h2>
        <h3><i>/"kăp′ĭ-tl-ĭz″əm/</i></h3>
        <h3><i>noun</i></h3>
        <p>An economic and political system in which a country's trade and industry are controlled by private owners for profit</p>
    </div>

    <div class="story">
        <h2>Our Story</h2>
        <p>
            We hate payment processing frees. It is a hidden tax that you can't fight.
            Our founders have battled the Goliaths against these egregious fees and monopolistic rules for years.
            Out of each battle, determination and wisdom has led us to realize the greatest weapon society has against
            these hidden giants is
        </p>
        <p><strong>CAPITALISM</strong></p>
        <p>
            What if we helped shift control to the private owners of the companies they serve.
            What if we let the
        </p>
        <p><strong>FREE MARKET</strong></p>
        <p>
            control these runaway processing fees.<br>
            So we combined the success of Lending Tree with the flexibility of Stripe to bring a free market to payment processing, where business owners and managers take control of their processing costs.
            Now payment processors across the globe must compete for your business.
            Welcome to a new era of payment processing!
        </p>
        <h3><strong>May the best processor win!</strong></h3>
    </div>
    <div class="definition">
        <h2>Free Market</h2>
        <h3><i>/ˌfriː ˈmɑːkɪt/</i></h3>
        <h3><i>noun</i></h3>
        <p>An economic system in which prices are determined by unrestricted competition between privately owned businesss.</p>
    </div>
</div>
<div class="aboutUs">
    <!-- <img class='logoimg' src="{{asset('img/rebrand/Endelos_Logo.png')}}" alt=""> -->
    <div class="aboutSection">
        <div class="small shadow-lg">
            <h2>About Us</h2>
            <img class='logoimg' src="{{asset('img/rebrand/Logo.png')}}" alt="">
            <p>
            Endelos is the bridge that connects you, the client, to an endless number of payment processors. By having banks and payment service providers compete for your business, we do the work to get you the lowest rates and most efficient payment processing.
            <p>
            We believe that everyone deserves an equal opportunity to get the best processing rates. Even if you've been turned down for processing in the past, we're here to ensure you're connected with a processing account and can start accepting payments from your customers!

            </p>
            <p>
                With one appliaction and one integration, unlock an endless number of processing accounts.
            </p>

            <img class='stretch' src="{{asset('img/rebrand/about/example.png')}}" alt="">
        </div>
    </div>
</div>
</div>
<div class="truth">
    <h2><strong>Truth</strong> in Processing</h2>
    <p> At Endleos, we believe in Truth in Processing, similar to the Truth in Lending Act.
        We inspire to raise the bar and make truth in processing an industry standard. Institutions that provide processing should be required to be transparent about the costs, fees, and charges so that the consumer is able to comparison shop and find the best rates.
    </p><br>
    <h4>Our mandate:</h4>
    <p> We promise to promote the informed use of payment processing costs; requiring full disclosure by the processors serving you about their terms and costs in order to standardize the manner in which costs associated with payment processing are calculated and disclosed.
    </p>
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
                        <h3>"I added Endelos to my website and it seems every month a new processor offers me an even lower rate than the last."</h3>
                        <p>John Doe</p>
                    </div>
                </div>
                <div class="item">
                    <img class="d-block mx-auto" src="{{asset('img/rebrand/home/testimonialBG.png')}}" alt="Slide 2">
                    <div class="carousel-caption">
                        <h3>"I don't know who my payment processor is and I don't care as long as they get the job done.
                            What I do care about is how much it cost me.
                            I'm absolutely confident I have the loest processing pricing until the next processor offers me lower."</h3>
                        <p>John Lipsicn</p>
                    </div>
                </div>
                <div class="item">
                    <img class="d-block mx-auto" src="{{asset('img/rebrand/home/testimonialBG.png')}}" alt="Slide 3">
                    <div class="carousel-caption">
                        <h3>"I added Knox Secure to my website and it seems every month a new processor offers me an even lower rate than the last."</h3>
                        <p>Sarah Barnes</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="sections">
            <div class="section-sm">
                <p>"I added Endelos to my website and it seems every month a new processor offers me an even lower rate than the last."</p>
                <h3>-John Doe</h3>
            </div>
            <div class="section-lg">
                <p>
                    "I don't know who my payment processor is and I don't care as long as they get the job done. 
                    What I do care about is how much it cost me.
                    I'm absolutely confident I have the loest processing pricing until the next processor offers me lower."
                </p>
                <h3>-John Lipsicn</h3>
            </div>
            <div class="section-sm">
            <p>"I added Knox Secure to my website and it seems every month a new processor offers me an even lower rate than the last."</p>
            <h3>-Sarah Barnes</h3>
            </div>
        </div> -->
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
                            What types of payments can I take from my customers?
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        With just one integration, our plug-in allows you to accept multiple forms of payment from customers including,
                        but not limited to E-check, cryptocurrencies, paypal, credit cards including Visa, Mastercard, Discover, Amex and more!
                        You have the option to choose which forms of payment you want to accept. Pick just one or use them all!
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What if I have been denied processing in the past?
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        Denied by banks before? Don’t worry!
                        While one bank may not want your business, another bank will bid for it.
                        We find you banks that will compete to have your business,
                        and guarantee to get you processing at the lowest possible rate.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How many payment processors will I have access to?
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        UNLIMITED! New processors are added daily to bid on your business.
                        Once approved for a processor you will see it appear in your dashboard and be able to enable it with one simple click!
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How can I assure that I am getting the best rate?
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        When businesses are competing head-to-head with the exact same provider of services,
                        all they can compete on is price. When they do, you win!
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Do I need a broker to sign up for processing?
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                        Yes. If you were referred by a broker they will be assigned to you when you sign up with Endelos.
                        If not, Endelos will assign you one automatically.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Why do I need a broker to sign up for processing?
                        </a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">
                        Banks and payment processors refuse to provide ANY support to their clients.
                        Payment processing can be extremely complicated and your broker will help you navigate these rules and laws.
                        Brokers will help you through the entire process from application questions, to the integration of the plugin,
                        and any other questions you may have.
                        Think of them as your customer support specialist! Offering one-on-one support through phone, text or email.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSeven">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Who can I contact if I have a question about my application?
                        </a>
                    </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                    <div class="panel-body">
                        Your broker can help answer any questions you have.
                        Although payment processors almost never communicate with their clients, your broker can share their wealth of knowledge to help you navigate this process smoothly.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingEight">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Does the integration require a developer or knowledge of coding?
                        </a>
                    </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                    <div class="panel-body">
                        Endelos has created a robust plugin that requires ONE simple integration.
                        Additionally, we have created plugins with both WordPress and Magento platforms making integration for these sites even easier.
                        While it is helpful to have a developer for integration, if you need one your broker will help connect you to the right talent.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="join">
    <p>Become a client <br> and start processing payments today!</p>
    <a href="join" class="btn btn-primary">Join Now</a>
</div>
@endsection


@section('script')
<script>
    $(document).ready(function() {
        $('.carousel').carousel({
            // interval: 2000
        })
    });
</script>
@endsection