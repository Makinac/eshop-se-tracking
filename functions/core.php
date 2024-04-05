<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();


$host = 'localhost';
$dbname = 'eshop';
$username = 'web';
$password = 'password';
$charset = 'utf8mb4'; 

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

class user {
    function create($email, $password) {
        global $pdo;

        $data = array();
        $details_data = json_encode($data); 

        $data = [
            'verified' => 0,
            'verifiedcode' => generateRandomString(16)
        ];
        $verification_data = json_encode($data);

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);


        $sql = "INSERT INTO users (email, password, contactDetails, verification) VALUES (:email, :password, :contactDetails, :verification)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
        $stmt->bindParam(':contactDetails', $details_data, PDO::PARAM_STR);
        $stmt->bindParam(':verification', $verification_data, PDO::PARAM_STR);
        $stmt->execute();
    }

    function createSession($id) {
        global $pdo;

        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['user'] = [
            'id' => $result["id"],
            'email' => $result["email"],
            'contactDetails' => json_decode($result["contactDetails"]),
            'verification' => json_decode($result["verification"])
        ];
    }

    function verifyAccount($id) {
        global $pdo;

        $data = [
            'verified' => 1
        ];
        $verification_data = json_encode($data);

        $sql = "UPDATE users SET verification = :verification WHERE id = :id ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->bindParam(':verification', $verification_data, PDO::PARAM_STR);
        $stmt->execute();
    }

    function login($email, $password) {
        global $pdo;
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $stored_password = $user['password'];
            
            if (password_verify($password, $stored_password)) {
                $this->createSession($user['id']);
                return $user;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function logout() {
        unset($_SESSION['user']);
        header('Location: index.php');
        die();
    }
}

class cart {
    function addItem($id) {
        global $pdo;

        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $product_id = $result["id"];

        if(isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['count']++;
            $_SESSION['cart'][$product_id]['priceTotal'] = $_SESSION['cart'][$product_id]['count'] * $result['price'];
        } else {
            $_SESSION['cart'][$product_id] = [
                'id' => $result["id"],
                'name' => $result["name"],
                'price' => $result["price"],
                'photo' => $result["photo"],
                'count' => 1,
                'priceTotal' => $result["price"],
            ];
        }
    }

    function clear(){
        $_SESSION['cart'] = array();
    }

    function clearItem($id) {
        if(isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
        }
    }
}

class checkout {
    function start($shipping, $payment){
        $_SESSION['checkout'] = [
            'products' => $_SESSION['cart']
        ];

        $this->getShiping($shipping);
        $this->getPayment($payment);

        header("location: checkout.php");
    }

    function getShiping($type){
        switch($type){
            case "evzen":
                $_SESSION['checkout']["shipingType"] = "Evžen to donese";
                $_SESSION["checkout"]["shipingPrice"] = "0";
                break;
            case "ceskaPosta":
                $_SESSION['checkout']["shipingType"] = "Česká pošta";
                $_SESSION["checkout"]["shipingPrice"] = "1500";
                break;
            case "dpd":
                $_SESSION['checkout']["shipingType"] = "DPD";
                $_SESSION["checkout"]["shipingPrice"] = "500";
                break;
            case "emil":
                $_SESSION['checkout']["shipingType"] = "emil";
                $_SESSION["checkout"]["shipingPrice"] = "5000";
                break;
        }
    }

    function getPayment($type){
        switch($type){
            case "okno":
                $_SESSION['checkout']["paymentType"] = "Hodím to do okna";
                break;
            case "ucet":
                $_SESSION['checkout']["paymentType"] = "Pošlu to na učet";
                break;
            case "ledvina":
                $_SESSION['checkout']["paymentType"] = "Ledvinou";
                break;
            case "paypal":
                $_SESSION['checkout']["paymentType"] = "PayPal";
                break;
        }
    }
}
?>