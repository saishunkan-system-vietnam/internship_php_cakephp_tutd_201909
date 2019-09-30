<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh sách Danh mục</h2>
            <ul class="nav navbar-right panel_toolbox">
            </ul>
            <div class="title_right">
                <form action="<?php echo $this->Url->build(['controller' => 'Categories', 'action' => 'search']) ?>"
                      method="get">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search for..." name="q">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <form method="post">
                    <p>
                        <button type="submit"
                                formaction="
                <?php echo $this->Url->build(['action' => 'deleteselected']); ?>"
                                class="btn btn-danger">Delete Selected
                        </button>
                    </p>
                </form>
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">

                        <th class="column-title">Id</th>
                        <th class="column-title">Name</th>
                        <th class="column-title">Slug</th>
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
                    <?php TableCategories($cate); ?>
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


<?php
function TableCategories($categories, $parent_id = 0, $char = '')
{
    foreach ($categories as $key => $item) {
        // Nếu là chuyên mục con thì hiển thị
        if ($item->parent_id == $parent_id) {
            echo '<tr>';
            echo '<td>' . $item->id . '</td>';
            echo '<td>' . $char . $item->name . '</td>';
            echo '<td>' . $item->slug . '</td>';
            echo '<td>' . $item->status . '</td>';
            echo '<td>';
            echo '<a href="/admin/categories/edit/' .$item->id. '">Edit | </a>
                               <a href="/admin/categories/delete/' .$item->id. '?>"
                          onclick="return confirm(\'Bạn có chắc chăn muốn xóa\')">Delete</a>';
            echo '</td>';
            echo '</tr>';
            // Xóa chuyên mục đã lặp
            unset($categories[$key]);
            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            TableCategories($categories, $item->id, $char . '- - - ');
        }
    }
}

?>
