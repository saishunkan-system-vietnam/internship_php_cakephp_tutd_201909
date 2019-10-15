<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh sách logo</h2>
            <ul class="nav navbar-right panel_toolbox">
            </ul>
            <div class="title_right">
                <form action="<?php echo $this->Url->build(['controller' => 'Orders', 'action' => 'search']) ?>"
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
                                formaction="<?php echo $this->Url->build(['action' => 'deleteselected']); ?>"
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
                        <th class="column-title">Sản phẩm</th>
                        <th class="column-title">Total</th>
                        <th class="column-title">Name</th>
                        <th class="column-title">Phone</th>
                        <th class="column-title">Email</th>
                        <th class="column-title">Địa chỉ</th>
                        <th class="column-title">Ghi chú</th>
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
                    foreach ($orders as $orders):
                        ?>
                        <tr class="even pointer">
                            <td class="a-center ">
                                <input type="checkbox" class="flat selectbox" name="ids[]"
                                       value="<?php echo $orders->id ?>">
                            </td>
                            <td class=" "><?php echo $orders->id; ?></td>
                            <?php $t = 0; ?>
                            <td class=" "><?php foreach (json_decode($orders->order_info) as $o): ?>
                                    <p style="color: black;font-weight: bold;font-size: 12px"><?php echo $t++; ?></p>
                                    <p><strong>Name</strong> :<?= $o->name ?></p>
                                    <p><strong>Price</strong> :<?= $o->sale ?></p>
                                    <p>Ảnh<img style="width: 50px;height: 60px;margin-left: 10px"
                                               src="<?php echo $o->image; ?>"></p>
                                    <p><strong>Số lượng</strong> :<?= $o->quantity ?></p>
                                    -------------------------
                                <?php endforeach; ?>
                            </td>
                            <td class=" "><?php echo $orders->total; ?></td>
                            <td class=" "><?php echo $orders->username; ?></td>
                            <td class=" "><?php echo $orders->phone; ?></td>
                            <td class=" "><?php echo $orders->email; ?></td>
                            <td class=" "><?php echo $orders->addr; ?></td>
                            <td class=" "><?php echo $orders->note; ?></td>
                            <td class="">
                                <?php if ($orders->status == 0): ?>
                                    <span style="color: red">Chưa xử lý</span>
                                <?php else: ?>
                                    <span style="color: green">Đã xử lý</span>
                                <?php endif; ?>
                            </td>
                            <td class=" last">
                                <a href="/admin/logo/edit/<?= $orders->id ?>" class="badge badge-success"
                                   style="background-color: #22dd99">Edit </a>
                                <a href="/admin/logo/delete/<?= $orders->id ?>"
                                   onclick="return confirm('Bạn có chắc chăn muốn xóa')" class="badge badge-danger"
                                   style="background-color: #a61717">Delete</a>
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


