<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Chào admin!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>Tú Trịnh</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Quản trị</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Quản trị viên <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách quản trị viên',['controller'=>'Users','action'=>'index'])?></li>
<!--                            <li><a href="">Thêm người dùng</a></li>-->
                            <li><?php echo $this->Html->link('Thêm quản trị viên',['controller'=>'Users','action'=>'add'])?></li>

                        </ul>
                    </li>
                </ul>


                <ul class="nav side-menu">
                    <li><a><i class="fa fa-desktop"></i> SideBar <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách slider',['controller'=>'Slider','action'=>'index'])?></li>
                            <!--                            <li><a href="">Thêm người dùng</a></li>-->
                            <li><?php echo $this->Html->link('Thêm slider',['controller'=>'Slider','action'=>'add'])?></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="glyphicon glyphicon-th-list""></i> Comment <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách comment',['controller'=>'Comment','action'=>'index'])?></li>
                            <!--                            <li><a href="">Thêm người dùng</a></li>-->
                            <li><?php echo $this->Html->link('Thêm comment',['controller'=>'Comment','action'=>'add'])?></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="glyphicon glyphicon-envelope"></i> Contatct <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách contact',['controller'=>'Contact','action'=>'index'])?></li>
                            <!--                            <li><a href="">Thêm người dùng</a></li>-->
                            <li><?php echo $this->Html->link('Thêm contact',['controller'=>'Contact','action'=>'add'])?></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="glyphicon glyphicon-user"></i> About <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách about',['controller'=>'About','action'=>'index'])?></li>
                            <!--                            <li><a href="">Thêm người dùng</a></li>-->
                            <li><?php echo $this->Html->link('Thêm about',['controller'=>'About','action'=>'add'])?></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="glyphicon glyphicon-star"></i> Team <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách team',['controller'=>'Team','action'=>'index'])?></li>
                            <!--                            <li><a href="">Thêm người dùng</a></li>-->
                            <li><?php echo $this->Html->link('Thêm team',['controller'=>'Team','action'=>'add'])?></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="glyphicon glyphicon-hand-up"></i> Top_Brands <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách top_brands',['controller'=>'TopBrands','action'=>'index'])?></li>
                            <!--                            <li><a href="">Thêm người dùng</a></li>-->
                            <li><?php echo $this->Html->link('Thêm top_brands',['controller'=>'TopBrands','action'=>'add'])?></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
