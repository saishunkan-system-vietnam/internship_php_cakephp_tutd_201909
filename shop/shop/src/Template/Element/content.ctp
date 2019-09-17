<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Hello Admin <small>đến với trang quản trị</small></h3>
            </div>

            <div class="title_right">
                <form action="<?php echo $this->Url->build(['controller'=>'Users','action'=>'search'])?>" method="get">
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
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <?= $this->fetch('content'); ?>
        </div>
    </div>
</div>
<!-- /page content -->
