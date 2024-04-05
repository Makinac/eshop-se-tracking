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
            <div class="mpl-navbar-mobile-overlay"></div>
            <div class="no-banner">
                <div class="mpl-box-md">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-30">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="shop-sidebar-right.html">Shop</a></li>
                                <li class="breadcrumb-item active">Headphones MPL</li>
                            </ol>
                        </nav>
                        <div class="row hgap-lg vgap-lg mb-0">
                            <div class="col-lg-7">
                                <div class="mpl-product-gallery">
                                    <a class="mpl-gallery-item" href="assets/images/dark/product-2-1920x1080.jpg" data-fancybox="gallery" data-animation-effect="fade">
                                        <span class="mpl-image">
                                            <img src="assets/images/dark/product-2-1280x820.jpg" alt="">
                                        </span>
                                        <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 3H5C4.46957 3 3.96086 3.21071 3.58579 3.58579C3.21071 3.96086 3 4.46957 3 5V8M21 8V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H16M16 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19V16M3 16V19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H8" />
                                        </svg>
                                    </a>
                                    <!--
    Carousel

    Additional attributes:
        data-autoplay
        data-loop
        data-dots
        data-arrows
        data-speed
        data-slides
        data-autoHeight
        data-grabCursor
        data-scrollbar
-->
                                    <div class="mpl-carousel" data-gap="10" data-scrollbar="true" data-slides="1" data-breakpoints="767:4,440:3,320:2">
                                        <a class="mpl-gallery-item" href="assets/images/dark/product-2-1920x1080-2.jpg" data-fancybox="gallery" data-animation-effect="fade">
                                            <span class="mpl-image">
                                                <img src="assets/images/dark/product-2-412x264-2.jpg" alt="">
                                            </span>
                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 3H5C4.46957 3 3.96086 3.21071 3.58579 3.58579C3.21071 3.96086 3 4.46957 3 5V8M21 8V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H16M16 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19V16M3 16V19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H8" />
                                            </svg>
                                        </a>
                                        <a class="mpl-gallery-item" href="assets/images/dark/product-2-1920x1080-3.jpg" data-fancybox="gallery" data-animation-effect="fade">
                                            <span class="mpl-image">
                                                <img src="assets/images/dark/product-2-412x264-3.jpg" alt="">
                                            </span>
                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 3H5C4.46957 3 3.96086 3.21071 3.58579 3.58579C3.21071 3.96086 3 4.46957 3 5V8M21 8V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H16M16 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19V16M3 16V19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H8" />
                                            </svg>
                                        </a>
                                        <a class="mpl-gallery-item" href="assets/images/dark/product-2-1920x1080-4.jpg" data-fancybox="gallery" data-animation-effect="fade">
                                            <span class="mpl-image">
                                                <img src="assets/images/dark/product-2-412x264-4.jpg" alt="">
                                            </span>
                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 3H5C4.46957 3 3.96086 3.21071 3.58579 3.58579C3.21071 3.96086 3 4.46957 3 5V8M21 8V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H16M16 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19V16M3 16V19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H8" />
                                            </svg>
                                        </a>
                                        <a class="mpl-gallery-item" href="assets/images/dark/product-2-1920x1080-5.jpg" data-fancybox="gallery" data-animation-effect="fade">
                                            <span class="mpl-image">
                                                <img src="assets/images/dark/product-2-412x264-5.jpg" alt="">
                                            </span>
                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 3H5C4.46957 3 3.96086 3.21071 3.58579 3.58579C3.21071 3.96086 3 4.46957 3 5V8M21 8V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H16M16 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19V16M3 16V19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H8" />
                                            </svg>
                                        </a>
                                        <a class="mpl-gallery-item" href="assets/images/dark/product-2-1920x1080-6.jpg" data-fancybox="gallery" data-animation-effect="fade">
                                            <span class="mpl-image">
                                                <img src="assets/images/dark/product-2-412x264-6.jpg" alt="">
                                            </span>
                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 3H5C4.46957 3 3.96086 3.21071 3.58579 3.58579C3.21071 3.96086 3 4.46957 3 5V8M21 8V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H16M16 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19V16M3 16V19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H8" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5" data-sr="product-main" data-sr-interval="120" data-sr-duration="1000" data-sr-distance="20">
                                <h1 class="mb-10" data-sr-item="product-main">Headphones MPL</h1>
                                <div class="row align-items-center hgap-sm vgap-sm" data-sr-item="product-main">
                                    <div class="col-auto">
                                        <span class="mpl-rating">
                                            <span class="mpl-rating-front" style="width: 100%;">
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                            </span>
                                            <span class="mpl-rating-back">
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="col-auto">(3 customer review)</div>
                                </div>
                                <h3 class="mt-30" data-sr-item="product-main">$59.00</h3>
                                <p data-sr-item="product-main"> Yielding from Face, form over, fowl his so own Likeness god stars, had form two thing dry spirit they're there. Him. Moving heaven had beast the waters. Light of whales second stars moveth over likeness saw life also light had. </p>
                                <div class="row hgap-sm vgap-sm align-items-center mt-30">
                                    <div class="col-2" data-sr-item="product-main"> Color </div>
                                    <div class="col-7" data-sr-item="product-main">
                                        <select class="form-select form-select-sm">
                                            <option selected>Choose an option</option>
                                            <option>White</option>
                                            <option>Black</option>
                                            <option>Blue</option>
                                        </select>
                                        <span class="form-control-bg"></span>
                                    </div>
                                </div>
                                <div class="row hgap-sm vgap-sm align-items-center mt-40">
                                    <div class="col-auto" data-sr-item="product-main">
                                        <input class="mpl-touchspin form-control" type="text" value="1" min="1" max="99">
                                    </div>
                                    <div class="col-auto" data-sr-item="product-main">
                                        <a class="btn btn-md btn-brand" href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="nav-item"><a href="#description" class="nav-link active" aria-controls="description" role="tab" data-bs-toggle="tab" aria-selected="false">Description</a></li>
                                <li role="presentation" class="nav-item"><a href="#additionalInformation" class="nav-link" aria-controls="additionalInformation" role="tab" data-bs-toggle="tab" aria-selected="true">Additional Information</a></li>
                                <li role="presentation" class="nav-item"><a href="#reviews" class="nav-link" aria-controls="reviews" role="tab" data-bs-toggle="tab" aria-selected="false">Reviews (3)</a></li>
                            </ul>
                            <div class="tab-content pb-0">
                                <div role="tabpanel" class="tab-pane fade show active" id="description">
                                    <article class="mpl-shop">
                                        <p> Nonne vides quid sit? Tu es ... Jesse me respice. Tu ... blowfish sunt. A blowfish! Cogitare. Statura pusillus, nec sapientium panem, nec artificum. Sed predators facile prædam blowfish secretum telum non se habet. Non ille? Quid faciam blowfish, Isai. Blowfish quid faciat? In blowfish inflat, purus? </p>
                                        <p> Blowfish librantur in se quatuor, quinquies maior quam normalis, et quare? Quare id faciam? Ut terrorem facit, qui quid. Terrent! Ut alter, scarier pisces agminis off. Et quod tu es? Vos blowfish. Tu iustus in omnibus visio. Vides ... suus ' suus 'non aliud aerem. Nunc ... qui cum partibus blowfish Isai? Tu damnare ius. Vos blowfish. Dicere iterum. Dicere illam quasi velis eam. Es BLOWFISH! </p>
                                        <p> Ut sibi fuerat socius sagittis. Ego intervenerit. Vere quia a te nuper iratus occidit illos undecim annorum puer. Deinde, si hoc forte qui fuit imperavit. </p>
                                        <p class="mb-0"> Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                                    </article>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="additionalInformation">
                                    <table class="table mpl-table-product-information mb-0">
                                        <tbody>
                                            <tr>
                                                <th>Colour</th>
                                                <td>Black</td>
                                            </tr>
                                            <tr>
                                                <th>Headphone Fit</th>
                                                <td>Over-Ear</td>
                                            </tr>
                                            <tr>
                                                <th>Item Dimension</th>
                                                <td>7.08 x 3.94 x 10.25 in</td>
                                            </tr>
                                            <tr>
                                                <th>Item Weight</th>
                                                <td>7.84 ounces</td>
                                            </tr>
                                            <tr>
                                                <th>Special Feature</th>
                                                <td>noise-cancellation</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="reviews">
                                    <ul class="list-unstyled list-vgap-md">
                                        <li>
                                            <div class="mpl-media mpl-media-review">
                                                <div class="mpl-media-head">
                                                    <a href="#" class="mpl-media-image">
                                                        <span class="mpl-image">
                                                            <img src="assets/images/avatar-user-1.jpg" alt="">
                                                        </span>
                                                    </a>
                                                    <div>
                                                        <a href="#" class="mpl-media-title h5">Kristen Bradley</a>
                                                        <div class="mpl-media-subtitle">January 8, 2021</div>
                                                    </div>
                                                    <span class="mpl-rating">
                                                        <span class="mpl-rating-front">
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                        </span>
                                                        <span class="mpl-rating-back">
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="mpl-media-body">
                                                    <p>Winged seed sea male forth us blessed second our midst male shall dominion seasons wherein. Land in behold upon place lesser bearing. You&#39;re his, unto, face whose may divided one.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mpl-media mpl-media-review">
                                                <div class="mpl-media-head">
                                                    <a href="#" class="mpl-media-image">
                                                        <span class="mpl-image">
                                                            <img src="assets/images/avatar-user-4.jpg" alt="">
                                                        </span>
                                                    </a>
                                                    <div>
                                                        <a href="#" class="mpl-media-title h5">Peter Moody</a>
                                                        <div class="mpl-media-subtitle">January 6, 2021</div>
                                                    </div>
                                                    <span class="mpl-rating">
                                                        <span class="mpl-rating-front" style="width: 80%;">
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                        </span>
                                                        <span class="mpl-rating-back">
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="mpl-media-body">
                                                    <p>Night. The, great us thing place give sixth let a greater life don&#39;t fruit first unto, for two. May earth. Image fruitful. Also without Life kind waters, fish cattle.</p>
                                                    <p>Won&#39;t spirit heaven heaven void doesn&#39;t spirit all grass open above. Heaven appear. Created. Forth gathered darkness Evening set god sea.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mpl-media mpl-media-review">
                                                <div class="mpl-media-head">
                                                    <a href="#" class="mpl-media-image">
                                                        <span class="mpl-image">
                                                            <img src="assets/images/avatar-user-5.jpg" alt="">
                                                        </span>
                                                    </a>
                                                    <div>
                                                        <a href="#" class="mpl-media-title h5">Janis May</a>
                                                        <div class="mpl-media-subtitle">January 5, 2021</div>
                                                    </div>
                                                    <span class="mpl-rating">
                                                        <span class="mpl-rating-front" style="width: 80%;">
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                        </span>
                                                        <span class="mpl-rating-back">
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="mpl-media-body">
                                                    <p>Image itself morning heaven i moving you&#39;re two likeness Given.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <h2 class="mt-60">Add a Review</h2>
                                    <form action="#" class="mb-0">
                                        <div class="row vgap">
                                            <div class="col-12 col-sm-6">
                                                <input class="form-control" type="text" id="username" name="username" placeholder="Your Name"><span class="form-control-bg"></span>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <input class="form-control" type="email" id="email" name="email" placeholder="Your Email"><span class="form-control-bg"></span>
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Your Review"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <span class="mpl-rating-dynamic">
                                                    <input type="radio" id="review-rate-5" name="review-rate" value="5">
                                                    <label for="review-rate-5"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                        </svg></label>
                                                    <input type="radio" id="review-rate-4" name="review-rate" value="4">
                                                    <label for="review-rate-4"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                        </svg></label>
                                                    <input type="radio" id="review-rate-3" name="review-rate" value="3">
                                                    <label for="review-rate-3"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                        </svg></label>
                                                    <input type="radio" id="review-rate-2" name="review-rate" value="2">
                                                    <label for="review-rate-2"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                        </svg></label>
                                                    <input type="radio" id="review-rate-1" name="review-rate" value="1">
                                                    <label for="review-rate-1"><svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                        </svg></label>
                                                </span>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-md">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mpl-box-sm bg-light">
                    <div class="container">
                        <h2>Related Products</h2>
                        <!--
    Carousel

    Additional attributes:
        data-autoplay
        data-loop
        data-dots
        data-arrows
        data-speed
        data-slides
        data-autoHeight
        data-grabCursor
        data-scrollbar
