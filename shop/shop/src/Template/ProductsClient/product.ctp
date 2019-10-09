<div class="ibanner_w3 pt-sm-5 pt-3">
    <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        <span>f</span>ashion
        <span>h</span>ub</h4>
</div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Women</li>
    </ol>
</nav>

<div class="fh-container mx-auto">
    <div class="row my-lg-5 mb-5">

        <div class="col-lg-9 mt-lg-0 mt-5 right-product-grid" style="margin-left: 210px">
            <!-- card group  -->
            <div class="card-group">
                <?php foreach ($productss as $pr):?>
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="<?= $pr['image'] ?>" alt="img" class="card-img-top" style="height: 350px">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="/pages/detail/<?= $pr['id'] ?>" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->

                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize"><?php echo $pr['product_name'] ?></h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold"><?php echo $pr['sale']?></p>
                                    <p class="line-through"><?php echo $pr['price']?></p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Solid Formal Black Shirt">
                                    <input type="hidden" name="amount" value="40.00">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
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
