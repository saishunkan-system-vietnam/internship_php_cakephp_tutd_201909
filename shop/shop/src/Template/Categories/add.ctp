<div class="right_col" style="margin: auto" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title" style="text-align: center">
                        <h2 style="text-align: center">Thêm danh mục</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" novalidate method="POST"
                              enctype="multipart/form-data"
                              action="">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="username" class="form-control col-md-7 col-xs-12"
                                           name="name" placeholder="Nhập tên danh mục"
                                           required="required" type="text"
                                           value="<?php if (isset($cate->name)) echo $cate->name; ?>">
                                    <?php if (isset($err['name'])): ?>
                                        <?php foreach ($err['name'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <div></div>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Slug <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="slug" class="form-control col-md-7 col-xs-12"
                                           name="slug" placeholder="Nhập tên slug"
                                           required="required" type="text"
                                           value="<?php if (isset($cate->slug)) echo $cate->slug; ?>">
                                    <?php if (isset($err['slug'])): ?>
                                        <?php foreach ($err['slug'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <div></div>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Parent category
                                    <span
                                        class="required">*</span>
                                </label>
                                <select name="parent_id" class="control-label col-md-3 col-sm-3 col-xs-12">
                                    <option value="0">Parent</option>
                                  <?php showCategories($catee); ?>
                                </select>
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
<?php
function showCategories($categories, $parent_id = 0, $char = '')
{
    foreach ($categories as $key => $item) {
        if ($item->parent_id == $parent_id) {
            echo '<option value="' . $item->id . '">' . $char . $item->name . '</option>';
            unset($categories[$key]);
            showCategories($categories, $item->id, $char . '--');
        }
    }
}
?>
