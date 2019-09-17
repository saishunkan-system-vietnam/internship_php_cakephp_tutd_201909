
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

                        <form class="form-horizontal form-label-left" novalidate method="POST" action="">


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                           name="username" placeholder="Nhập tên đăng nhập"
                                           required="required" type="text" value="<?= $user->username; ?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="email" name="email" required="required"
                                           class="form-control col-md-7 col-xs-12" placeholder="Nhập email của bạn" value="<?= $user->email; ?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="password" class="control-label col-md-3">Password</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="password" type="password" name="password"
                                           class="form-control col-md-7 col-xs-12" required="required"
                                           placeholder="Nhập mật khẩu của bạn " value="<?= $user->password; ?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat
                                    Password</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="password2" type="password" name="password2"
                                           data-validate-linked="password"
                                           class="form-control col-md-7 col-xs-12" required="required"
                                           placeholder="Nhập lại mật khẩu của bạn "  value="<?= $user->password; ?>">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="tel" id="telephone" name="phone" required="required"
                                           placeholder="Nhập số điện thoại c " class="form-control col-md-7 col-xs-12"  value="<?= $user->phone; ?>">
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
                                           required="required" type="text"  value="<?= $user->addr; ?>">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
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
