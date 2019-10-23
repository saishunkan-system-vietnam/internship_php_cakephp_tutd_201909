<!-- sign up Modal -->
<!-- include the BotDetect layout stylesheet -->
<div class="modal fade" id="myModal_btn" tabindex="-1" role="dialog" aria-labelledby="myModal_btn" aria-hidden="true">
    <div class="agilemodal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register Now</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pt-3 pb-5 px-sm-5">
                <div class="row">
                    <div class="col-md-6 mx-auto align-self-center">
                        <img src="images/p3.png" class="img-fluid" alt="login_image"/>
                    </div>
                    <div class="col-md-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="recipient-name1" class="col-form-label">Your Name</label>
                                <input type="text" class="form-control" placeholder=" " name="name" id="recipient-name1"
                                       value="<?php if (isset($users->name)) echo $users->name; ?>">
                                <?php if (isset($err['name'])): ?>
                                    <?php foreach ($err['name'] as $item): ?>
                                        <div><?= $item ?></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="recipient-email" class="col-form-label">Email</label>
                                <input type="email" class="form-control" placeholder=" " name="email"
                                       id="recipient-email"
                                       value="<?php if (isset($users->email)) echo $users->email; ?>">
                                <?php if (isset($err['email'])): ?>
                                    <?php foreach ($err['email'] as $item): ?>
                                        <div><?= $item ?></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="password1" class="col-form-label">Password</label>
                                <input type="password" class="form-control" placeholder=" " name="password"
                                       id="password1"
                                       value="<?php if (isset($users->password)) echo $users->password; ?>">
                                <?php if (isset($err['password'])): ?>
                                    <?php foreach ($err['password'] as $item): ?>
                                        <div><?= $item ?></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="password2" class="col-form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder=" " name="confirm_password"
                                       id="password2"
                                       value="<?php if (isset($users->confirm_password)) echo $users->confirm_password; ?>">
                                <?php if (isset($err['confirm_password'])): ?>
                                    <?php foreach ($err['confirm_password'] as $item): ?>
                                        <div><?= $item ?></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="right-w3l">
                                <!--                                <input type="submit" class="form-control" value="Register">-->
                                <button class="form-control" style="background-color: deeppink;color: white">Regsiter
                                </button>
                            </div>
                        </form>
                        <p class="text-center mt-3">Already a member?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //signup modal -->
