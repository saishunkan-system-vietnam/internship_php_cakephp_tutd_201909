<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh sách slider</h2>
            <ul class="nav navbar-right panel_toolbox">
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <form method="post">
                    <p>
                        <button type="submit"
                                formaction="<?php echo $this->Url->build(['controller' => 'Slider', 'action' => 'deleteselected']); ?>"
                                class="btn btn-danger">Delete Selected
                        </button>
                    </p>
                </form>
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th>
                            <input type="checkbox" id="check-all" class="flat selectall">
                        </th>
                        <th class="column-title">Id</th>
                        <th class="column-title">Name</th>
                        <th class="column-title">Link</th>
                        <th class="column-title">Image</th>
                        <th class="column-title">Status</th>
                        <th class="column-title no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($slider as $slider):
                        ?>

                        <tr class="even pointer">
                            <td class="a-center ">
                                <input type="checkbox" class="flat selectbox" name="ids[]"
                                       value="<?php echo $slider->id ?>">
                            </td>
                            <td class=""><?php echo $slider->id; ?></td>
                            <td class=""><?php echo $slider->name; ?></td>
                            <td class=""><?php echo $slider->link; ?></i></td>

                            <td><img src="<?php echo $slider->image; ?>" style="width: 60px;height: 60px"></td>
                            <td class="">
                                <?php if ($slider->status == 0): ?>
                                    <span style="color: red">Ân</span>
                                <?php else: ?>
                                    <span style="color: green">Hiển</span>
                                <?php endif; ?>

                            </td>
                            <td class=" last">
                                <a href="/admin/slider/edit/<?= $slider->id ?>">Edit | </a>
                                <a href="/admin/slider/delete/<?= $slider->id ?>"
                                   onclick="return confirm('Bạn có chắc chăn muốn xóa')">Delete</a>

                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
$paginator = $this->Paginator->setTemplates([
    'number' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
    'current' => '<li class="page-item active"><a href="{{url}}" class="page-link">{{text}}</a></li>',
    'first' => '<li class="page-item"><a href="{{url}}" class="page-link">&laquo;</a></li>',
    'last' => '<li class="page-item"><a href="{{url}}" class="page-link">&raquo;</a></li>',
    'prevActive' => '<li class="page-item"><a href="{{url}}" class="page-link">&lt;</a></li>',
    'nextActive' => '<li class="page-item"><a href="{{url}}" class="page-link">&gt;</a></li>'
]);
?>
<nav>
    <ul class="pagination" style="margin-left: 700px;display: block">
        <?php
        echo $paginator->first();
        if ($paginator->hasPrev()) {
            echo $paginator->prev();
        }
        echo $paginator->numbers();
        if ($paginator->hasNext()) {
            echo $paginator->next();
        }
        echo $paginator->last();
        ?>

    </ul>
</nav>

