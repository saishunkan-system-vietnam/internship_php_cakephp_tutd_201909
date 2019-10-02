<div class="right_col" style="margin: auto" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title" style="text-align: center">
                        <h2 style="text-align: center">Thêm sản phẩm</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" novalidate method="POST"
                              enctype="multipart/form-data"
                              action="">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên sản phẩm<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="username" class="form-control col-md-7 col-xs-12"
                                           name="product_name" placeholder="Nhập tên sản phẩm"
                                           required="required" type="text"
                                           value="<?php if (isset($products->product_name)) echo $products->product_name; ?>">
                                    <?php if (isset($err['products'])): ?>
                                        <?php foreach ($err['products'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <div></div>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Slug<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="username" class="form-control col-md-7 col-xs-12"
                                           name="slug" placeholder="Nhập slug"
                                           required="required" type="text"
                                           value="<?php if (isset($products->slug)) echo $products->slug; ?>">
                                    <?php if (isset($err['slug'])): ?>
                                        <?php foreach ($err['slug'] as $item): ?>
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
                                           class="form-control col-md-7 col-xs-12">
                                    <?php if (isset($err['image'])): ?>
                                        <?php foreach ($err['image'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Gía sản phẩm<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="username" class="form-control col-md-7 col-xs-12"
                                           name="price" placeholder="Nhập giá sản phẩm"
                                           required="required" type="number"
                                           value="<?php if (isset($products->price)) echo $products->price; ?>">
                                    <?php if (isset($err['price'])): ?>
                                        <?php foreach ($err['price'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <div></div>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Gía sale<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="username" class="form-control col-md-7 col-xs-12"
                                           name="sale" placeholder="Nhập giá giảm"
                                           required="required" type="number"
                                           value="<?php if (isset($products->sale)) echo $products->sale; ?>">
                                    <?php if (isset($err['sale'])): ?>
                                        <?php foreach ($err['sale'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <div></div>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Mô tả sản phẩm<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="ckeditor1" name="description" required="required" placeholder="Mô tả content" ><?php if (isset($products->description)) echo $products->description;?></textarea>
                                    <?php if (isset($err['description'])): ?>
                                        <?php foreach ($err['description'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <div></div>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Size sản phẩm<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="checkbox" name="size[]" value="1" style="padding-right: 20px" checked>M
                                    <input type="checkbox" name="size[]" value="2"> L
                                    <input type="checkbox" name="size[]" value="3"> XL
                                    <?php if (isset($err['sale'])): ?>
                                        <?php foreach ($err['sale'] as $item): ?>
                                            <div><?= $item ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <div></div>
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Danh mục sản
                                    phẩm<span
                                        class="required">*</span>
                                </label>
                                <select name="categories_id" class="col-md-6 col-sm-6 col-xs-12">
                                    <option value="">Chọn một</option>
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
            echo '<option value="' . $item->id . '" checked="checked">' . $char . $item->name . '</option>';
            unset($categories[$key]);
            showCategories($categories, $item->id, $char . '--');
        }
    }
}
?>
<!-- /page content -->
<script src="<?php echo SITE_URL; ?>js/ckeditor/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor3');

</script>
