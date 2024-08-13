@extends('admin.website_rebrand.app')

@section('title')
FAQs
@endsection
@section('description')
This is a list of the most frequently asked questions from our clients and brokers. 
@endsection

@section('css')
<link rel="stylesheet" href="{{asset("rebrand_css/faq.css")}}">
<!-- <link rel="stylesheet" href="{{asset("rebrand_css/responsiveFaq.css")}}"> -->
@endsection

@section('content')
<div class="faq">
    <h2>Frequently Asked Questions</h2>
    <div class="box shadow-lg">
        <img class='logoimg' src="{{asset('img/rebrand/Logo.png')}}" alt="">
        <hr>
        <div>
            <h3>F.A.Q.s from our clients:</h3>
        </div>
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
        <hr>
        <div>
            <h3>F.A.Q.s from our brokers:</h3>
        </div>
    <!-- <div class="box shadow-lg"> -->
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
@endsection

@section('script')
@endsection