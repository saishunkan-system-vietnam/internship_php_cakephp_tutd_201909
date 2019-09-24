<div class="right_col" style="margin: auto" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title" style="text-align: center">
                        <h2 style="text-align: center">Thêm danh sách logo</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" novalidate method="POST"  enctype="multipart/form-data"
                              action="">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Link<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="username" class="form-control col-md-7 col-xs-12"
                                           name="link" placeholder="Nhập link logo"
                                           required="required" type="text" value="<?php if (isset($logoo->link)) echo $logoo->link;  ?>" >
                                    <?php if (isset($err['link'])): ?>
                                        <?php foreach ($err['link'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <div></div>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Text<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="username" class="form-control col-md-7 col-xs-12"
                                           name="text" placeholder="Nhập mô tả logo"
                                           required="required" type="text" value="<?php if (isset($logoo->text)) echo $logoo->text;  ?>" >
                                    <?php if (isset($err['text'])): ?>
                                        <?php foreach ($err['text'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <div></div>
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
                                            <input type="checkbox" name="status">Hiện
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
