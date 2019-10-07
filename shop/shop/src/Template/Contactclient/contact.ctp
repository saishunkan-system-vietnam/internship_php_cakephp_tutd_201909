<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- contact -->
<section class="wthree-row pt-3 pb-sm-5 w3-contact">
    <div class="container py-sm-5 pb-5">
        <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span>C</span>ontact us</h5>
        <div class="row contact-form pt-lg-5">
            <div class="col-lg-6 wthree-form-left">
                <!-- contact form grid -->
                <div class="contact-top1">
                    <h5 class="text-dark mb-4 text-capitalize">send us a note</h5>
                    <form action="#" method="get" class="f-color">
                        <div class="form-group">
                            <label for="contactusername">Name</label>
                            <input type="text" class="form-control" id="contactusername" required>
                        </div>
                        <div class="form-group">
                            <label for="contactemail">Email</label>
                            <input type="email" class="form-control" id="contactemail" required>
                        </div>
                        <div class="form-group">
                            <label for="contactcomment">Your Message</label>
                            <textarea class="form-control" rows="5" id="contactcomment" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-info btn-block">Submit</button>
                    </form>
                </div>
                <!--  //contact form grid ends here -->
            </div>
            <!-- contact details -->
            <?php foreach ($contact as $contact): ?>
            <div class="col-lg-6 contact-bottom pl-5 mt-lg-0 mt-5">
                <!-- contact details grid1-->
                <div class="address">
                    <h5 class="pb-3 text-capitalize">Address</h5>
                    <address>
                        <p class="c-txt"><?php echo $contact->addr ?></p>
                    </address>
                </div>
                <!-- contact details grid2-->
                <div class="address my-5">
                    <h5 class="pb-3 text-capitalize">phone</h5>
                    <p>
                        0<?php echo $contact->phone;?></p>
                </div>
                <!-- contact details grid3 -->
                <div class="address mt-md-0 mt-3">
                    <h5 class="pb-3 text-capitalize">Email</h5>
                    <p>
                        <a href="mailto:info@example.com"><?php echo $contact['email']?></a>
                    </p>

                </div>
                <!-- //contact details row ends here -->
            </div>
        </div>
        <!-- //contact details container -->
    </div>
    <?php endforeach; ?>
    <!-- contact map grid -->
    <div class="map contact-right pb-5">
        <div class="pt-lg-5 bg-pricemain text-center">
            <h3 class="stat-title text-capitalize pb-5">get directions</h3>
            <span class="w3-line"></span>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6530942371137!2d105.79295021540261!3d21.046562192545267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3ab8f75a7f%3A0x9140d41f31595d1e!2zMTA2IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBOZ2jEqWEgxJDDtCwgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1570181934895!5m2!1svi!2s"
            allowfullscreen></iframe>
    </div>
    <!--//contact map grid ends here-->
</section>
