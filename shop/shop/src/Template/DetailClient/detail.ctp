<?php
namespace App\Http\Session;

use Cake\Core\Configure;
use Cake\Http\Session;
use Cake\Http\Session\DatabaseSession;

?>

<?php
?>
<div class="ibanner_w3 pt-sm-5 pt-3">
    <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        <span>f</span>ashion
        <span>h</span>ub</h4>
</div>
<!-- //inner banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="men.html">Men's Clothing</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Single Product</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- Single -->
<div class="innerf-pages section py-5">
    <div class="container">
        <div class="row my-sm-5">
            <div class="col-lg-4 single-right-left">
                <div class="grid images_3_of_2">
                    <div class="flexslider1">
                        <ul class="slides">
                            <li data-thumb="<?php echo $products->image ?>">
                                <div class="thumb-image">
                                    <img src="<?php echo $products['image'] ?>" data-imagezoom="true" alt=" "
                                         class="img-fluid"></div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                <h3><?php echo $products['product_name'] ?></h3>
                </h3>
                <div class="caption">

                    <ul class="rating-single">
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <h6>
                        <?php echo number_format($products['sale'],'3',',',',') ?></h6>
                </div>
                <div class="desc_single">
                    <h5>Mô tả</h5>
                    <p><?php echo $products->description;?></p>
                </div>
                <div class="d-sm-flex justify-content-between">
                </div>
                <div class="occasion-cart">
                    <div class="chr single-item single_page_b">
                        <form action="" method="get">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value=" Formal Men's Blazer">
                            <input type="hidden" name="amount" value="15.99">
                            <button type="button" class="hub-cart phub-cart btn">
                                <a href=""
                                   onclick="return confirm('Bạn muốn thêm vào giỏ hàng.')"> <i
                                        class="fa fa-cart-plus"
                                        aria-hidden="true">Thêm giỏ
                                        hàng</i></a>
                            </button>
                            <a href="" data-toggle="modal" data-target="#myModal1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /new_arrivals -->
<div class="section singlep_btm pb-5">
    <div class="container">
        <div class="new_arrivals">
            <h4 class="rad-txt text-capitalize" style="color: #22dd99;font-weight: bold">Sản phẩm mới nhất
            </h4>
            <!-- card group 2 -->
            <div class="card-group my-5">
                <!-- card -->
                <?php foreach ($relate as $relate): ?>
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="<?php echo $relate['image'] ?>" alt="img" class="card-img-top" style="height: 350px">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/pages/detail/<?= $relate['id'] ?>" class="link-product-add-cart">Quick
                                            View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize"
                                    style="font-weight: bold"><?php echo $relate['product_name'] ?></h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$<?php echo $relate['sale'] ?></p>
                                    <p class="line-through">$<?php echo $relate['price'] ?></p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Black Casual Men's Blazer">
                                    <input type="hidden" name="amount" value="20.00">
                                    <button type="button" class="hub-cart phub-cart btn">
                                        <a href="/detailclient/addToCart/<?= $products['id'] ?>"> <i
                                                class="fa fa-cart-plus" aria-hidden="true">Thêm giỏ hàng</i></a>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </div>
</div>

