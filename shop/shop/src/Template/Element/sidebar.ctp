<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Chào <span style="color: greenyellow;font-weight: bold"><?php echo  $session['username']  ?>!</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?= $session['image'] ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= $session['username']?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br/>
        <!-- idebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Quản trị</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Quản trị viên <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách quản trị viên', ['controller' => 'User', 'action' => 'index']) ?></li>
                            <li><?php echo $this->Html->link('Thêm quản trị viên', ['controller' => 'User', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Quản lý danh mục <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách danh muc', ['controller' => 'Categories', 'action' => 'index']) ?></li>
                            <li><?php echo $this->Html->link('Thêm danh mục', ['controller' => 'Categories', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="fa fa-desktop"></i> SideBar <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách slider', ['controller' => 'Slider', 'action' => 'index']) ?></li>
                            <li><?php echo $this->Html->link('Thêm slider', ['controller' => 'Slider', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li><a><i class="glyphicon glyphicon-th-list""></i> Comment <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách comment', ['controller' => 'Comment', 'action' => 'index']) ?></li>
                            <li><?php echo $this->Html->link('Thêm comment', ['controller' => 'Comment', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li><a><i class="glyphicon glyphicon-envelope"></i> Contatct <span
                                class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách contact', ['controller' => 'Contact', 'action' => 'index']) ?></li>
                            <li><?php echo $this->Html->link('Thêm contact', ['controller' => 'Contact', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li><a><i class="glyphicon glyphicon-user"></i> About <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách about', ['controller' => 'About', 'action' => 'index']) ?></li>
                            ->
                            <li><?php echo $this->Html->link('Thêm about', ['controller' => 'About', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li><a><i class="glyphicon glyphicon-star"></i> Blog <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách blog', ['controller' => 'Blogs', 'action' => 'index']) ?></li>
                            <li><?php echo $this->Html->link('Thêm blogs', ['controller' => 'Blogs', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li><a><i class="glyphicon glyphicon-hand-up"></i> Shopon <span
                                class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách ', ['controller' => 'Shopon', 'action' => 'index']) ?></li>
                            <li><?php echo $this->Html->link('Thêm ', ['controller' => 'Shopon', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="glyphicon glyphicon-hand-up"></i> Represent <span
                                class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Danh sách ', ['controller' => 'Represent', 'action' => 'index']) ?></li>
                            <li><?php echo $this->Html->link('Thêm ', ['controller' => 'Represent', 'action' => 'add']) ?></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="glyphicon glyphicon-hand-up"></i> Setting <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><?php echo $this->Html->link('Logo ', ['controller' => 'Logo', 'action' => 'index']) ?>
                                <ul class="nav child_menu">
                                    <li><?php echo $this->Html->link('Danh sách ', ['controller' => 'Logo', 'action' => 'index']) ?></li>
                                    <li><?php echo $this->Html->link('Thêm ', ['controller' => 'Logo', 'action' => 'add']) ?></li>
                                </ul>
                            </li>
                            <li><?php echo $this->Html->link('Payment ', ['controller' => 'Payment', 'action' => 'index']) ?>
                                <ul class="nav child_menu">
                                    <li><?php echo $this->Html->link('Danh sách ', ['controller' => 'Payment', 'action' => 'index']) ?></li>
                                    <li><?php echo $this->Html->link('Thêm ', ['controller' => 'Payment', 'action' => 'add']) ?></li>
                                </ul>
                            </li>

                            <li><?php echo $this->Html->link('Logolast ', ['controller' => 'Logolast', 'action' => 'index']) ?>
                                <ul class="nav child_menu">
                                    <li><?php echo $this->Html->link('Danh sách ', ['controller' => 'Logolast', 'action' => 'index']) ?></li>
                                    <li><?php echo $this->Html->link('Thêm ', ['controller' => 'Logolast', 'action' => 'add']) ?></li>
                                </ul>
                            </li>
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
