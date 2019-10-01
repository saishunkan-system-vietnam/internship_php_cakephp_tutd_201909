<div class="agileits-services" id="services">
    <div class="no-gutters agileits-services-row row">
        <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
            <span class="fas fa-sync-alt p-4"></span>
            <h4 class="mt-2 mb-3">30 days replacement</h4>
        </div>
        <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
            <span class="fas fa-gift p-4"></span>
            <h4 class="mt-2 mb-3">Gift Card</h4>
        </div>

        <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
            <span class="fas fa-lock p-4"></span>
            <h4 class="mt-2 mb-3">secure payments</h4>
        </div>
        <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
            <span class="fas fa-shipping-fast p-4"></span>
            <h4 class="mt-2 mb-3">free shipping</h4>
        </div>
    </div>
</div>
<!-- //services-->
<!-- about -->
<div class="row no-gutters pb-5">
    <?php foreach ($represent as $represent): ?>
    <div class="col-sm-4">
        <div class="hovereffect">
            <img class="img-fluid" src="<?php echo $represent['image']?>" alt="">
            <div class="overlay">
                <h5><?php echo $represent['name']?></h5>
                <a class="info" href="women.html">Shop Now</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
