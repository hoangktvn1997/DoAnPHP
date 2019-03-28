<?php
/**
 * Created by PhpStorm.
 * User: HOA
 * Date: 3/19/2019
 * Time: 3:25 AM
 */
?>
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +8476-431-87-32</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> hoangktvn1997@gmail.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 475A Điện Biên Phủ, P.25, Q.Bình Thạnh, Tp.HCM</a></li>
            </ul>
            <ul class="header-links pull-right">
                <!--                <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>-->
                <li><a href="login.php">Đăng nhập</a> | <a href="register.php">Đăng ký</a> </li>     <!-- Code phần Đăng Nhập / Đăng Xuất -->
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="index.php" class="logo">
                            <!--                            <img src="./img/logo.png" alt="">-->
                            <h2 style="text-align: center; color: white; padding-top: 0px">Boardgames Shop</h2>
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <select class="input-select">
                                <option value="0">Tất cả</option>
                                <option value="1">Danh mục 01</option>
                                <option value="1">Danh mục 02</option>
                            </select>
                            <input class="input" placeholder="Nhập thông tin cần tìm kiếm">
                            <button class="search-btn">Tìm kiếm</button>                    <!-- Code tìm kiếm -->
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span>Ưa thích</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Giỏ hàng</span>
                                <div class="qty">3</div>
                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/7-wonders.jpeg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">7 Wonders</a></h3>
                                            <h4 class="product-price"><span class="qty">1x</span>1,200,000 VNĐ</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>

                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./img/bang-the-dice-game-1.jpeg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">Bang - The Dice Game</a></h3>
                                            <h4 class="product-price"><span class="qty">2x</span>450,000 VNĐ</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="cart-summary">
                                    <small>Đã chọn 3 sản phẩm</small>   <!-- Code tính số lượng -->
                                    <h5>Tạm tính: 2,100,000 VNĐ</h5>    <!-- Code tính tổng -->
                                </div>
                                <div class="cart-btns">
                                    <a href="#">Xem giỏ hàng</a>
                                    <a href="#">Thanh toán <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="index.php">Trang chủ</a></li>
                    <li><a href="#">Khuyến mãi</a></li>
                    <li><a href="#">Sản phẩm HOT</a></li>
                    <li><a href="#">Sản phẩm mới</a></li>
                    <li><a href="#">Boardgames giải trí</a></li>
                    <li><a href="#">Boardgames chiến thuật</a></li>
                    <li><a href="#">Boardgames US</a></li>
                    <li><a href="#">Rubik</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->
</header>
