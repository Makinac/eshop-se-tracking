<?php 

require '/var/www/html/eshop/functions/core.php';

if (!isset($_SESSION['checkout'])) {
    header("location: index.php");
    exit;
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
            <div>
                <section class="mpl-banner mpl-banner-top mpl-banner-parallax mpl-banner-small">
                    <div class="mpl-image" data-speed="0.8">
                        <img src="assets/images/dark/bg-banner-1.jpg" alt="" class="jarallax-img">
                    </div>
                    <div class="mpl-banner-content mpl-box-lg">
                        <div class="container">
                            <h1 class="display-1 mb-0">Checkout</h1>
                        </div>
                    </div>
                </section>
                <div class="mpl-box-md">
                    <div class="container">
                        <form action="#" id="checkoutForm" class="row hgap-lg vgap-lg">
                            <div class="col-12 col-lg-8 mpl-shop">
                                <h2>Billing Details</h2>
                                
                                <div class="row vgap" data-sr="checkout" data-sr-duration="1000" data-sr-distance="20">
                                    <div class="col-12" data-sr-item="checkout">
                                        <label for="billing_country">Country</label><select class="form-select" id="billing_country" name="billing_country">
                                            <option value="">Select Country</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="PW">Belau</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="VG">British Virgin Islands</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo (Brazzaville)</option>
                                            <option value="CD">Congo (Kinshasa)</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">CuraÇao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="CI">Ivory Coast</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Laos</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao S.A.R., China</option>
                                            <option value="MK">Macedonia</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="MD">Moldova</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="KP">North Korea</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PS">Palestinian Territory</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="QA">Qatar</option>
                                            <option value="IE">Republic of Ireland</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="ST">São Tomé and Príncipe</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="SX">Saint Martin (Dutch part)</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="SM">San Marino</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia/Sandwich Islands</option>
                                            <option value="KR">South Korea</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syria</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom (UK)</option>
                                            <option value="US">United States (US)</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VA">Vatican</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="WS">Western Samoa</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col-12 col-md-6" data-sr-item="checkout">
                                        <label for="billing_firstname">Jméno:</label><input class="form-control" type="text" id="billing_firstname" name="billing_firstname" placeholder="First Name" value="<?php if (isset($_SESSION["user"])) { if (isset($_SESSION["user"]["contactDetails"])) { echo $_SESSION["user"]["contactDetails"]->billingFirstName; }} ?>"><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col-12 col-md-6" data-sr-item="checkout">
                                        <label for="billing_lastname">Příjmení:</label><input class="form-control" type="text" id="billing_lastname" name="billing_lastname" placeholder="Last Name" value="<?php if (isset($_SESSION["user"])) { if (isset($_SESSION["user"]["contactDetails"])) { echo $_SESSION["user"]["contactDetails"]->billingLastName; }} ?>"><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col-12 col-lg-6" data-sr-item="checkout">
                                        <label for="billing_street">Adresa:</label><input class="form-control" type="text" id="billing_street" name="billing_street" placeholder="Street Address" value="<?php if (isset($_SESSION["user"])) { if (isset($_SESSION["user"]["contactDetails"])) { echo $_SESSION["user"]["contactDetails"]->billingStreet; }} ?>"><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col-12 col-md-6" data-sr-item="checkout">
                                        <label for="billing_apartment">Apartmán:</label><input class="form-control" type="text" id="billing_apartment" name="billing_apartment" placeholder="Apartment, suite, unit etc." value="<?php if (isset($_SESSION["user"])) { if (isset($_SESSION["user"]["contactDetails"])) { echo $_SESSION["user"]["contactDetails"]->billingApartment; }} ?>"><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4" data-sr-item="checkout">
                                        <label for="billing_city">Město:</label><input class="form-control" type="text" id="billing_city" name="billing_city" placeholder="City" value="<?php if (isset($_SESSION["user"])) { if (isset($_SESSION["user"]["contactDetails"])) { echo $_SESSION["user"]["contactDetails"]->billingCity; }} ?>"><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4" data-sr-item="checkout">
                                        <label for="billing_country_input">Stát:</label><input class="form-control" type="text" id="billing_country_input" name="billing_country_input" placeholder="Country" value="<?php if (isset($_SESSION["user"])) { if (isset($_SESSION["user"]["contactDetails"])) { echo $_SESSION["user"]["contactDetails"]->billingCountryInput; }} ?>"><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4" data-sr-item="checkout">
                                        <label for="billing_postcode">PSČ:</label><input class="form-control" type="text" id="billing_postcode" name="billing_postcode" placeholder="Postcode" value="<?php if (isset($_SESSION["user"])) { if (isset($_SESSION["user"]["contactDetails"])) { echo $_SESSION["user"]["contactDetails"]->billingPostcode; }} ?>"><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col-12 col-md-6" data-sr-item="checkout">
                                        <label for="billing_email">Email:</label><input class="form-control" type="email" id="billing_email" name="billing_email" placeholder="Email" value="<?php if (isset($_SESSION["user"])) { if (isset($_SESSION["user"]["contactDetails"])) { echo $_SESSION["user"]["contactDetails"]->billingEmail; }} ?>"><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col-12 col-md-6" data-sr-item="checkout">
                                        <label for="billing_phone">Telefon:</label><input class="form-control" type="text" id="billing_phone" name="billing_phone" placeholder="Phone" value="<?php if (isset($_SESSION["user"])) { if (isset($_SESSION["user"]["contactDetails"])) { echo $_SESSION["user"]["contactDetails"]->billingPhone; }} ?>"><span class="form-control-bg"></span>
                                    </div>
                                    <div class="col-12" data-sr-item="checkout">
                                        <label for="billing_info">Info k objednávce:</label><textarea class="form-control" rows="5" id="billing_info" name="billing_info" placeholder="Additional Info"></textarea>
                                    </div>
                                    <?php if (isset($_SESSION["user"])) { ?>
                                    <div class="col-12" data-sr-item="checkout">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="save_data" name="save_data"><label class="form-check-label" for="save_data">Uložit data pro příště?</label>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <button class="btn btn-md mt-35" id="placeOrderBtn" data-sr data-sr-duration="1200" data-sr-distance="10">Place Order</button>
                            </div>
                            <div class="col-12 col-lg-4" data-sr="checkout" data-sr-duration="1200" data-sr-distance="10">
                                <h4 data-sr-item="checkout">Produkty</h4>
                                <?php 
                                    foreach ($_SESSION['checkout']["products"] as $product) {
                                        ?>

                                        <a class="mpl-product-item mpl-product-checkout mpl-product-horizontal" data-sr-item=checkout>
                                            <span class="mpl-product-title h5"><?php echo $product["count"] ?>x <?php echo $product["name"] ?></span>
                                            <span class="mpl-price"> <?php echo $product["priceTotal"] ?>Kč (<?php echo $product["price"] ?>Kč) </span>
                                        </a>
                                        

                                        <?php
                                    }
                                ?>
                                <h4 class="mt-60" data-sr-item="checkout">Platba</h4>
                                <a class="mpl-product-item mpl-product-checkout mpl-product-horizontal" data-sr-item=checkout>
                                    <span class="mpl-product-title h5"><?php echo $_SESSION['checkout']["paymentType"];  ?></span>
                                </a>
                                <h4 class="mt-60" data-sr-item="checkout">Doručení</h4>
                                <a class="mpl-product-item mpl-product-checkout mpl-product-horizontal" data-sr-item=checkout>
                                    <span class="mpl-product-title h5"><?php echo $_SESSION['checkout']["shipingType"];  ?></span>
                                    <span class="mpl-price"> <?php echo $_SESSION['checkout']["shipingPrice"];  ?> Kč </span>
                                </a>
                                <h4 class="mt-60" data-sr-item="checkout">Souhrn</h4>
                                <a class="mpl-product-item mpl-product-checkout mpl-product-horizontal" data-sr-item=checkout>
                                    <span class="mpl-product-title h5">Celková částka</span>
                                    <span class="mpl-price"> <?php echo $_SESSION['checkout']["shipingPrice"];  ?> Kč </span>
                                </a>
                            </div>
                        </form>
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
        
    </body>
</html>