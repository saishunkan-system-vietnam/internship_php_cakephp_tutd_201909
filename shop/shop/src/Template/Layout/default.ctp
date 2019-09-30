<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Shop';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- Bootstrap -->
    <link href="<?php echo SITE_URL; ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo SITE_URL; ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo SITE_URL; ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo SITE_URL; ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link
        href="<?php echo SITE_URL; ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo SITE_URL; ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo SITE_URL; ?>vendors/bootstrap-daterangepicker/daterangepicker.css"
          rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo SITE_URL; ?>build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php if ($logedIn): ?>
        <?php echo $this->element('sidebar'); ?>
        <?php echo $this->element('top_bar'); ?>
        <?php echo $this->element('content'); ?>
        <?php echo $this->element('footer'); ?>
       <?php endif; ?>
    </div>
</div>
<!-- jQuery -->
<script src="<?php echo SITE_URL; ?>ckeditor/ckeditor/ckeditor.js"></script>
<script src="<?php echo SITE_URL; ?>vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo SITE_URL; ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo SITE_URL; ?>vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo SITE_URL; ?>vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="<?php echo SITE_URL; ?>vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?php echo SITE_URL; ?>vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script
    src="<?php echo SITE_URL; ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?php echo SITE_URL; ?>vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?php echo SITE_URL; ?>vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?php echo SITE_URL; ?>vendors/Flot/jquery.flot.js"></script>
<script src="<?php echo SITE_URL; ?>vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?php echo SITE_URL; ?>vendors/Flot/jquery.flot.time.js"></script>
<script src="<?php echo SITE_URL; ?>vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?php echo SITE_URL; ?>vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?php echo SITE_URL; ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?php echo SITE_URL; ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?php echo SITE_URL; ?>vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?php echo SITE_URL; ?>vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="<?php echo SITE_URL; ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?php echo SITE_URL; ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?php echo SITE_URL; ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo SITE_URL; ?>vendors/moment/min/moment.min.js"></script>
<script src="<?php echo SITE_URL; ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo SITE_URL; ?>build/js/custom.min.js"></script>
</body>
</html>
