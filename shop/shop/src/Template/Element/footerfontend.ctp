<footer>
    <div class="footerv2-w3ls">
<!--        <div class="footer-w3lagile-innerr">-->
<!--            <a href=""><img src="images/111.jpg" alt="" style="margin-left: 350px;"></a>-->
<!--        </div>-->
        <div class="container-fluid py-5 footer-copy_w3ls">
            <div class="d-lg-flex justify-content-between">
                <?php foreach ($logolast as $logo): ?>
                    <div class="cpy-right align-self-center">
                      <a href=""><img src="<?php echo $logo['image']?>" style="margin-left: 780px;"> </a>
                        <p><span style="padding-left: 850px"><?php echo $logo['text']?></span></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->
