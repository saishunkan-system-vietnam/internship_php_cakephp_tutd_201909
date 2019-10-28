<?php if (!isset($dataUserLogin)):
    ?>
    <header>
        <div class="container">
            <!-- top nav -->
            <nav class="top_nav d-flex pt-3 pb-1">
                <!-- logo -->
                <?php foreach ($logo as $logo): ?>
                    <h1>
                        <a class="navbar-brand" href="http://localhost:8765">
                            <img src="<?php echo $logo['image'] ?>">
                        </a>
                    </h1>
                <?php endforeach; ?>
                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    <div class="nav-icon d-flex">
                        <a class="text-dark login_btn align-self-center mx-3" href="" data-toggle="modal"
                           data-target="#myModal_btn">
                            <i class="far fa-user"></i>
                        </a>
                        <a href="" data-toggle="modal" data-target="#exampleModal1"
                           class="text-dark login_btn align-self-center mx-3">
                            <i class="far fa-heart"></i></a>
                        <div class="cart-mainf">
                            <div class="hubcart hubcart2 cart cart box_1">
                                <a href="/cart">
                                    <button class="btn top_hub_cart mt-1" type="submit" name="submit" value=""
                                            title="Cart">
                                        <i class="fas fa-shopping-bag"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <ul class="navbar-nav mx-auto text-center">
                            <li class="nav-item">
                                <a class="nav-link  active" href="index.html">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>

                            <?php /*endforeach; */ ?>
                            <?php showMenu($menu_new); ?>
                            <li class="nav-item" style="margin-left: 15px">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                        </ul>
                </div>
        </div>
        </nav>
        <!-- //bottom nav -->
        </div>
        <!-- //header container -->
    </header>
<?php else: ?>
    <p style="text-align: right;padding-right: 500px;color: red;font-weight: bold;padding-top: 16px">Xin chào : <span
            style="color: #22dd99"><?php if (isset($dataUserLogin->email)) echo $dataUserLogin->email ?></span>|<a
            href="/pages/logout/<?= $dataUserLogin->id ?>">Thoát</a>
    </p>
    <header>
        <div class="container">
            <!-- top nav -->
            <nav class="top_nav d-flex pt-3 pb-1">
                <!-- logo -->
                <?php foreach ($logo as $logo): ?>
                    <h1>
                        <a class="navbar-brand" href="http://localhost:8765">
                            <img src="<?php echo $logo['image'] ?>">
                        </a>
                    </h1>
                <?php endforeach; ?>
                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    <div class="nav-icon d-flex">
                        <!-- sigin and sign up -->
                        <a class="text-dark login_btn align-self-center mx-3" href="" data-toggle="modal"
                           data-target="#myModal_btn">
                            <i class="far fa-user"></i>
                        </a>
                        <div class="cart-mainf">
                            <div class="hubcart hubcart2 cart cart box_1">
                                <a href="/cart">
                                    <button class="btn top_hub_cart mt-1" type="submit" name="submit" value=""
                                            title="Cart">
                                        <i class="fas fa-shopping-bag"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link  active" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <?php /*endforeach; */ ?>
                        <?php showMenu($menu_new); ?>
                        <li class="nav-item" style="margin-left: 15px">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- //bottom nav -->
        </div>
        <!-- //header container -->
    </header>
<?php
endif;
?>
<?php
function showMenu($categories, $parent_id = 0, $char = '')
{
    $cate_child = array();
    foreach ($categories as $key => $item) {
        if ($item->parent_id == $parent_id) {
            $cate_child[] = $item;
            unset($categories[$key]);
        }
    }
    if ($cate_child) {
        echo '<ul class="navbar-nav mx-auto text-center" >';
        foreach ($cate_child as $key => $item) {
            echo '<a href="/pages/product/' . $item->id . '"><li style="padding-left: 30px;padding-top: 10px;" class="sub-menu">' . $char . $item->name;
            showMenu($categories, $item->id, $char . '');
            echo '</li></a>';
        }
        echo '</ul>';
    }
}

?>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .navbar-nav {

        list-style-type: none;
        text-align: center;
    }

    .navbar-nav li {
        color: black;
        display: inline-block;
        width: auto;
        /*height: 40px;*/
        line-height: 40px;

    }

    .navbar-nav ul a {
        text-decoration: none;
        color: black;
        display: block;
    }

    .navbar-nav a:hover {
        /*background: black;*/
        color: black;
    }

    .sub-menu li {
        display: none;
        width: auto;
    }

    .navbar-nav li {
        position: relative;
    }

    .sub-menu {
        display: none;
        position: absolute;
    }

    .navbar-nav li:hover .sub-menu {
        display: block;
    }

    .sub-menu li {
        margin-left: 0 !important;
    }
</style>
