<?php 

require '/var/www/html/eshop/functions/core.php';

if (!$_SESSION["user"]) {
    header("location: index.php");
    exit;
}

if ($_SESSION["user"]["verification"]->verified != 0) {
    header("location: index.php");
    exit;
}

$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = htmlspecialchars($_POST['code']);

    if (empty($code)) {
        $errors[] = "Prosím vložte váš kód.";
    }

    if ($code != $_SESSION["user"]["verification"]->verifiedcode) {
        $errors[] = "Prosím vložte platný kód.";
    }

    if (empty($errors)) {
        $user = new user();
        $user->verifyAccount($_SESSION["user"]["id"]);
        $user->createSession($_SESSION["user"]["id"]);
        header("location: index.php");
        exit;
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
                                        <h1 data-sr-item="sign">Ověření</h1>
                                        <?php if (!empty($errors)){ ?>
                                            <div class="alert" role="alert">
                                                <strong>Chyba!</strong> <?php echo $errors[0]; ?>
                                            </div>
                                        <?php } ?>
                                        <form action="verification.php" method="POST">
                                            <div class="row hgap-xs vgap-sm">
                                                <div class="col-12" data-sr-item="sign">
                                                    <input class="form-control" type="text" id="code" name="code" placeholder="Ověřovací kód"><span class="form-control-bg"></span>
                                                </div>
                                                <div class="col-12" data-sr-item="sign">
                                                    <button class="btn btn-md btn-block">Ověřit</button>
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