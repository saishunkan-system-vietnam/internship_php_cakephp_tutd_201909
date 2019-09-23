<div class="right_col" style="margin: auto" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title" style="text-align: center">
                        <h2 style="text-align: center">Thêm danh sách quản trị viên</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" novalidate method="POST"  enctype="multipart/form-data"
                              action="">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="username" class="form-control col-md-7 col-xs-12"
                                           name="username" placeholder="Nhập tên đăng nhập"
                                           required="required" type="text" value="<?php if (isset($users->username)) echo $users->username;  ?>" >
                                    <?php if (isset($err['username'])): ?>
                                        <?php foreach ($err['username'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <div></div>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="email" name="email" required="required"
                                           class="form-control col-md-7 col-xs-12" placeholder="Nhập email của bạn "  value="<?php if (isset($users->email)) echo $users->email;  ?>" >
                                    <?php if (isset($err['email'])): ?>
                                        <?php foreach ($err['email'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="password" class="control-label col-md-3">Password</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="password" type="password" name="password"
                                           class="form-control col-md-7 col-xs-12" required="required"
                                           placeholder="Nhập mật khẩu của bạn "  value="<?php if (isset($users->password)) echo $users->password;  ?>" >
                                    <?php if (isset($err['password'])): ?>
                                        <?php foreach ($err['password'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="tel" id="telephone" name="phone" required="required"
                                           placeholder="Nhập số điện thoại c " class="form-control col-md-7 col-xs-12"  value="<?php if (isset($users->phone)) echo $users->phone;  ?>" >
                                    <?php if (isset($err['phone'])): ?>
                                        <?php foreach ($err['phone'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Address <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                           data-validate-length-range="6"
                                           data-validate-words="2" name="addr" placeholder="Nhập địa chỉ "
                                           required="required" type="text"  value="<?php if (isset($users->addr)) echo $users->addr;  ?>" >
                                    <?php if (isset($err['addr'])): ?>
                                        <?php foreach ($err['addr'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Image <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="image" name="file" required="required"
                                           class="form-control col-md-7 col-xs-12" >
                                    <?php if (isset($err['image'])): ?>
                                        <?php foreach ($err['image'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                </label>

                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="status">Admin
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <?php echo $this->Form->button('Submit', ['class' => 'btn btn-warning']) ?>
                                    <?php echo $this->Html->link('Back', ['action' => 'index'], ['class' => 'btn btn-success']); ?>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
