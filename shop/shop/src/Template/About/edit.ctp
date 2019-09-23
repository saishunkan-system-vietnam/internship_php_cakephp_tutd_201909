<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thêm about</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate
                              method="POST" action="">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12" name="title"
                                           placeholder="Nhập tên title" required="required" type="text" value="<?php if (isset($about->title)) echo $about->title;  ?>">
                                    <?php if (isset($err['title'])): ?>
                                        <?php foreach ($err['title'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Content <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="link" name="content" required="required"
                                           class="form-control col-md-7 col-xs-12" placeholder="Nhập content" value="<?php if (isset($about->content)) echo $about->content;  ?>">
                                    <?php if (isset($err['content'])): ?>
                                        <?php foreach ($err['content'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Creator <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="text" name="creator"
                                           required="required" placeholder="Nhập người tạo"
                                           class="form-control col-md-7 col-xs-12" value="<?php if (isset($about->creator)) echo $about->creator;  ?>">
                                    <?php if (isset($err['creator'])): ?>
                                        <?php foreach ($err['creator'] as $item): ?>
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
