@extends('admin.website_rebrand.app')

@section('css')
<link rel="stylesheet" href="{{asset("rebrand_css/errors.css")}}">
<link rel="stylesheet" href="{{asset("rebrand_css/responsiveErrors.css")}}">
@endsection

@section('content')

<div>
    <h2>Errors</h2>
    <table class="errors">
        <thead>
            <tr>
                <th>Error Code</th>
                <th>Error Message</th>
                <th>Message to Customer</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id='4001'>4001</td>
                <td>
                    <h4>Invalid card number given</h4>
                    <p><b>Solution:</b> Customer should run transaction using the correct card number</p>
                </td>
            </tr>
            <tr>
                <td id='4002'>4002</td>
                <td>Invalid service response</td>
                <td>The customer has canceled the transaction before it was processed </td>
            </tr>
            <tr>
                <td id='5003'>5003</td>
                <td>Transaction amount is underneath the minimum limit</td>
                <td>Customer should run transaction for higher amount</td>
            </tr>
            <tr>
                <td id='5004'>5004</td>
                <td>Transaction amount is over the limit for a single transaction</td>
                <td>Customer should run transaction for lower amount</td>
            </tr>
            <tr>
                <td id='5005'>5005</td>
                <td>Processor's daily limit hit, please wait until 12:00 AM EST for it to reset</td>
                <td>Retry again the next day, enable more processing in order to avoid this issue</td>
            </tr>
            <tr>
                <td id='5006'>5006</td>
                <td>Processor's monthly limit hit, please wait until the first of the next month for it to reset</td>
                <td>Request or enable more processing in order to avoid this issue</td>
            </tr>
            <tr>
                <td id='5007'>5013</td>
                <td>Velocity Limit, please wait 24 hours</td>
                <td>Solution for Velocity Limit</td>
            </tr>
            <tr>
                <td id='5008'>5014</td>
                <td>Refund limit reached for today, Please wait 24 hours before re-trying the refund</td>
                <td>Try refunding the transaction after 24 hours</td>
            </tr>
            <tr>
                <td id='5009'>5018</td>
                <td>Card not whitelisted, please wait for our support team to fix the error</td>
                <td>Solution for card not being whitelisted</td>
            </tr>
            <tr>
                <td id='6001'>6001</td>
                <td>Bad IP address. The IP address the transaction is coming from is bad, please try again with a different IP address.</td>
                <td>Solution</td>
            </tr>
            <tr>
                <td id='7001'>7001</td>
                <td>All gateways unavailable</td>
                <td>Solution</td>
            </tr>
            <tr>
                <td id='7002'>7002</td>
                <td>Gateway error, please wait for our support team to fix the error</td>
                <td>Solution</td>
            </tr>
            <tr>
                <td id='7003'>7003</td>
                <td>Invalid service response, please wait for our support team to fix the error</td>
                <td>Solution</td>
            </tr>
            <tr>
                <td id='8001'>8001</td>
                <td>Internal Server Error - We had a problem with our server. Try again later.</td>
                <td>Try the transaction again, if problem presists reach out to your broker</td>
            </tr>
            <tr>
                <td id='8005'>8005</td>
                <td>This is a blocked card, please use a different card</td>
            </tr>
            <tr>
                <td id=''>?</td>
                <td>Transaction flag has been raised, Please use a different card number</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection