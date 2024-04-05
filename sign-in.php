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

    if (empty($email)) {
        $errors[] = "Prosím vyplňte email.";
    }

    if (empty($password)) {
        $errors[] = "Prosím vložte heslo.";
    }

    if (empty($errors)) {
        $sql = "SELECT COUNT(*) AS email_count FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result['email_count'] > 0) {
            $user = new user();
            $result = $user->login($email, $password);
            if ($result) {
                if ($_SESSION["user"]["verification"]->verified == 0) {
                    header("location: verification.php");
                    exit;
                } else {
                    header("location: index.php");
                    exit;
                }
            } else {
                $errors[] = "Špatné heslo.";
            }
        } else {
            $errors[] = "Zadaný email neexistuje.";
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
                                        <h1 data-sr-item="sign">Přihlášení</h1>
                                        <?php if (!empty($errors)){ ?>
                                            <div class="alert" role="alert">
                                                <strong>Chyba!</strong> <?php echo $errors[0]; ?>
                                            </div>
                                        <?php } ?>
                                        <form action="sign-in.php" method="POST">
                                            <div class="row hgap-xs vgap-sm">
                                                <div class="col-12" data-sr-item="sign">
                                                    <input class="form-control" type="email" id="email" name="email" placeholder="Email"><span class="form-control-bg"></span>
                                                </div>
                                                <div class="col-12" data-sr-item="sign">
                                                    <input class="form-control" type="password" id="password" name="password" placeholder="Heslo"><span class="form-control-bg"></span>
                                                </div>
                                                <div class="col-12" data-sr-item="sign">
                                                    <button class="btn btn-md btn-block">Přihlásit se</button>
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