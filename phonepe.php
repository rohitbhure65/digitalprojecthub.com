
<?php
// Replace these with your actual PhonePe API credentials

$merchantId = 'PGTESTPAYUAT'; // sandbox or test merchantId
$apiKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399'; // sandbox or test APIKEY
$redirectUrl = 'http://localhost:80/digitalprojecthub.com/payment-success.php';

// Set transaction details
$order_id = uniqid();
$name = "Tutorials Website";
$email = "info@tutorialswebsite.com";
$mobile = 9999999999;
$amount = 1540; // amount in INR
$description = 'Payment for Product/Service';


$paymentData = array(
    'merchantId' => $merchantId,
    'merchantTransactionId' => 'DPH' . rand(111111, 999999), // test transactionID
    "merchantUserId" => 'DPH' . time(),
    'amount' => $amount . '00',
    'redirectUrl' => $redirectUrl,
    'redirectMode' => "POST",
    'callbackUrl' => $redirectUrl,
    "merchantOrderId" => $order_id,
    "mobileNumber" => $mobile,
    "message" => $description,
    "email" => $email,
    "shortName" => $name,
    "paymentInstrument" => array(
        "type" => "PAY_PAGE",
    )
);


$jsonencode = json_encode($paymentData);
$payloadMain = base64_encode($jsonencode);
$salt_index = 1; //key index 1
$payload = $payloadMain . "/pg/v1/pay" . $apiKey;
$sha256 = hash("sha256", $payload);
$final_x_header = $sha256 . '###' . $salt_index;
$request = json_encode(array('request' => $payloadMain));

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $request,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "accept: application/json",
        "X-VERIFY: " . $final_x_header
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $res = json_decode($response);

    if (isset($res->success) && $res->success == '1') {
        $paymentCode = $res->code;
        $paymentMsg = $res->message;
        $payUrl = $res->data->instrumentResponse->redirectInfo->url;

        header('Location:' . $payUrl);
    }
}

?>
