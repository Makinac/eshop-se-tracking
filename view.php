<?php 

require '/var/www/html/eshop/functions/core.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id !== null && is_numeric($id)) {
    $sql = "SELECT * FROM products WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (empty($result)) {
        header('location: index.php');
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
        
        
        <?php require '/var/www/html/eshop/builders/navbar.php'; ?>	
        
        <div class="content-wrap">
            <div class="mpl-navbar-mobile-overlay"></div>
            <div class="no-banner">
                <div class="mpl-box-md">
                    <div class="container">
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
                                <h1 class="mb-10" data-sr-item="product-main"><?php echo $result[0]["name"] ?></h1>
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
                                        <button id="addToCartBtn" itemId="<?php echo $result[0]["id"] ?>" class="btn btn-block btn-default">Do Košíku</button>
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
                
                                
            </div>
        </div>
        
        <?php require '/var/www/html/eshop/builders/scripts.php'; ?>
        <script>
        _se.push([ 
            'visit', 
            { 
                url: 'http://49.13.93.232/eshop/view.php',
                visit_type: 'product',
                attributes: [
                    {
                        name: 'product_id',
                        value: '<?php echo $result[0]["id"] ?>'
                    },
                    {
                        name: 'product_name',
                        value: '<?php echo $result[0]["name"] ?>'
                    },
                    {
                        name: 'product_category',
                        value: '<?php echo $result[0]["category"] ?>'
                    }
                ]
            } 
        ]);
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