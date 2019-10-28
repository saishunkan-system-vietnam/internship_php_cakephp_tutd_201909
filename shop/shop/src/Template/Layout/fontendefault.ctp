<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Fashion Hub Ecommerce Category Bootstrap Responsive Website Template| Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <!--    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">-->
    <?php echo $this->Html->css('bootstrap.css') ?>
    <!-- shop css -->
    <!--    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">-->
    <?php echo $this->Html->css('shop.css') ?>
    <!--    <link rel="stylesheet" href="css/owl.carousel.min.css">-->
    <?php echo $this->Html->css('owl.carousel.min.css') ?>
    <!-- Owl-Carousel-CSS -->
    <!--    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">-->
    <?php echo $this->Html->css('style.css') ?>
    <!-- font-awesome icons -->
    <!--    <link href="css/fontawesome-all.min.css" rel="stylesheet">-->
    <?php echo $this->Html->css('fontawesome-all.min.css') ?>
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="font/fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link
        href="font/fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i"
        rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
<?php echo $this->element('headerfontend'); ?>
<?php echo $this->element('sliderfontend'); ?>
<?php echo $this->element('top_content'); ?>
<?php echo $this->fetch('content'); ?>
<?php echo $this->element('footerfontend'); ?>
<?php echo $this->element('register'); ?>
<?php echo $this->element('login'); ?>
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- script for show signin and signup modal -->
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        $("#myModal_btn").modal();-->
<!--    });-->
<!--</script>-->
<!-- //script for show signin and signup modal -->
<!-- smooth dropdown -->
<script>
    $(document).ready(function () {
        $('ul li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
        });
    });
</script>
<!-- //smooth dropdown -->
<!-- script for password match -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- script for password match -->
<!-- Banner Responsiveslides -->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: false,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- // Banner Responsiveslides -->
<!-- Product slider Owl-Carousel-JavaScript -->
<script src="js/owl.carousel.js"></script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: false,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        responsive: {
            320: {
                items: 1,
            },
            568: {
                items: 2,
            },
            991: {
                items: 3,
            },
            1050: {
                items: 4
            }
        }
    });
</script>
<!-- //Product slider Owl-Carousel-JavaScript -->
<!-- cart-js -->
<script src="js/minicart.js">
    <!--    --><?php //echo $this->Html->script('minicart.js')?>
</script>
<script>
    hub.render();

    hub.cart.on('new_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
            }
        }
    });
</script>
<!-- //cart-js -->
<!-- start-smooth-scrolling -->
<!--<script src="js/move-top.js"></script>-->
<?php echo $this->Html->script('move-top.js') ?>
<!--<script src="js/easing.js"></script>-->
<?php echo $this->Html->script('easing.js') ?>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!--<script src="js/SmoothScroll.min.js"></script>-->
<?php echo $this->Html->script('SmoothScroll.min.js') ?>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="js/bootstrap.js"></script>-->
<?php echo $this->Html->script('bootstrap.js') ?>
</body>

</html>
