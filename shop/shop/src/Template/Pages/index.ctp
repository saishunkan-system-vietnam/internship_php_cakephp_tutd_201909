<section class="tabs_pro py-md-5 pt-sm-3 pb-5">
    <h5 class="head_agileinfo text-center text-capitalize pb-5">
        <span>s</span><span style="color: greenyellow">mart</span> <span style="color: red">C</span><span
            style="color: #2196F3">lothing</span></h5>
    <div class="tabs tabs-style-line pt-md-5">
        <nav class="container">
            <ul id="clothing-nav" class="nav nav-tabs tabs-style-line" role="tablist">
                <?php foreach ($title as $title): ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="" id="women-tab" role="tab" data-toggle="tab"
                           aria-controls="women" aria-expanded="true"><?php echo $title['name'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <!-- Content Panel -->
        <div id="clothing-nav-content" class="tab-content py-sm-5">
            <div role="tabpanel" class="tab-pane fade show active" id="women" aria-labelledby="women-tab">
                <div id="owl-demo" class="owl-carousel text-center">
                    <?php foreach ($products as $products): ?>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="<?php echo $products['image'] ?>" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="/pages/detail/<?= $products['id'] ?>"
                                               class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize"><?php echo $products['product_name'] ?></h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$<?php echo $products['sale'] ?></p>
                                        <p class="line-through">$<?php echo $products['price'] ?></p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Self Design Women's Tunic">
                                        <input type="hidden" name="amount" value="28.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                    <?php endforeach; ?>

                    <div class="item">
                        <div class="product-men p-3 text-center">
                            <img src="images/p2.png" class="img-responsive" alt=""/>
                            <a href="women.html" class="btn btn-lg bg-info text-white">view more</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- //product tabs -->
<!-- insta posts -->
<section class="py-lg-5">
    <!-- insta posts -->
    <h5 class="head_agileinfo text-center text-capitalize pb-5">
        <span>s</span><span style="color: #22dd99">hop</span> <span style="color: yellow">on</span> <span
            style="color: deeppink">insta</span></h5>
    <div class="gallery row no-gutters pt-lg-5">
        <?php foreach ($shopon as $shop): ?>
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="<?= $shop['image'] ?>" class="img-fluid" alt=""/>
                <div class="gallery-item-info">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>





