<?php 

require '/var/www/html/eshop/functions/core.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $shipping = $_POST["shipping"];
    $payment = $_POST["Payment"];
    $checkout = new checkout();
    $checkout->start($shipping, $payment);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require '/var/www/html/eshop/builders/head.php'; ?>	
    </head>
    <body>
        
        <?php require '/var/www/html/eshop/builders/preloader.php'; ?>	
        
        
        <?php require '/var/www/html/eshop/builders/navbar.php'; ?>	
        
        
        <nav class="mpl-navbar mpl-navbar-mobile">
            <div class="mpl-navbar-container">
                <div class="mpl-navbar-head">
                    <a href="index.html" class="mpl-navbar-brand">
                        <img src="assets/images/logo.svg" alt="">
                    </a>
                    <a href="#" class="mpl-navbar-toggle">
                        <span></span><span></span><span></span><span></span>
                    </a>
                </div>
                <div class="mpl-navbar-body">
                    <ul class="mpl-navbar-nav">
                        <li>
                            <a href="dark-index.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                <span class="mpl-nav-link-name">Demos</span>
                            </a>
                            <div class="mpl-navbar-collapse collapse">
                                <ul class="mpl-navbar-nav">
                                    <li>
                                        <a href="dark-index.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Main </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shooter-index.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Shooter </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gamer-index.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Gamer </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="studio-index.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Studio </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="blog-grid-sidebar-right.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                <span class="mpl-nav-link-name">Blog</span>
                            </a>
                            <div class="mpl-navbar-collapse collapse">
                                <ul class="mpl-navbar-nav">
                                    <li>
                                        <a href="blog-grid-sidebar-right.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                            <span class="mpl-nav-link-name">Grid</span>
                                        </a>
                                        <div class="mpl-navbar-collapse collapse">
                                            <ul class="mpl-navbar-nav">
                                                <li>
                                                    <a href="blog-grid-sidebar-right.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">Sidebar Right </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-grid-sidebar-left.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">Sidebar Left </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-grid-no-sidebar.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">No Sidebar </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="blog-list-sidebar-right.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                            <span class="mpl-nav-link-name">List</span>
                                        </a>
                                        <div class="mpl-navbar-collapse collapse">
                                            <ul class="mpl-navbar-nav">
                                                <li>
                                                    <a href="blog-list-sidebar-right.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">Sidebar Right </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-list-sidebar-left.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">Sidebar Left </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="blog-post-gallery.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                            <span class="mpl-nav-link-name">Single Post</span>
                                        </a>
                                        <div class="mpl-navbar-collapse collapse">
                                            <ul class="mpl-navbar-nav">
                                                <li>
                                                    <a href="blog-post-gallery.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">Gallery </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-post-carousel.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">Carousel </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-post-simple.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">Simple </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="active">
                            <a href="shop-sidebar-right.html" class="mpl-nav-link mpl-nav-link-collapse" role="button">
                                <span class="mpl-nav-link-name">Shop</span>
                            </a>
                            <div class="mpl-navbar-collapse collapse">
                                <ul class="mpl-navbar-nav">
                                    <li>
                                        <a href="shop-sidebar-right.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                            <span class="mpl-nav-link-name">Products List</span>
                                        </a>
                                        <div class="mpl-navbar-collapse collapse">
                                            <ul class="mpl-navbar-nav">
                                                <li>
                                                    <a href="shop-sidebar-right.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">Right Sidebar </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-sidebar-left.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">Left Sidebar </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-no-sidebar.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">No Sidebar </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="shop-product.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Single Product </span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="cart.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Cart </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="checkout.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Checkout </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="esports-teams.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                <span class="mpl-nav-link-name">eSports</span>
                            </a>
                            <div class="mpl-navbar-collapse collapse">
                                <ul class="mpl-navbar-nav">
                                    <li>
                                        <a href="esports-teams.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Teams </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-players.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Players </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-tournaments.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Tournaments </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-matches.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Matches </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-games.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Games </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-single-team.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Single Team </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-single-player.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Single Player </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-single-tournament.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Single Tournament </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="esports-single-match.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Single Match </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="component-buttons.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                <span class="mpl-nav-link-name">Components</span>
                            </a>
                            <div class="mpl-navbar-collapse collapse">
                                <ul class="mpl-navbar-nav">
                                    <li>
                                        <a href="component-buttons.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Buttons </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-pagination.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Pagination </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-page-pagination.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Page Pagination </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-progress-bars.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Progress Bars </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-accordion.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Accordion </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-tabs.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Tabs </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-features.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Features </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-reviews.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Reviews </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-pricing.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Pricing </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-tables.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Tables </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-badges.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Badges </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-alerts.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Alerts </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-breadcrumbs.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Breadcrumbs </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-countdown.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Countdown </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-icon-box.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Icon Box </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-number-box.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Number Box </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-changelog.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Changelog </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-modal.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Modal </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-tooltips.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Tooltips </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="component-popovers.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Popovers </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="forums.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                <span class="mpl-nav-link-name">Pages</span>
                            </a>
                            <div class="mpl-navbar-collapse collapse">
                                <ul class="mpl-navbar-nav">
                                    <li>
                                        <a href="forums.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                            <span class="mpl-nav-link-name">Forum</span>
                                        </a>
                                        <div class="mpl-navbar-collapse collapse">
                                            <ul class="mpl-navbar-nav">
                                                <li>
                                                    <a href="forums.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">Forums </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="forums-topics.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">Topics </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="forums-single-topic.html" class="mpl-nav-link">
                                                        <span class="mpl-nav-link-name">Single Topic </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="sign-in.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Sign In </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sign-up.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Sign Up </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="widgets.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Widgets </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="coming-soon.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Coming Soon </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Contact Us </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Search </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="404.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">404 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blank.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Blank </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="user-activity.html" class="mpl-nav-link mpl-nav-link-collapse mpl-collapsed" role="button">
                                <span class="mpl-nav-link-name">s1mple<span class="badge badge-brand">8</span></span>
                            </a>
                            <div class="mpl-navbar-collapse collapse">
                                <ul class="mpl-navbar-nav">
                                    <li>
                                        <a href="user-activity.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Activity </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Profile </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-messages.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Messages<span class="badge badge-brand">8</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-settings.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Settings </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sign-in.html" class="mpl-nav-link">
                                            <span class="mpl-nav-link-name">Log Out </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mpl-navbar-footer">
                    <ul class="mpl-navbar-nav">
                        <li>
                            <a class="mpl-nav-link" href="#" data-fancybox data-src="#popup-search" data-touch="false" data-small-btn="false" data-toolbar="false" data-close-existing="true" data-auto-focus="true">
                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="mpl-nav-link" href="#" data-fancybox data-src="#popup-cart" data-touch="false" data-small-btn="false" data-toolbar="false" data-close-existing="true" data-auto-focus="false">
                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1H5L7.68 14.39M7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6L7.68 14.39ZM10 21C10 21.5523 9.55228 22 9 22C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C9.55228 20 10 20.4477 10 21ZM21 21C21 21.5523 20.5523 22 20 22C19.4477 22 19 21.5523 19 21C19 20.4477 19.4477 20 20 20C20.5523 20 21 20.4477 21 21Z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="mpl-nav-link" href="#" data-fancybox data-src="#popup-signin" data-touch="false" data-small-btn="false" data-toolbar="false" data-close-existing="true" data-auto-focus="true">
                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="content-wrap">
            <div class="mpl-navbar-mobile-overlay"></div>
            <div>
                <section class="mpl-banner mpl-banner-top mpl-banner-parallax mpl-banner-small">
                    <div class="mpl-image" data-speed="0.8">
                        <img src="assets/images/dark/bg-banner-1.jpg" alt="" class="jarallax-img">
                    </div>
                    <div class="mpl-banner-content mpl-box-lg">
                        <div class="container">
                            <h1 class="display-1 mb-0">Košík vole</h1>
                        </div>
                    </div>
                </section>
                <div class="mpl-box-md">
                    <div class="container">
                        <div class="row hgap-lg vgap-lg">
                            <div class="col-lg-8">
                                <table class="table mpl-table-shop mpl-table-responsive" data-sr="product" data-sr-interval="100" data-sr-duration="1000" data-sr-distance="20">
                                    <tbody id="productTableMainBody">
                                    </tbody>
                                </table>
                                <div class="row vgap mt-60">
                                    <div class="col-auto">
                                        <input class="form-control" type="text" id="coupon_code" name="coupon_code" placeholder="Kupon (Někdy to dodělám třeba)"><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-default btn-md">Použít</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <table class="table mpl-table-responsive mpl-table-shop-total">
                                    <form action="cart.php" method="POST">
                                    <tbody>
                                        <tr>
                                            <th>Mezisoučet</th>
                                            <td id="subtotalPrice" data-title="Subtotal">0 Kč</td>
                                        </tr>
                                        <tr>
                                            <th>Doručení</th>
                                            <td data-title="Shipping">
                                                <ul class="mpl-list list-vgap-xs">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="evzen" name="shipping" price="0" value="evzen" checked><label class="form-check-label" for="evzen">Evžen to donese</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="ceskaPosta" name="shipping" price="1500" value="ceskaPosta" ><label class="form-check-label" for="ceskaPosta">Česká pošta: <strong>1,500 Kč</strong></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="dpd" name="shipping" price="500" value="dpd"><label class="form-check-label" for="dpd">DPD: <strong>500 Kč</strong></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="emil" name="shipping" price="5000" value="emil"><label class="form-check-label" for="emil">Emil: <strong>5,000 Kč</strong></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Platba</th>
                                            <td data-title="Payment">
                                                <ul class="mpl-list list-vgap-xs">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="okno" name="Payment" value="okno" checked><label class="form-check-label" for="okno">Hodím to do okna</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="ucet" name="Payment" value="ucet"><label class="form-check-label" for="ucet">Pošlu to na učet</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="ledvina" name="Payment" value="ledvina"><label class="form-check-label" for="ledvina">Ledvinou</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="paypal" name="Payment" value="paypal"><label class="form-check-label" for="paypal">PayPal</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Celková cená</th>
                                            <td id="totalFinalPrice" data-title="Total">0 Kč</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-md btn-block">Pokračovat</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <script>
            $(document).ready(function(){
                function createProductRow(product) {
                    var row = "<tr class='mpl-table-product mpl-table-product-sm'>";
                    row += "<td class='mpl-table-image'><a href='shop-product.html' class='mpl-table-product-image'><span class='mpl-image'><img src='" + product.photo + "' alt=''></span></a></td>";
                    row += "<td class='mpl-table-name' data-title='Product'><a href='shop-product.html' class='mpl-table-product-title h5'>" + product.count + "x " + product.name + "</a><span class='mpl-price'>" + product.priceTotal + " Kč (" + product.price + " Kč)</span></td>";
                    row += "<td class='mpl-table-remove'><a href='#' id='clearItem' itemId='" + product.id + "' class='mpl-table-product-remove'><svg class='icon' viewBox='0 0 24 24' stroke='currentColor' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M18 6L6 18M6 6L18 18'/></svg></a></td>";
                    row += "</tr>";
                    return row;
                }

                function createProductRowMain(product) {
                    var row = "<tr class='mpl-table-product' data-sr-item='product'>";
                    row += "<td class='mpl-table-image'>";
                    row += "<a href='shop-product.html' class='mpl-table-product-image'>";
                    row += "<span class='mpl-image'>";
                    row += "<img src='" + product.photo + "' alt=''>";
                    row += "</span>";
                    row += "</a>";
                    row += "</td>";
                    row += "<td class='mpl-table-name' data-title='Product'>";
                    row += "<a href='shop-product.html' class='mpl-table-product-title h4'>" + product.count + "x " + product.name + "</a>";
                    row += "</td>";
                    row += "<td class='mpl-table-price' data-title='Price'>";
                    row += "<span class='mpl-price'>" + product.priceTotal + " Kč (" + product.price + "Kč)</span>";
                    row += "</td>";
                    row += "</tr>";
                    return row;
                }

                $.ajax({
                    url: "ajax/postLoadCart.php", 
                    type: "POST",
                    data: {},
                    success: function(response) {
                        var productTableBody = $("#productTableBody");
                        productTableBody.empty();
                        $.each(response[0].cart, function(index, product) {
                            var productRow = createProductRow(product);
                                productTableBody.append(productRow);
                        });

                        var totalPrice = response[0].totalPrice;
                        $('#totalPrice span:nth-child(2)').text(totalPrice.toFixed(2) + ' Kč');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    },
                    complete: function() {
                    }
                });
                
                $(document).on('click', '#addToCartBtn', function(){
                    var $button = $(this);
                    var buttonItemId = $button.attr("itemId");
                    $button.text("Vloženo do košíku!");
                    $.ajax({
                        url: "ajax/postAddToCart.php", 
                        type: "POST",
                        data: {itemId: buttonItemId},
                        success: function(response) {
                            var productTableBody = $("#productTableBody");
                            productTableBody.empty();
                            $.each(response[0].cart, function(index, product) {
                                var productRow = createProductRow(product);
                                productTableBody.append(productRow);
                            });

                            var totalPrice = response[0].totalPrice;
                            $('#totalPrice span:nth-child(2)').text(totalPrice.toFixed(2) + ' Kč');
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        },
                        complete: function() {
                            setTimeout(function(){
                                $button.text("Do Košíku");
                            }, 2000);
                        }
                    });
                });

                $(document).on('click', '#clearItem', function(e) {
                    e.preventDefault();
                    var $button = $(this);
                    var buttonItemId = $button.attr("itemId");

                    $.ajax({
                        url: "ajax/postClearCartItem.php", 
                        type: "POST",
                        data: {itemId: buttonItemId},
                        success: function(response) {
                            var productTableBody = $("#productTableBody");
                            productTableBody.empty();
                            $.each(response[0].cart, function(index, product) {
                                var productRow = createProductRow(product);
                                productTableBody.append(productRow);
                            });

                            var totalPrice = response[0].totalPrice;
                            $('#totalPrice span:nth-child(2)').text(totalPrice.toFixed(2) + ' Kč');

                            $.ajax({
                                url: "ajax/postLoadCart.php", 
                                type: "POST",
                                data: {},
                                success: function(response) {
                                    var productTableBody = $("#productTableMainBody");
                                    productTableBody.empty();
                                    $.each(response[0].cart, function(index, product) {
                                        console.log(product);
                                        var productRow = createProductRowMain(product);
                                            productTableBody.append(productRow);
                                    });

                                    var totalPrice = response[0].totalPrice;
                                    $('#totalPrice span:nth-child(2)').text(totalPrice.toFixed(2) + ' Kč');
                                },
                                error: function(xhr, status, error) {
                                    console.error(xhr.responseText);
                                },
                                complete: function() {
                                }
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });

                });

                $(document).on('click', '#clearCart', function(){
                    var $button = $(this);
                    $button.text("Vymazáno!");
                    $.ajax({
                        url: "ajax/postClearCart.php", 
                        type: "POST",
                        data: {},
                        success: function(response) {
                            var productTableBody = $("#productTableBody");
                            productTableBody.empty();
                            var totalPrice = response[0].totalPrice;
                            $('#totalPrice span:nth-child(2)').text(totalPrice.toFixed(2) + ' Kč');
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        },
                        complete: function() {
                            setTimeout(function(){
                                $button.text("Vymazat košík");
                            }, 2000);
                            $.ajax({
                                url: "ajax/postLoadCart.php", 
                                type: "POST",
                                data: {},
                                success: function(response) {
                                    var productTableBody = $("#productTableMainBody");
                                    productTableBody.empty();
                                    $.each(response[0].cart, function(index, product) {
                                        console.log(product);
                                        var productRow = createProductRowMain(product);
                                            productTableBody.append(productRow);
                                    });

                                    var totalPrice = response[0].totalPrice;
                                    $('#totalPrice span:nth-child(2)').text(totalPrice.toFixed(2) + ' Kč');
                                },
                                error: function(xhr, status, error) {
                                    console.error(xhr.responseText);
                                },
                                complete: function() {
                                }
                            });
                        }
                    });
                });

                $.ajax({
                    url: "ajax/postLoadCart.php", 
                    type: "POST",
                    data: {},
                    success: function(response) {
                        var productTableBody = $("#productTableMainBody");
                        productTableBody.empty();
                        $.each(response[0].cart, function(index, product) {
                            console.log(product);
                            var productRow = createProductRowMain(product);
                                productTableBody.append(productRow);
                        });

                        window.totalPrice = response[0].totalPrice;
                        $('#totalPrice span:nth-child(2)').text(totalPrice.toFixed(2) + ' Kč');
                        $('#subtotalPrice').text(totalPrice.toFixed(2) + ' Kč');

                        var selectedShippingPrice = $('input[name="shipping"]:checked').attr('price');
                        var finalPrice = parseInt(totalPrice) + parseInt(selectedShippingPrice);
                        $('#totalFinalPrice').text(finalPrice.toLocaleString("en-US", { minimumFractionDigits: 0 }) + ' Kč');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    },
                    complete: function() {
                    }
                });

                $(document).on('change', 'input[name="shipping"]', function(){
                    var selectedShippingPrice = $('input[name="shipping"]:checked').attr('price');

                    var finalPrice = parseInt(totalPrice) + parseInt(selectedShippingPrice);
                    $('#totalFinalPrice').text(finalPrice.toLocaleString("en-US", { minimumFractionDigits: 0 }) + ' Kč');
                });

            });
        </script>
        
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