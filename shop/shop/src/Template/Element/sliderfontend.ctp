<div class="banner-text">
    <div class="callbacks_container">
        <ul class="rslides" id="slider3">
            <?php foreach ($slider as $slider): ?>
            <li class="banner">
                <div class="container">
                    <h3 class="agile_btxt">
                        <span>f</span>ashion
                        <span>h</span>ub
                    </h3>
                    <h4 class="w3_bbot">shop exclusive clothing</h4>
                    <div class="slider-info mt-sm-5">
                        <h4 class="bn_right">
<!--                            <span>w</span>omen's-->
<!--                            <span>f</span>ashion-->
                           <span><?php echo $slider['text'] ?></span>
                        </h4>
                        <div class="bnr_clip position-relative">
                            <h4>get up to
                                <span class="px-2">45% </span>
                            </h4>
                            <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                <div class="bg-flex-item">
                                    <span>O</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F</span>
                                </div>
                                <div class="bg-flex-item">
                                        <span>F
                                        </span>
                                </div>
                            </div>
                            <p class="text-uppercase py-2">on special sale</p>
                            <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a>
                        </div>
                    </div>
                    <div class="image" style="float:right;margin-top: -600px">
                        <a href=""><img src="<?php echo $slider['image']?>"></a>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
