<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
//require_once '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = getenv("TWILIO_ACCOUNT_SID");
$token = getenv("TWILIO_AUTH_TOKEN");
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("+254797578553", // to
                           [
                               "body" => "This will be the body of the new message!",
                               "from" => "+15098347154"
                           ]
                  );

print($message->sid);
