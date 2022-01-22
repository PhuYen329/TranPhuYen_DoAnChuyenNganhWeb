<?php
//header('Content-type: text/html; charset=utf-8');
define('File',  dirname(__DIR__));
$config = file_get_contents(File.'/config.json');
$array = json_decode($config, true);

include  File."/common/helper.php";


$endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";




if (!empty($_POST)) {
    $partnerCode = "MOMOBKUN20180529";
    $accessKey = "klm05TvNBzhg7h7j";
    $secretKey ="at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa";
    $orderInfo = "Thanh toán qua MoMo";
    $amount = "".$_SESSION['SumMoney'];
    $orderId = time() ."";
    $dd="mvc/Views/momo/basic.example/paymomo";
    //$returnUrl = $a."/".$dd."/result.php";
    $returnUrl = $a."/Home/cart";
    $notifyurl = $a."/".$dd."/ipn_momo.php";
    // Lưu ý: link notifyUrl không phải là dạng localhost
    $extraData = "merchantName=MoMo Partner";
    //  $partnerCode = $_POST["partnerCode"];
    //  $accessKey = $_POST["accessKey"];
    //  $serectkey = $_POST["secretKey"];
    //  $orderId = $_POST["orderId"];  //Mã đơn hàng
    //  $orderInfo = $_POST["orderInfo"];
    //  $amount = $_POST["amount"];
    //  $notifyurl = $_POST["notifyUrl"];
    //  $returnUrl = $_POST["returnUrl"];
    //  $extraData = $_POST["extraData"];

    $requestId = time() . "";
    $requestType = "captureMoMoWallet";
    //$extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
    //before sign HMAC SHA256 signature
    $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&returnUrl=" . $returnUrl . "&notifyUrl=" . $notifyurl . "&extraData=" . $extraData;
    $signature = hash_hmac("sha256", $rawHash, "at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa");
    $data = array('partnerCode' => $partnerCode,
        'accessKey' => $accessKey,
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'returnUrl' => $returnUrl,
        'notifyUrl' => $notifyurl,
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature);
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json

    //Just a example, please check more in there

    //header('Location: ' . $jsonResult['payUrl']);
    echo "<script type='text/javascript'>;window.location.href = '".$jsonResult['payUrl']."';</script>";
        
}
?>
