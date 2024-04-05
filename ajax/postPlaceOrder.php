<?php

if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest' || !empty($_SERVER['HTTP_REFERER']) === false) {
    header('HTTP/1.0 403 Forbidden');
    exit('Přístup odepřen');
}


require '/var/www/html/eshop/functions/core.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $billingCountry = $_POST["billing_country"];
    $billingFirstName = $_POST["billing_firstname"];
    $billingLastName = $_POST["billing_lastname"];
    $billingStreet = $_POST["billing_street"];
    $billingApartment = $_POST["billing_apartment"];
    $billingCity = $_POST["billing_city"];
    $billingCountryInput = $_POST["billing_country_input"];
    $billingPostcode = $_POST["billing_postcode"];
    $billingEmail = $_POST["billing_email"];
    $billingPhone = $_POST["billing_phone"];
    $billingInfo = $_POST["billing_info"];
    $saveData = isset($_POST["save_data"]) ? "Yes" : "No";
    $customerId = isset($_SESSION['user']) ? $_SESSION['user']["id"] : "0";
    $orderNumber = generateRandomString(20);

    $formData = array(
        "orderNumber" => $orderNumber,
        "billingCountry" => $billingCountry,
        "billingFirstName" => $billingFirstName,
        "billingLastName" => $billingLastName,
        "billingStreet" => $billingStreet,
        "billingApartment" => $billingApartment,
        "billingCity" => $billingCity,
        "billingCountryInput" => $billingCountryInput,
        "billingPostcode" => $billingPostcode,
        "billingEmail" => $billingEmail,
        "billingPhone" => $billingPhone,
        "billingInfo" => $billingInfo,
        "products" => json_encode($_SESSION['checkout']["products"]),
        "shipingType" => $_SESSION['checkout']["shipingType"],
        "shipingPrice" => $_SESSION['checkout']["shipingPrice"],
        "paymentType" => $_SESSION['checkout']["paymentType"]
    );
    $dataForm = json_encode($formData);


    $sql = "INSERT INTO orders (customerId, ordernumber, data, status) VALUES (:customerId, :ordernumber, :data, :status)";
    $status = "placed";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':customerId', $customerId, PDO::PARAM_STR);
    $stmt->bindParam(':ordernumber', $orderNumber, PDO::PARAM_STR);
    $stmt->bindParam(':data', $dataForm, PDO::PARAM_STR);
    $stmt->bindParam(':status', $status, PDO::PARAM_STR);
    $stmt->execute();

    if ($saveData == "Yes") {
        $formData = array(
            "billingCountry" => $billingCountry,
            "billingFirstName" => $billingFirstName,
            "billingLastName" => $billingLastName,
            "billingStreet" => $billingStreet,
            "billingApartment" => $billingApartment,
            "billingCity" => $billingCity,
            "billingCountryInput" => $billingCountryInput,
            "billingPostcode" => $billingPostcode,
            "billingEmail" => $billingEmail,
            "billingPhone" => $billingPhone,
            "billingInfo" => $billingInfo
        );
        $data = json_encode($formData);

        
        $sql = "UPDATE users SET contactDetails = :contactDetails WHERE id = :id ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $_SESSION['user']["id"], PDO::PARAM_STR);
        $stmt->bindParam(':contactDetails', $data, PDO::PARAM_STR);
        $stmt->execute();
    }

    $returnData = array();
    $returnData["data"] = $dataForm;
    $returnData["typ"] = "success";
    $_SESSION['cart'] = array();
    header('Content-Type: application/json');
    echo json_encode([$returnData]);
} else {
    $response = array("status" => "error", "message" => "Metoda požadavku není povolena");
    echo json_encode($response);
}
?>