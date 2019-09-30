
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thêm blogs</h2>
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
                                           placeholder="Nhập tên title" required="required" type="text" value="<?php if (isset($blogs->title)) echo $blogs->title;  ?>">
                                    <?php if (isset($err['title'])): ?>
                                        <?php foreach ($err['title'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Description <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="ckeditor1" name="description" required="required" placeholder="Mô tả content" ><?php if (isset($blogs->description)) echo $blogs->description;?></textarea>
                                    <?php if (isset($err['description'])): ?>
                                        <?php foreach ($err['description'] as $item): ?>
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
                                    <textarea id="ckeditor" name="content" required="required" placeholder="Mô tả content" ><?php if (isset($blogs->content)) echo $blogs->content;?></textarea>
                                    <?php if (isset($err['content'])): ?>
                                        <?php foreach ($err['content'] as $item): ?>
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
                                           class="form-control col-md-7 col-xs-12">
                                    <?php if (isset($err['image'])): ?>
                                        <?php foreach ($err['image'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
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
<script src="<?php echo SITE_URL; ?>js/ckeditor/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor3');

</script>
