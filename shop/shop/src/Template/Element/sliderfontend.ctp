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
                       <?php echo $slider['text']?>
                    </div>
                    <div class="image" style="float:right;">
                        <a href=""><img src="<?php echo $slider['image']?>"></a>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
