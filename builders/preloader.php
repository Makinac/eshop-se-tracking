<div class="mpl-preloader">
    <div class="mpl-preloader-content">
        <div class="mpl-preloader-title display-1 h1">Levné Čokolády</div>
        <div class="mpl-preloader-progress">
            <div></div>
        </div>
    </div>
</div>
<div class="mpl-preloader-bg"></div>

<script type="text/javascript">
(function(sm,a,rt,e,ma,il,i,ng){a._se=a._se||[];for(ng=0;ng<ma.length;ng++){i=sm.createElement(rt);
il=sm.getElementsByTagName(rt)[0];i.async=1;i.src=e+ma[ng]+'.js';il.parentNode.insertBefore(i,il);}})
(document,window,'script','https://app.smartemailing.cz/js/tracking/',['tracker','basic']);
_se.push(['init', 'da1f2dc4-f1a1-11ed-824d-ac1f6bc402ad' ]);

<?php 

if (isset($_SESSION["user"])) {
    if (isset($_SESSION["user"]["contactDetails"])) {
    ?>
        _se.push([ 
            'identify', 
            { 
                contact_data: {
                    emailaddress: "<?php echo $_SESSION["user"]["email"]?>",
                    name: "<?php echo $_SESSION["user"]["contactDetails"]->billingFirstName?>",
                    surname: "<?php echo $_SESSION["user"]["contactDetails"]->billingLastName?>",
                    street: "<?php echo $_SESSION["user"]["contactDetails"]->billingStreet?>",
                    town: "<?php echo $_SESSION["user"]["contactDetails"]->billingCity?>",
                    postalcode: "<?php echo $_SESSION["user"]["contactDetails"]->billingPostcode?>",
                    country: "<?php echo $_SESSION["user"]["contactDetails"]->billingCountryInput?>",
                    cellphone: "<?php echo $_SESSION["user"]["contactDetails"]->billingPhone?>",
                },
                reidentify: true,
                update_existing: true 
            }
        ]);
    <?php 
    } else {
        ?>
        _se.push([ 
            'identify', 
            { 
                contact_data: {
                    emailaddress: "<?php echo $_SESSION["user"]["email"]?>"
                },
                reidentify: true,
                update_existing: true 
            }
        ]);
        <?php
    }

}

?>
</script>