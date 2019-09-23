
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thêm contact</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate
                              method="POST" action="">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Addr <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12" name="addr"
                                           placeholder="Nhập tên comment" required="required" type="text" value="<?= $contact->addr ?>">
                                    <?php if (isset($err['addr'])): ?>
                                        <?php foreach ($err['addr'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Phone <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="text" name="phone"
                                           required="required" placeholder="Mô tả số điện thoại"
                                           class="form-control col-md-7 col-xs-12"  value="<?= $contact->phone ?>">
                                    <?php if (isset($err['phone'])): ?>
                                        <?php foreach ($err['phone'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Email <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="image" name="email" required="required"
                                           class="form-control col-md-7 col-xs-12" placeholder="Nhập email"  value="<?= $contact->email ?>">
                                    <?php if (isset($err['email'])): ?>
                                        <?php foreach ($err['email'] as $item): ?>
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
                                            <input type="checkbox" name="status">Hiển thị
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
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
