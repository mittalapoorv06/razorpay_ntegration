<?php

require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
//     $html = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
//     <strong>Holy guacamole!</strong> You should check in on some of those fields below.
//     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
//       <span aria-hidden='true'>&times;</span>
//     </button>
//   </div>";
header("Location: success.html");
}
else
{
    // $html = "<p>Your payment failed</p>
    //          <p>{$error}</p>";
    header("Location: fail.html");
}