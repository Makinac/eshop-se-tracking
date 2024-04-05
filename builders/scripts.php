        
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
                            var items = [];

                            $.each(response[0].cart, function(index, item) {
                                var newItem = {
                                    code: item.id,
                                    name: item.name,
                                    price: { 
                                        with_vat: item.price, 
                                        without_vat: item.price,
                                        currency: 'CZK'
                                    },
                                    quantity: item.count
                                };
                                
                                items.push(newItem);
                            });
                            _se.push([ 'cart', { 
                                eshop_name: 'Levné Čokolády', 
                                items: items,
                            }]);
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
                            var items = [];

                            $.each(response[0].cart, function(index, item) {
                                var newItem = {
                                    code: item.id,
                                    name: item.name,
                                    price: { 
                                        with_vat: item.price, 
                                        without_vat: item.price,
                                        currency: 'CZK'
                                    },
                                    quantity: item.count
                                };
                                
                                items.push(newItem);
                            });
                            _se.push([ 'cart', { 
                                eshop_name: 'Levné Čokolády', 
                                items: items,
                            }]);
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

                            var items = [];
                            _se.push([ 'cart', { 
                                eshop_name: 'Levné Čokolády', 
                                items: items,
                            }]);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        },
                        complete: function() {
                            setTimeout(function(){
                                $button.text("Vymazat košík");
                            }, 2000);
                        }
                    });
                });

                $(document).ready(function() {
                    $("#placeOrderBtn").click(function(e) {
                        e.preventDefault(); 
                        var formData = $("#checkoutForm").serialize();
                        $.ajax({
                            type: "POST",
                            url: "ajax/postPlaceOrder.php", 
                            data: formData,
                            success: function(response) {
                                console.log("Data odeslána úspěšně");
                                console.log(response);
                                var data = JSON.parse(response[0].data)
                                var data 
                                var items = [];
                                var products = JSON.parse(data.products);
                                var productList = Object.values(products);
                                console.log(data);
                                productList.forEach(function(item) {
                                    var newItem = {
                                        code: item.id,
                                        name: item.name,
                                        price: { 
                                            with_vat: item.price,
                                            without_vat: item.price,
                                            currency: 'CZK'
                                        },
                                        quantity: item.count
                                    };
                                    
                                    items.push(newItem);
                                });

                                _se.push([ 'order', { 
                                    eshop_name: 'Levné Čokolády',
                                    eshop_code: data.orderNumber,
                                    status: 'placed',
                                    identify: { 
                                    contact_data: {
                                        emailaddress: data.billingEmail,
                                        name: data.billingFirstName,
                                        surname: data.billingLastName,
                                        street: data.billingStreet,
                                        town: data.billingCity,
                                        postalcode: data.billingPostCode,
                                        country: data.billingCountryInput,
                                        cellphone: data.billingPhone,
                                    },
                                    reidentify: true,
                                    update_existing: true 
                                    },
                                    attributes: [
                                        {
                                            name: 'shipping',
                                            value: data.shipingType,
                                        },
                                        {
                                            name: 'shippingPrice',
                                            value: data.shipingPrice,
                                        },
                                    ],
                                    items: items,
                                }]);

                                _se.push([ 'cart', { 
                                    eshop_name: 'Levné Čokolády', 
                                    items: [],
                                }]);

                            },
                            error: function(xhr, status, error) {
                                console.error("Chyba při odesílání dat: " + error);
                            }
                        });
                    });
                });

            });
        </script>