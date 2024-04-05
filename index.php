<?php 

require '/var/www/html/eshop/functions/core.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require '/var/www/html/eshop/builders/head.php'; ?>	
    </head>
    <body>
        
        <?php require '/var/www/html/eshop/builders/preloader.php'; ?>	
        
        
        <?php require '/var/www/html/eshop/builders/navbar.php'; ?>	
        
        <div class="content-wrap">                        
            <div>
                <div class="mpl-box-md">
                    <div class="container">
                        <div class="mpl-isotope-grid row hgap-xs vgap-md" data-sr="product" data-sr-interval="120" data-sr-duration="1200" data-sr-distance="20">
                        <?php 
                            $sql = "SELECT * FROM products";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute();
                            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($result as $product) {
                                ?>

                                
                                <div class="mpl-isotope-item col-12 col-sm-6 col-md-4" data-filters="controllers">
                                    <a class="mpl-product-item" data-sr-item=product>
                                        <span class="mpl-product-image">
                                            <span class="mpl-image">
                                                <img src="<?php echo $product["photo"] ?>" alt="">
                                            </span>
                                        </span>
                                        <span class="mpl-product-content">
                                            <a href="view.php?id=<?php echo $product["id"] ?>"><span class="mpl-product-title h4"><?php echo $product["name"] ?></span></a>
                                            <span class="mpl-price"><?php echo $product["price"] ?> Kč</span>
                                        </span>
                                        <button id="addToCartBtn" itemId="<?php echo $product["id"] ?>" class="btn btn-block btn-default">Do Košíku</button>
                                    </a>
                                </div>
                                

                                <?php
                            }
                        ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="mpl-fancybox-search mpl-fancybox-content" id="popup-search">
            <div class="container">
                <form action="#" class="mpl-fancybox-search-content">
                    <input class="form-control mpl-fancybox-search-input" type="text" name="s" placeholder="Type to Search">
                    <button class="mpl-fancybox-search-btn" type="button">
                        <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" />
                        </svg>
                    </button>
                    <div class="mpl-fancybox-search-line"></div>
                </form>
            </div>
        </div>
        
        <div class="container mpl-fancybox-sign mpl-fancybox-content" id="popup-signin">
            <div class="mpl-fancybox-sign-content">
                <h2 class="h1">Sign In</h2>
                <form action="#">
                    <div class="row hgap-xs vgap-sm align-items-center">
                        <div class="col-12">
                            <input class="form-control" type="text" id="signin_popup_login" name="signin_popup_login" placeholder="Login"><span class="form-control-bg"></span>
                        </div>
                        <div class="col-12">
                            <input class="form-control" type="password" id="signin_popup_password" name="signin_popup_password" placeholder="Password"><span class="form-control-bg"></span>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="signin_popup_rememberme" name="signin_popup_rememberme"><label class="form-check-label" for="signin_popup_rememberme">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="small">Lost Password</a>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-md btn-block">Sign In</button>
                        </div>
                        <div class="col-12"> or </div>
                        <div class="col">
                            <a href="#" class="btn btn-md btn-block btn-facebook">
                                <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.625 12C23.625 5.57812 18.4219 0.375 12 0.375C5.57812 0.375 0.375 5.57812 0.375 12C0.375 17.8022 4.62609 22.6116 10.1836 23.4844V15.3605H7.23047V12H10.1836V9.43875C10.1836 6.52547 11.918 4.91625 14.5744 4.91625C15.8466 4.91625 17.1769 5.14313 17.1769 5.14313V8.0025H15.7106C14.2669 8.0025 13.8164 8.89875 13.8164 9.81797V12H17.0405L16.5248 15.3605H13.8164V23.4844C19.3739 22.6116 23.625 17.8022 23.625 12Z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-md btn-block btn-twitter">
                                <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.533 7.11166C21.5482 7.32485 21.5482 7.53808 21.5482 7.75127C21.5482 14.2538 16.599 21.7462 7.5533 21.7462C4.76648 21.7462 2.17767 20.939 0 19.5381C0.395953 19.5837 0.776625 19.599 1.18781 19.599C3.48727 19.599 5.60405 18.8223 7.29441 17.4975C5.13197 17.4518 3.31978 16.0355 2.69541 14.0863C3 14.1319 3.30455 14.1624 3.62437 14.1624C4.06598 14.1624 4.50764 14.1015 4.91878 13.9949C2.66498 13.538 0.974578 11.5584 0.974578 9.1675V9.10661C1.62937 9.4721 2.39086 9.70052 3.19791 9.73094C1.87303 8.84767 1.00505 7.34008 1.00505 5.63449C1.00505 4.7208 1.24866 3.88324 1.67508 3.15227C4.09641 6.13703 7.73602 8.08624 11.8172 8.29947C11.7411 7.93399 11.6954 7.55331 11.6954 7.1726C11.6954 4.46191 13.8883 2.25381 16.6141 2.25381C18.0304 2.25381 19.3095 2.84772 20.208 3.80711C21.3197 3.59392 22.3857 3.18274 23.3299 2.6193C22.9643 3.76146 22.1877 4.72085 21.1674 5.32994C22.1573 5.22339 23.1167 4.94922 23.9999 4.56855C23.33 5.54313 22.4924 6.41111 21.533 7.11166V7.11166Z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-md btn-block btn-google-plus">
                                <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23 12.2719C23 18.9047 18.433 23.625 11.6885 23.625C5.22213 23.625 0 18.4312 0 12C0 5.56875 5.22213 0.375 11.6885 0.375C14.8369 0.375 17.4857 1.52344 19.5264 3.41719L16.3451 6.45938C12.1834 2.46563 4.44447 5.46563 4.44447 12C4.44447 16.0547 7.70123 19.3406 11.6885 19.3406C16.3168 19.3406 18.0512 16.0406 18.3246 14.3297H11.6885V10.3312H22.8162C22.9246 10.9266 23 11.4984 23 12.2719Z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-12"> Are you new? <a href="sign-up.html">Sign Up</a>
                        </div>
                    </div>
                </form>
            </div>
            <button type="button" class="mpl-fancybox-close" data-fancybox-close>
                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6L18 18" />
                </svg>
            </button>
        </div>
        
        <div class="container mpl-fancybox-cart mpl-fancybox-content" id="popup-cart">
            <div class="mpl-fancybox-cart-content">
                <h2 class="h1 text-center">Cart</h2>
                <div class="row justify-content-between vgap">
                    <div class="col-12">
                        <table class="table mpl-table-shop mpl-table-shop-sm mpl-table-responsive mb-0">
                            <tbody>
                                <tr class="mpl-table-product mpl-table-product-sm">
                                    <td class="mpl-table-image">
                                        <a href="shop-product.html" class="mpl-table-product-image">
                                            <span class="mpl-image">
                                                <img src="assets/images/dark/product-260x200.jpg" alt="">
                                            </span>
                                        </a>
                                    </td>
                                    <td class="mpl-table-name" data-title="Product">
                                        <a href="shop-product.html" class="mpl-table-product-title h5">Gamepad MPL</a>
                                        <span class="mpl-price"> $120.00 </span>
                                    </td>
                                    <td class="mpl-table-remove">
                                        <a href="#" class="mpl-table-product-remove">
                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6L6 18M6 6L18 18" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="mpl-table-product mpl-table-product-sm">
                                    <td class="mpl-table-image">
                                        <a href="shop-product.html" class="mpl-table-product-image">
                                            <span class="mpl-image">
                                                <img src="assets/images/dark/product-2-260x200.jpg" alt="">
                                            </span>
                                        </a>
                                    </td>
                                    <td class="mpl-table-name" data-title="Product">
                                        <a href="shop-product.html" class="mpl-table-product-title h5">Headphones MPL</a>
                                        <span class="mpl-price"> $84.99 </span>
                                    </td>
                                    <td class="mpl-table-remove">
                                        <a href="#" class="mpl-table-product-remove">
                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6L6 18M6 6L18 18" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-between h5 mb-0">
                            <span>Subtotal:</span>
                            <span>$70.00</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row hgap-xs vgap-xs">
                            <div class="col">
                                <a href="cart.html" class="btn btn-block btn-default">View cart</a>
                            </div>
                            <div class="col">
                                <a href="checkout.html" class="btn btn-block btn-default">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="mpl-fancybox-close" data-fancybox-close>
                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6L18 18" />
                </svg>
            </button>
        </div>

        <?php require '/var/www/html/eshop/builders/scripts.php'; ?>
        
        
        <script src="assets/vendor/@popperjs/core/dist/umd/popper.min.js?v=2.11.0"></script>
        
        <script src="assets/vendor/scrollreveal/dist/scrollreveal.min.js?v=4.0.9"></script>
        
        <script src="assets/vendor/animejs/lib/anime.min.js?v=3.2.1"></script>
        
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js?v=5.1.3"></script>
        
        <script src="assets/vendor/jarallax/dist/jarallax.min.js?v=1.12.8"></script>
        
        <script src="assets/vendor/swiper/swiper-bundle.min.js?v=6.8.2"></script>
        
        <script src="assets/vendor/fancybox/dist/jquery.fancybox.min.js?v=3.5.7"></script>
        
        <script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js?v=2.2.0"></script>
        
        <script src="assets/vendor/moment/min/moment.min.js?v=2.29.1"></script>
        <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js?v=0.5.34"></script>
        
        <script src="assets/vendor/slider-revolution/js/jquery.themepunch.tools.min.js?v=5.4.8"></script>
        <script src="assets/vendor/slider-revolution/js/jquery.themepunch.revolution.min.js?v=5.4.8"></script>
        
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js?v=4.1.4"></script>
        
        <script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js?v=3.0.6"></script>
        
        <script src="assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js?v=2.3.1"></script>
        
        <script src="assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js?v=4.3.0"></script>
        
        <script src="assets/vendor/bootstrap-validator/dist/validator.min.js?v=0.11.9"></script>
        
        <script src="assets/js/monsterplay.min.js?v=1.2.0"></script>
        <script src="assets/js/monsterplay-init.js?v=1.2.0"></script>
        
    </body>
</html>