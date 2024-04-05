<?php
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest' || !empty($_SERVER['HTTP_REFERER']) === false) {
    header('HTTP/1.0 403 Forbidden');
    exit('Přístup odepřen');
}

$itemId = isset($_POST['itemId']) ? $_POST['itemId'] : '';

require '/var/www/html/eshop/functions/core.php';

$cart = new cart();
$cart->clearItem($itemId);  

$returnData = array();
$returnData["cart"] = $_SESSION["cart"];

$totalPrice = 0;

foreach($_SESSION['cart'] as $product) {
    $totalPrice += $product['priceTotal'];
}

$returnData["totalPrice"] = $totalPrice;

header('Content-Type: application/json');
echo json_encode([$returnData]);