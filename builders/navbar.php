<nav class="mpl-navbar-top mpl-navbar">
    <div class="mpl-navbar-mobile-overlay"></div>
    <div class="container mpl-navbar-container">
        <a href="#" class="mpl-navbar-toggle"></a>
        <div class="mpl-navbar-brand">
            <a href="index.php">
                <img src="assets/images/logo.svg" alt="">
            </a>
        </div>
        <div class="mpl-navbar-content">
            <ul class="mpl-navbar-nav">
                <li class="mpl-dropdown active">
                    <a href="dark-index.html" class="mpl-nav-link" role="button">
                        <span class="mpl-nav-link-name"> Produkty </span>
                    </a>
                    <div class="mpl-dropdown-menu">
                        <ul class="mpl-navbar-nav">
                            <li>
                                <a href="dark-index.html" class="mpl-nav-link">
                                    <span class="mpl-nav-link-name"> Tráva </span>
                                </a>
                            </li>
                            <li>
                                <a href="shooter-index.html" class="mpl-nav-link">
                                    <span class="mpl-nav-link-name"> Piko </span>
                                </a>
                            </li>
                            <li>
                                <a href="gamer-index.html" class="mpl-nav-link">
                                    <span class="mpl-nav-link-name"> Herák </span>
                                </a>
                            </li>
                            <li>
                                <a href="studio-index.html" class="mpl-nav-link">
                                    <span class="mpl-nav-link-name"> Přidat Produkt </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="mpl-navbar-nav mpl-navbar-right">
                <?php if (isset($_SESSION["user"])) { ?>
                <li class="mpl-dropdown">
                    <a href="user-activity.html" class="mpl-nav-link" role="button">
                        <span class="mpl-nav-link-name">  <?php echo $_SESSION["user"]["email"]; ?></span>
                    </a>
                    <div class="mpl-dropdown-menu">
                        <ul class="mpl-navbar-nav">
                            <li>
                                <a href="user-activity.html" class="mpl-nav-link">
                                    <span class="mpl-nav-link-name"> Activity </span>
                                </a>
                            </li>
                            <li>
                                <a href="user-profile.html" class="mpl-nav-link">
                                    <span class="mpl-nav-link-name"> Profile </span>
                                </a>
                            </li>
                            <li>
                                <a href="user-messages.html" class="mpl-nav-link">
                                    <span class="mpl-nav-link-name"> Messages<span class="badge badge-brand">8</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="user-settings.html" class="mpl-nav-link">
                                    <span class="mpl-nav-link-name"> Settings </span>
                                </a>
                            </li>
                            <li>
                                <a href="logout.php" class="mpl-nav-link">
                                    <span class="mpl-nav-link-name"> Odhlásit se </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php } ?>
                <li class="mpl-dropdown mpl-dropdown-cart">
                    <a class="mpl-nav-link" role="button" href="#">
                        <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H5L7.68 14.39M7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6L7.68 14.39ZM10 21C10 21.5523 9.55228 22 9 22C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C9.55228 20 10 20.4477 10 21ZM21 21C21 21.5523 20.5523 22 20 22C19.4477 22 19 21.5523 19 21C19 20.4477 19.4477 20 20 20C20.5523 20 21 20.4477 21 21Z" />
                        </svg>
                    </a>
                    <div class="mpl-dropdown-menu">
                        <div class="row justify-content-between vgap">
                            <div class="col-12">
                                <table class="table mpl-table-shop mpl-table-shop-sm mpl-table-responsive mb-0">
                                    <tbody id="productTableBody">
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div id="totalPrice" class="d-flex justify-content-between h5 mb-0">
                                    <span>Celkově:</span>
                                    <span>0 Kč</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row hgap-xs vgap-xs">
                                    <div class="col">
                                        <button id="clearCart" class="btn btn-block btn-default">Vymazat košík</button>
                                    </div>
                                    <div class="col">
                                        <a href="cart.php" class="btn btn-block btn-default">Objednat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php if (!isset($_SESSION["user"])) { ?>
                <li class="mpl-dropdown mpl-dropdown-user">
                    <a href="#" class="mpl-nav-link" role="button">
                        <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" />
                        </svg>
                    </a>
                    <div class="mpl-dropdown-menu">
                        <form class="mpl-navbar-login-form" action="sign-in.php" method="post">
                            <div class="row hgap-sm vgap-sm align-items-center">
                                <div class="col-12">
                                    <label for="nav_username">Email:</label><input class="form-control form-control-sm" type="email" id="email" name="email" placeholder="Email"><span class="form-control-bg"></span>
                                </div>
                                <div class="col-12">
                                    <label for="nav_password">Heslo:</label><input class="form-control form-control-sm" type="password" id="password" name="password" placeholder="Heslo"><span class="form-control-bg"></span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="small">Nevím heslo</a>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-block btn-default">Přihlásit se</button>
                                </div>
                                <div class="col-12 small"> Nemáš učet? <a href="sign-up.php">Registrace</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

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
                            <li class="active">
                                <a href="shop-sidebar-right.html" class="mpl-nav-link mpl-nav-link-collapse" role="button">
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
                                        <li class="active">
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
                            <li>
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