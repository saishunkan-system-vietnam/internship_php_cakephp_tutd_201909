
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
            <li class="breadcrumb-item active" aria-current="page">Gio Hang</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!--checkout-->
    <?php
    //check xem co hang hay khong
    if ($this->getRequest()->getSession()->check('cart')):
        ?>
    <section class="checkout_wthree py-sm-5 py-3">
        <div class="container">
            <div class="check_w3ls">
                <div class="d-sm-flex justify-content-between mb-4">
                    <h4>review your order
                    </h4>
                    <h4 class="mt-sm-0 mt-3">Your shopping cart contains:
                        <span style="color: red"><?php echo count($cart) ?> Products</span>
                    </h4>
                </div>
                <div class="checkout-right">
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($cart as $pr): ?>
                            <tr class="rem1">
                                <td class="invert"><?php echo $i++; ?></td>
                                <td class="invert-image">
                                    <a href="single_product.html">
                                        <img src="<?= $pr['image'] ?>" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value" name="quantity[]">
                                                <span><?= $pr['quantity'] ?></span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert"><?= $pr['name']; ?></td>

                                <td class="invert"><?php echo $pr['quantity'] * $pr['sale'] ?></td>
                                <td class="invert">
                                    <div class="rem">
                                        <a href="detailclient/remove/<?= $pr['id'] ?>"
                                           onclick="return confirm('Bạn có chắc chăn muốn xóa')">
                                            <div class="close1"></div>
                                        </a>
                                    </div>

                                </td>
                            </tr>

                        <?php endforeach; ?>

                        </tbody>

                    </table>
                    <!--                    <div style="width: 110px;height: 40px;background-color: yellow;font-size: 15px;color: red;line-height: 40px;font-weight: bold;text-align: center;margin-top: 10px;float: left">-->
                    <!--                        <a href="">Xóa sản phẩm</a></div>-->
                    <a href="detailclient/emptycart">
                        <button type="submit" style="height: 40px;font-weight: bold;font-size: 14px;margin-top: 10px;">
                            Làm rỗng giỏ hàng
                        </button>
                    </a>
                    <a href="detailclient/updatecart">
                        <div
                            style="width: 127px;height: 40px;float:right;margin-top:20px;background-color: #BDBDBD;font-size: 12px;font-weight: bold;text-align: center;line-height: 40px">
                            Update giỏ hàng
                        </div>
                    </a>
                </div>
                <div class="row checkout-left mt-5">
                    <div class="col-md-4 checkout-left-basket">
                        <a href="http://localhost:8765"><h4>Continue to basket</h4></a>
                        <ul>
                            <?php foreach ($cart as $sp): ?>
                                <li><?php echo $sp['name'] ?>
                                    <i>- <?= $sp['quantity'] ?></i>
                                    <span><?php echo $sp['sale'] * $sp['quantity'] ?></span>
                                </li>
                            <?php endforeach; ?>
                            <li>Total
                                <i>-</i>
                                <span><?php echo $total ?></span>
                            </li>
                        </ul>
                    </div>
<!--                    --><?php //dd($cart); ?>
                    <div class="col-md-8 address_form">
                        <h4>Billing Address</h4>
                        <form action="" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                            <div class="creditly-wrapper wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Username: </label>
                                            <input class="billing-address-name form-control" type="text" name="username"
                                                   placeholder="Full name">
                                        </div>
                                        <div class="card_number_grids">
                                            <div class="card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Phone:</label>
                                                    <input class="form-control" type="phone" placeholder="Mobile number"
                                                           name="phone">
                                                </div>
                                            </div>
                                            <div class="card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">Email </label>
                                                    <input class="form-control" type="email" placeholder="Email"
                                                           name="email">
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Address </label>
                                            <input class="form-control" type="text" placeholder="Address" name="addr">
                                        </div>

                                        <div class="controls">
                                            <label class="control-label">Note </label>
                                            <!--                                            <input class="form-control" type="text" placeholder="Note">-->
                                            <textarea name="note" placeholder="Note" class="form-control"></textarea>
                                        </div>

                                    </div>
                                    <!--                                    <button class="submit check_out">place order</button>-->
                                    <div class="right-w3l">
                                        <a href=""><input type="submit" class="form-control" value="Đặt hàng" name=""></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>

    <p style="text-align: center;padding-bottom: 20px;word-spacing:2px">Quay về <a href="http://localhost:8765">Trang
            chủ</a> để thêm sản phẩm vào giỏ hàng.<a href="">Xem sản phẩm đã mua.</a></p>
<?php endif; ?>