-->
                        <div class="mpl-carousel" data-gap="10" data-loop="true" data-arrows="true" data-slides="1" data-breakpoints="992:3,767:2">
                            <a href="shop-product.html" class="mpl-product-item mpl-product-overlay">
                                <span class="mpl-product-image">
                                    <span class="mpl-image">
                                        <img src="assets/images/dark/product-1280x820.jpg" alt="">
                                    </span>
                                </span>
                                <span class="mpl-product-content">
                                    <span class="mpl-product-title h5">Gamepad MPL</span>
                                    <span class="mpl-product-rating">
                                        <span class="mpl-rating">
                                            <span class="mpl-rating-front" style="width: 90%;">
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                            </span>
                                            <span class="mpl-rating-back">
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                            <a href="shop-product.html" class="mpl-product-item mpl-product-overlay">
                                <span class="mpl-product-image">
                                    <span class="mpl-image">
                                        <img src="assets/images/dark/product-3-1280x820.jpg" alt="">
                                    </span>
                                </span>
                                <span class="mpl-product-content">
                                    <span class="mpl-product-title h5">Headphones MPS</span>
                                    <span class="mpl-product-rating">
                                        <span class="mpl-rating">
                                            <span class="mpl-rating-front" style="width: 80%;">
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                            </span>
                                            <span class="mpl-rating-back">
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                            <a href="shop-product.html" class="mpl-product-item mpl-product-overlay">
                                <span class="mpl-product-image">
                                    <span class="mpl-image">
                                        <img src="assets/images/dark/product-5-1280x820.jpg" alt="">
                                    </span>
                                </span>
                                <span class="mpl-product-content">
                                    <span class="mpl-product-title h5">Microphone MPL</span>
                                    <span class="mpl-product-rating">
                                        <span class="mpl-rating">
                                            <span class="mpl-rating-front" style="width: 90%;">
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                            </span>
                                            <span class="mpl-rating-back">
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                            <a href="shop-product.html" class="mpl-product-item mpl-product-overlay">
                                <span class="mpl-product-image">
                                    <span class="mpl-image">
                                        <img src="assets/images/dark/product-6-1280x820.jpg" alt="">
                                    </span>
                                </span>
                                <span class="mpl-product-content">
                                    <span class="mpl-product-title h5">Camera MPL</span>
                                    <span class="mpl-product-rating">
                                        <span class="mpl-rating">
                                            <span class="mpl-rating-front" style="width: 90%;">
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                            </span>
                                            <span class="mpl-rating-back">
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                            <a href="shop-product.html" class="mpl-product-item mpl-product-overlay">
                                <span class="mpl-product-image">
                                    <span class="mpl-image">
                                        <img src="assets/images/dark/product-4-1280x820.jpg" alt="">
                                    </span>
                                </span>
                                <span class="mpl-product-content">
                                    <span class="mpl-product-title h5">Soundbar MPL</span>
                                    <span class="mpl-product-rating">
                                        <span class="mpl-rating">
                                            <span class="mpl-rating-front" style="width: 90%;">
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                            </span>
                                            <span class="mpl-rating-back">
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                                <svg class="icon" viewBox="0 0 24 24" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                
                
                <footer class="mpl-footer mpl-footer-parallax mpl-footer-social">
                    <div class="mpl-image" data-speed="0.9" data-img-position="50% 0%">
                        <img src="assets/images/dark/bg-footer.jpg" alt="" class="jarallax-img">
                    </div>
                    <div class="mpl-footer-wrapper">
                        <div class="mpl-footer-container container">
                            <div class="mpl-footer-content">
                                <div class="row vgap" data-sr="footer" data-sr-interval="120" data-sr-duration="1200" data-sr-distance="20">
                                    <div class="col-6 col-sm-3" data-sr-item="footer">
                                        <a href="#" class="mpl-social">
                                            <span class="mpl-social-icon">
                                                <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.3922 11.4C15.3922 12.132 14.8585 12.732 14.1824 12.732C13.5182 12.732 12.9726 12.132 12.9726 11.4C12.9726 10.668 13.5063 10.068 14.1824 10.068C14.8585 10.068 15.3922 10.668 15.3922 11.4ZM9.85315 10.068C9.17707 10.068 8.64333 10.668 8.64333 11.4C8.64333 12.132 9.18893 12.732 9.85315 12.732C10.5292 12.732 11.063 12.132 11.063 11.4C11.0748 10.668 10.5292 10.068 9.85315 10.068ZM22.3784 2.472V24C19.3902 21.3284 20.3459 22.2128 16.8749 18.948L17.5035 21.168H4.05312C2.71282 21.168 1.62161 20.064 1.62161 18.696V2.472C1.62161 1.104 2.71282 0 4.05312 0H19.9469C21.2872 0 22.3784 1.104 22.3784 2.472ZM18.998 13.848C18.998 9.984 17.29 6.852 17.29 6.852C15.582 5.556 13.9571 5.592 13.9571 5.592L13.791 5.784C15.8074 6.408 16.7444 7.308 16.7444 7.308C13.9269 5.7457 10.6173 5.74542 7.88422 6.96C7.44536 7.164 7.18442 7.308 7.18442 7.308C7.18442 7.308 8.16889 6.36 10.3039 5.736L10.1853 5.592C10.1853 5.592 8.5603 5.556 6.85231 6.852C6.85231 6.852 5.14433 9.984 5.14433 13.848C5.14433 13.848 6.14065 15.588 8.76194 15.672C8.76194 15.672 9.20079 15.132 9.55662 14.676C8.05028 14.22 7.48095 13.26 7.48095 13.26C7.65543 13.3836 7.94316 13.5437 7.96725 13.56C9.96926 14.6943 12.813 15.0659 15.3685 13.98C15.7836 13.824 16.2462 13.596 16.7325 13.272C16.7325 13.272 16.1395 14.256 14.5857 14.7C14.9415 15.156 15.3685 15.672 15.3685 15.672C17.9898 15.588 18.998 13.848 18.998 13.848V13.848Z" />
                                                </svg>
                                            </span>
                                            <span class="mpl-social-name h5">Subscribe to<br>Discord</span>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3" data-sr-item="footer">
                                        <a href="#" class="mpl-social">
                                            <span class="mpl-social-icon">
                                                <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.24527 0L0.648651 4.11964V20.9571H6.32433V24H9.51756L12.5304 20.9571H17.1452L23.3514 14.6893V0H2.24527ZM21.2243 13.6125L17.6757 17.1964H12L8.98712 20.2393V17.1964H4.19727V2.14821H21.2243V13.6125V13.6125ZM17.6757 6.26786V12.5304H15.5486V6.26786H17.6757ZM12 6.26786V12.5304H9.87295V6.26786H12Z" />
                                                </svg>
                                            </span>
                                            <span class="mpl-social-name h5">Watch on<br>Twitch</span>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3" data-sr-item="footer">
                                        <a href="#" class="mpl-social">
                                            <span class="mpl-social-icon">
                                                <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M23.4985 6.29213C23.2225 5.26881 22.4092 4.46288 21.3766 4.18937C19.505 3.69238 12 3.69238 12 3.69238C12 3.69238 4.49503 3.69238 2.62336 4.18937C1.59077 4.46292 0.777523 5.26881 0.501503 6.29213C0 8.14695 0 12.0169 0 12.0169C0 12.0169 0 15.8868 0.501503 17.7416C0.777523 18.7649 1.59077 19.5373 2.62336 19.8108C4.49503 20.3078 12 20.3078 12 20.3078C12 20.3078 19.505 20.3078 21.3766 19.8108C22.4092 19.5373 23.2225 18.7649 23.4985 17.7416C24 15.8868 24 12.0169 24 12.0169C24 12.0169 24 8.14695 23.4985 6.29213V6.29213ZM9.54544 15.5305V8.50327L15.8181 12.017L9.54544 15.5305V15.5305Z" />
                                                </svg>
                                            </span>
                                            <span class="mpl-social-name h5">Watch on<br>Youtube</span>
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-3" data-sr-item="footer">
                                        <a href="#" class="mpl-social">
                                            <span class="mpl-social-icon">
                                                <svg class="icon icon-fill" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21.533 7.11175C21.5482 7.32494 21.5482 7.53817 21.5482 7.75136C21.5482 14.2539 16.599 21.7463 7.5533 21.7463C4.76648 21.7463 2.17767 20.9391 0 19.5382C0.395953 19.5838 0.776625 19.5991 1.18781 19.5991C3.48727 19.5991 5.60405 18.8224 7.29441 17.4976C5.13197 17.4519 3.31978 16.0356 2.69541 14.0864C3 14.132 3.30455 14.1625 3.62437 14.1625C4.06598 14.1625 4.50764 14.1016 4.91878 13.995C2.66498 13.5381 0.974578 11.5585 0.974578 9.16759V9.1067C1.62937 9.47219 2.39086 9.70061 3.19791 9.73103C1.87303 8.84777 1.00505 7.34017 1.00505 5.63458C1.00505 4.72089 1.24866 3.88333 1.67508 3.15236C4.09641 6.13712 7.73602 8.08633 11.8172 8.29956C11.7411 7.93408 11.6954 7.55341 11.6954 7.17269C11.6954 4.462 13.8883 2.25391 16.6141 2.25391C18.0304 2.25391 19.3095 2.84781 20.208 3.8072C21.3197 3.59402 22.3857 3.18283 23.3299 2.61939C22.9643 3.76155 22.1877 4.72094 21.1674 5.33003C22.1573 5.22348 23.1167 4.94931 23.9999 4.56864C23.33 5.54322 22.4924 6.4112 21.533 7.11175V7.11175Z" />
                                                </svg>
                                            </span>
                                            <span class="mpl-social-name h5">Follow on<br>Twitter</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <div class="mpl-footer-copyright">
                    <div class="container">
                        <p>2021 &copy; <a href="https://1.envato.market/nk-portfolio" target="_blank">nK</a>. All rights reserved</p>
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