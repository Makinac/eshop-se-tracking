<?php 

require '/var/www/html/eshop/functions/core.php';

if ($_SESSION["user"]) {
    header("location: index.php");
    exit;
}

$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "";
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : "";
    $confirm_password = isset($_POST['confirm_password']) ? htmlspecialchars($_POST['confirm_password']) : "";
    

    if (empty($email)) {
        $errors[] = "Prosím vyplňte email.";
    }

    if (empty($password)) {
        $errors[] = "Prosím vložte heslo.";
    }

    if(strlen($password) < 6) {	
        $errors[] = "Vaše heslo musí obsahovat aspoň 6 znaků.";
    }

    if (empty($confirm_password)) {
        $errors[] = "Prosím vložte potvrzovací heslo.";
    }

    if ($password != $confirm_password) {
        $errors[] = "Vaše hesla se neshodují.";
    }

    if (!isset($_POST['signup_agreement']) || $_POST['signup_agreement'] !== 'on') {
        $errors[] = "Prosím zaškrtněte políčko že souhlasíte.";
    }

    if (empty($errors)) {
        $sql = "SELECT COUNT(*) AS email_count FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result['email_count'] > 0) {
            $errors[] = "Zadaný email již existuje.";
        } else {
            $user = new user();
            $user->create($email, $password);
            $user->createSession($email);
            header("location: verification.php");
        }
    }
}

?>	
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require '/var/www/html/eshop/builders/head.php'; ?>	
    </head>
    <body>
        
        <?php require '/var/www/html/eshop/builders/preloader.php'; ?>	
        
        <div class="content-wrap">
            <div class="mpl-navbar-mobile-overlay"></div>
            <div>
                <section class="mpl-banner mpl-banner-top mpl-banner-parallax">
                    <div class="mpl-banner-content mpl-box-sm">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                    <div class="mpl-sign-form" data-sr="sign" data-sr-interval="100" data-sr-duration="1000" data-sr-distance="20">
                                        <h1 data-sr-item="sign">Registrace</h1>
                                        <?php if (!empty($errors)){ ?>
                                            <div class="alert" role="alert">
                                                <strong>Chyba!</strong> <?php echo $errors[0]; ?>
                                            </div>
                                        <?php } ?>
                                        <form action="sign-up.php" method="POST">
                                            <div class="row hgap-xs vgap-sm">
                                                <div class="col-12" data-sr-item="sign">
                                                    <input class="form-control" type="email" id="email" name="email" placeholder="Email"><span class="form-control-bg"></span>
                                                </div>
                                                <div class="col-12" data-sr-item="sign">
                                                    <input class="form-control" type="password" id="password" name="password" placeholder="Heslo"><span class="form-control-bg"></span>
                                                </div>
                                                <div class="col-12" data-sr-item="sign">
                                                    <input class="form-control" type="password" id="confirm_password" name="confirm_password" placeholder="Znovu heslo"><span class="form-control-bg"></span>
                                                </div>
                                                <div class="col-12" data-sr-item="sign">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="signup_agreement" name="signup_agreement"><label class="form-check-label" for="signup_agreement">Dávám souhlas na prodej mých orgánu.</label>
                                                    </div>
                                                </div>
                                                <div class="col-12" data-sr-item="sign">
                                                    <button class="btn btn-md btn-block">Registrovat</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                                
            </div>
        </div>

        <?php require '/var/www/html/eshop/builders/scripts.php'; ?>	
        
    </body>
</html>