<?php


// webhook.php
//
// Use this sample code to handle webhook events in your integration.
//
// 1) Paste this code into a new file (webhook.php)
//
// 2) Install dependencies
//   composer require stripe/stripe-php
//
// 3) Run the server on http://localhost:4242
//   php -S localhost:4242



if($_SERVER['REQUEST_METHOD'] === "POST"){

    require_once("../resources/config.php");


// This is your Stripe CLI webhook secret for testing your endpoint locally.
$endpoint_secret = 'whsec_4dea5eca6564025e3117f6583e8a8e7dc9e98dd638d71283aa803d170567c874';

$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
$event = null;

try {
    $event = \Stripe\Webhook::constructEvent(
        $payload, $sig_header, $endpoint_secret
    );
} catch (\UnexpectedValueException $e) {
    // Invalid payload
    http_response_code(400);
    exit();
} catch (\Stripe\Exception\SignatureVerificationException $e) {
    // Invalid signature
    http_response_code(400);
    exit();
}

// Handle the event
switch ($event->type) {
    case 'payment_intent.succeeded':
//        $paymentIntent = $event->data->object;
    // ... handle other event types
    break;

    case 'charge.succeeded':

        $order_amount = $event->data->object->amount;
        $order_currency = $event->data->object->currency;
        $order_transaction = $event->data->object->balance_transaction;
        $order_status = $event->data->object->status;
        $stripe_session_id = $event->id;
        $orderQuery = query("INSERT INTO orders(stripe_session_id, order_amount, order_transaction, order_status, order_currency) VALUES('$stripe_session_id', $order_amount, '$order_transaction', '$order_status', '$order_currency' ) ");
        confirm($orderQuery);
        break;



//        ob_flush();
//        ob_start();
//        var_dump($event->data);
//        file_put_contents("event.txt", ob_get_flush());


        case 'checkout.session.completed':

            $stripe = new \Stripe\StripeClient($_ENV['STRIPE_SK_KEY']);

            $sessionItems = $stripe->checkout->sessions->allLineItems($event->data->object->id, ['limit'=> 25]);

            foreach ($sessionItems as $productOrdered){


                $product = $stripe->products->retrieve($productOrdered->price->product);

                $product_title = $product->name;
                $stripe_product_customer_id = $event->data->object->customer;
                $stripe_product_id =  $productOrdered->price->product;
                $stripe_price_id = $productOrdered->price->id;
                $product_price = $productOrdered->price->unit_amount;
                $product_quantity = $productOrdered->quantity;
                $product_total = $productOrdered->amount_total;

                $reportsQueryResult = query("INSERT INTO reports(
                    stripe_product_customer_id, 
                    stripe_product_id,
                    stripe_price_id, 
                    product_price, 
                    product_title, 
                    product_quantity, 
                    product_total) 
                    VALUES(
                           '$stripe_product_customer_id',
                           '$stripe_product_id', 
                           '$stripe_price_id', 
                            $product_price, 
                           '$product_title', 
                           $product_quantity, 
                           $product_total)");

                confirm($reportsQueryResult);

            }


            break;





    default:
        echo 'Received unknown event type ' . $event->type;
}

http_response_code(200);

}
