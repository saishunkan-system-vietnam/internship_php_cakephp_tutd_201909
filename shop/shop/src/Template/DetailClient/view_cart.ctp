<?php
//check xem co hang hay khong
if ($this->getRequest()->getSession()->check('cart')):
    ?>

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
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!--checkout-->
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
                                            <div class="entry value">
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
                                        <div class="close1"></div>
                                    </div>

                                </td>
                            </tr>

                        <?php endforeach; ?>

                        </tbody>

                    </table>
                    <div style="width: 110px;height: 40px;background-color: yellow;font-size: 15px;color: red;line-height: 40px;font-weight: bold;text-align: center;margin-top: 10px;float: left">
                        <a href="">Xóa sản phẩm</a></div>

                    <div style="width: 160px;height: 40px;background-color: red;font-size: 15px;color: white;line-height: 40px;font-weight: bold;text-align: center;margin-top: 10px;float: right">
                        <a href="">Update sản phẩm</a></div>
                </div>
                <div class="row checkout-left mt-5">
                    <div class="col-md-4 checkout-left-basket">
                        <a href="http://localhost:8765"><h4>Continue to basket</h4></a>
                        <ul>
                            <?php foreach ($cart as $sp): ?>
                                <li><?php echo $sp['name'] ?>
                                    <i>- <?= $sp['quantity'] ?></i>
                                    <span><?php echo $pr['quantity'] * $pr['sale'] ?> </span>
                                </li>
                            <?php endforeach; ?>
                            <li>Total
                                <i>-</i>
                                <span><?php echo $total ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 address_form">
                        <h4>Billing Address</h4>
                        <form action="payment.html" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                            <div class="creditly-wrapper wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Full name: </label>
                                            <input class="billing-address-name form-control" type="text" name="name"
                                                   placeholder="Full name">
                                        </div>
                                        <div class="card_number_grids">
                                            <div class="card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Mobile number:</label>
                                                    <input class="form-control" type="text" placeholder="Mobile number">
                                                </div>
                                            </div>
                                            <div class="card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">Landmark: </label>
                                                    <input class="form-control" type="text" placeholder="Landmark">
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Town/City: </label>
                                            <input class="form-control" type="text" placeholder="Town/City">
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Address type: </label>
                                            <select class="form-control option-fieldf">
                                                <option>Office</option>
                                                <option>Home</option>
                                                <option>Commercial</option>

                                            </select>
                                        </div>
                                    </div>
                                    <button class="submit check_out">place order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    Quay ve <?php $this->Html->link('trang chu', '/') ?> de tham sach vao gio hang.
<?php endif; ?>
