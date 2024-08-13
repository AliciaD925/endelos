@extends('admin.website_rebrand.app')

@section('title')
Documentation
@endsection
@section('description')
This page includes documentation about Endelos, including integration of the plugin and technical documentation. 
@endsection

@section('css')
<link rel="stylesheet" href="{{asset("rebrand_css/documentation.css")}}">
<link rel="stylesheet" href="{{asset("rebrand_css/responsiveDoc.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')

<div class="documentation page">
    <div class="docnav" id="nav_doc">
        <h3 class="heading">Documentation</h3>
        <a href="#plugin">Plugin</a><span class="menu-divider">|</span>
        <a href="#api">API</a><span class="menu-divider">|</span>
        <a href="#testing">Testing</a><span class="menu-divider">|</span>
        <a href="#errors">Errors</a><span class="menu-divider">|</span>
        <a href="#refunds">Refunds</a><span class="menu-divider">|</span>
        <a href="#chargebacks">Chargebacks</a><span class="menu-divider">|</span>
        <a href="#chargebacks">Virtual Terminal</a><span class="menu-divider">|</span>
        <a href="#chargebacks">E-Checks</a><span class="menu-divider">|</span>
        <a href="/docs/v1.1">Integration Documentation</a><span class="menu-divider">|</span>
        <a href="/docs/v1.1/techdocs"> Technical Documentation</a>
        </a>
    </div>
    <div class="mobileDocNav">
        <p>
            <a class="heading" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu">
                Documentation
            </a>
        </p>
        <div class="collapse" id="collapseMenu">

            <a href="#plugin">Plugin</a><span class="menu-divider">|</span>
            <a href="#api">API</a><span class="menu-divider">|</span>
            <a href="#testing">Testing</a><span class="menu-divider">|</span>
            <a href="#errors">Errors</a><span class="menu-divider">|</span>
            <a href="#refunds">Refunds</a><span class="menu-divider">|</span>
            <a href="#chargebacks">Chargebacks</a><span class="menu-divider">|</span>
            <a href="#chargebacks">Virtual Terminal</a><span class="menu-divider">|</span>
            <a href="#chargebacks">E-Checks</a><span class="menu-divider">|</span>
            <a href="/docs/v1.1">Integration Documentation</a><span class="menu-divider">|</span>
            <a href="/docs/v1.1/techdocs"> Technical Documentation</a>

        </div>
    </div>

    <div class="hero">
        <img class='logoimg' src="{{asset('img/rebrand/Logoimg_name.png')}}" alt="">
        <div class="intro">
            <p style="font-size:18px;">
                We built our platform for developers who value their time to delivery and owners that elect to make business decisions, not coding decisions.<br> Invite your developer to integrate into our robust and flexible platform or ask one of our engineers to do it for you.
            </p>
        </div>
    </div>

    <div class="main">
        <div class="sectionA">
            <div id="plugin">
                <h3>Endelos Plugin</h3>
                <p>
                    It takes just ONE API integration to set up our unique, universal checkout system on your site. <br>
                    From there, it's simple to customize the plugin to fit your needs. Select the forms of payment you wish to accept from your customers.
                </p>
                <p>With our plugin you can accept the following payments from customers:</p>
                <ul>
                    <li>E-Check</li>
                    <li>PayPal</li>
                    <li>Credit Cards</li>
                </ul>
                <p> After integration, we've made it easy to customize the plugin to adapt to your unique payment processing needs.</p>
                <p>Additionally, we have created plugins built for both WordPress and Magento sites, that make integration even easier. </p>
                <div class="Logos">
                    <p> Wordpress Logo </p>


                    <p> Magento Logo</p>
                </div>
            </div>
        </div>
        <div class="sectionB">
            <div id="api">
                <h3>API Keys</h3>
                <p>Endelos uses two types of API keys to allow access to the API for plugin integration.
                <p>
                <ul>
                    <li>API Key</li>
                    <li>API secret Key</li>
                </ul>
                </p>
                <p>You will be given access to these API keys when you become a client with Endelos. You can view them within your client dashboard.</p>

                <p> Endelos expects for the API key and Secret Key to be included in all API requests to the server in a header that looks like the following:<br>
                    <code>Authorization: API_key: API_Secret</code><br><br>
                    # With shell, you can just pass the correct header with each request<br>
                    <code>curl "api_endpoint_here"<br>-H "Authorization: API_key: API_Secret"</code>
                </p>
            </div>
        </div>
        <div class="sectionA">
            <div id="testing">
                <h3>Testing</h3>
                <p>Take advantage of the test mode capability offered, to ensure that the plugin is set up successfully before going live. In addition to using test mode to familiarize yourself with how the plugin works, you can also use it to:
                <ul>
                    <li>Test failed transactions</li>
                    <li>Practice voiding transactions</li>
                    <li>Learn how to issue a refund</li>
                </ul>
                </p>

                <p> You can easily switch your account from test mode to live mode from your client dashboard.
                    Go to Settings from the client dropdown menu in the dashboard, then choose which mode you want the account to be.
                    You will only view data that matches your selected mode.
                    <br>
                    <b>Please Note:</b>
                    Your API keys/secrets/tokens will not be changed when switching between test and live mode.
                </p>
                <p><b> Test Cards</b><br>
                    Endelos will provide test card details that you can input as test data to ensure that you have set up the plugin properly and can successfully run transactions.</p>
            </div>
        </div>
        <div class="sectionB">
            <div id="errors">
                <h3>Payment Declines and Errors</h3>
                <h4>Transaction declines:</h4>
                <div class="error-body">
                    <p>Transaction errors occur when a payment gets declined by the cardholder’s issuing bank. The card issuer returns the declined transaction to us and we share the response with you. The customer will see a message that the transaction was unsuccessful, the reason why if applicable and what they should do next (i.e. retry the payment). <br><br>
                        Examples of card transaction declines:<br>
                        Incorrect information entered by the customer (card number, CVV, zip code)<br>
                        Insufficient funds
                    </p>
                </div>
                <h4>Limit Errors:</h4>
                <div class="error-body">
                    <p>Limits on your account are set by Endelos based on your membership tier and types of enabled processors. If a payment is declined because a limit amount is not met, the most common solution is that you should request a limit increase or enable more processing on your account. In an event of a decline due to limits, the customer will receive a response that the transaction has been unsuccessful.<br><br>
                        <!-- Examples of common errors and responses: -->
                    </p>
                </div>
                <h4>Processor Errors:</h4>
                <div class="error-body">
                    <p>Sometimes an error happens once the payment reaches the processor. The processor will return a response to us with the reason for the failure. When this happens Endelos will provide you a reason that the error has occurred and what you can do to resolve the issue, if applicable. In the event of processor declines, we will report as much information about the decline as we receive from the processor and the solution you can take. The customer will see a response that the payment was unsuccessful, and what to do next if applicable.<br><br>
                        <!-- Examples of common errors and responses: -->
                    </p>
                </div>
                <h4>Technical Errors </h4>
                <div class="error-body">
                    <p>The most common technical errors occur during integration of the plugin. When a technical error such as “ API key not configured”, you will receive a response back with what went wrong. Most of these errors should be caught and resolved before processing live payments. In the event that you can not resolve the issue on your own, you should contact your broker for technical support.<br><br>
                        <!-- Examples of common errors and responses: -->
                    </p>
                </div>


                <!-- <p><b>A list of our common errors, attached codes and response messages can be found here:
                        <link to error page>Link to error page</link>
                    </b>
                </p> -->
            </div>
        </div>

        <div class="sectionA">
            <div id="refunds">
                <h3>Refunds and Voids</h3>
                <p>Endelos has made processing refunds and voids for transaction simple. Refunds and voids can both be easily handled by you, within the client dashboard. Simply go to Transactions in the dashboard menu and find the transaction you wish to issue a void or refund to. When you click on the transaction ID you will see buttons in the top right corner for both a “Void” and “Refund”, click on the desired action.</p>
            </div>
        </div>

        <div class="sectionB">
            <div id="chargebacks">
                <h3>Chargebacks</h3>
                <p>Chargebacks occur when a customer disputes a transaction with their bank. In the case that this happens, we are here to help alert you of a chargeback as soon as possible. You have the option to enable the chargeback alert system on your account. If you choose to enable this option you will receive a notification email when a chargeback has occurred and payment has been refunded. </p>
            </div>
        </div>

        <div class="sectionA">
            <div id="vTerminal">
                <h3>Virtual Terminal</h3>
                <p>When you become a client with Endelos you will have access to the virtual terminal feature. This allows you to manually process transactions on the customer’s behalf. Just enter the transaction information and billing details in order to process a payment.</p>
            </div>
        </div>

        <div class="sectionB">
            <div id="echecks">
                <h3>E-Checks and Printing</h3>
                <p>Accepting E-checks is one way you can start accepting payments from customers immediately when you sign up with Endelos.<br>
                    In addition to accepting E-checks as a payment type you also have the ability to print the checks on either plain paper or check paper. Further instructions will be provided in your dashboard when you activate and enable E-check after you sign up!
                </p>
            </div>
        </div>

        <div class="sectionA">
            <div class="documentation">
                <h3>Integration Documentation</h3>
                <p>
                    See our plugin integration documentation here: <a href="/docs/v1.1">Integration Documentation</a>
                </p>
            </div>

            <div class="developers">
                <h3>For Developers</h3>
                <p>
                    See our technical documentation for integration here: <a href="/docs/v1.1/techdocs"> Technical Documentation</a>
                </p>
                <h4>Supported Languages</h4>
                <p>Shell, Ruby, Php and Python</p>
            </div>
        </div>
    </div>

    <div class="join">
        <h3>One Integration, Endless Processors</h3>
        <a href="join" class='btn btn-primary'>Join Now</a>
    </div>
    @endsection