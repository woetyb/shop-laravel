@extends('store.layouts.master')
@section('content')
    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Category List View</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="active">Category Grid List View</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section with-sidebar">
            <div class="container">
                <div class="row">
                    <!-- SIDEBAR -->
                    <aside class="col-md-3 sidebar" id="sidebar">
                        <!-- widget search -->
                        <div class="widget">
                            <div class="widget-search">
                                <input class="form-control" type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- /widget search -->
                        <!-- widget shop categories -->
                        <div class="widget shop-categories">
                            <h4 class="widget-title">Categories</h4>
                            <div class="widget-content">
                                <ul>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Woman</a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Sweaters & Knits
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Jackets & Coats
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Denim
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Pants
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Shorts
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Man</a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Sweaters & Knits
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Jackets & Coats
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Denim
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Pants
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Shorts
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Dress</a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Sweaters & Knits
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Jackets & Coats
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Denim
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Pants
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Shorts
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Top Sellers</a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Sweaters & Knits
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Jackets & Coats
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Denim
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Pants
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Shorts
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-up"></i></span>
                                        <a href="#">Accessories</a>
                                        <ul class="children active">
                                            <li>
                                                <a href="#">Sweaters & Knits
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Jackets & Coats
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Denim
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Pants
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Shorts
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sale Off</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /widget shop categories -->
                        <!-- widget product color -->
                        <div class="widget widget-colors">
                            <h4 class="widget-title">Colors</h4>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#"><span style="background-color: #ffffff"></span></a></li>
                                    <li><a href="#"><span style="background-color: #161618"></span></a></li>
                                    <li><a href="#"><span style="background-color: #e74c3c"></span></a></li>
                                    <li><a href="#"><span style="background-color: #783ce7"></span></a></li>
                                    <li><a href="#"><span style="background-color: #3498db"></span></a></li>
                                    <li><a href="#"><span style="background-color: #00a847"></span></a></li>
                                    <li><a href="#"><span style="background-color: #3ce7d9"></span></a></li>
                                    <li><a href="#"><span style="background-color: #fa17bc"></span></a></li>
                                    <li><a href="#"><span style="background-color: #a87e00"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /widget product color -->
                        <!-- widget price filter -->
                        <div class="widget widget-filter-price">
                            <h4 class="widget-title">Price</h4>
                            <div class="widget-content">
                                <div id="slider-range"></div>
                                <input type="text" id="amount" readonly />
                                <button class="btn btn-theme">Filter</button>
                            </div>
                        </div>
                        <!-- /widget price filter -->
                        <!-- widget tabs -->
                        <div class="widget widget-tabs">
                            <div class="widget-content">
                                <ul id="tabs" class="nav nav-justified">
                                    <li><a href="#tab-s1" data-toggle="tab">Top</a></li>
                                    <li class="active"><a href="#tab-s2" data-toggle="tab">Sale Off</a></li>
                                    <li><a href="#tab-s3" data-toggle="tab">Deals</a></li>
                                </ul>
                                <div class="tab-content">
                                    <!-- tab 1 -->
                                    <div class="tab-pane fade" id="tab-s1">
                                        <div class="product-list">
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-1.jpg" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                    <div class="rating">
                                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                                    </div>
                                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-2.jpg" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                    <div class="rating">
                                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                                    </div>
                                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-3.jpg" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                    <div class="rating">
                                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                                    </div>
                                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- tab 2 -->
                                    <div class="tab-pane fade in active" id="tab-s2">
                                        <div class="product-list">
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-4.jpg" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                    <div class="rating">
                                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                                    </div>
                                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-5.jpg" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                    <div class="rating">
                                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                                    </div>
                                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-6.jpg" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                    <div class="rating">
                                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                                    </div>
                                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- tab 3 -->
                                    <div class="tab-pane fade" id="tab-s3">
                                        <div class="product-list">
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-7.jpg" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                    <div class="rating">
                                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                                    </div>
                                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-8.jpg" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                    <div class="rating">
                                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                                    </div>
                                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-9.jpg" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                    <div class="rating">
                                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                                    </div>
                                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-theme btn-theme-dark btn-theme-sm btn-block" href="#">More Products</a>
                            </div>
                        </div>
                        <!-- /widget tabs -->
                        <!-- widget tag cloud -->
                        <div class="widget widget-tag-cloud">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="widget-title"><span>Tags</span></h4>
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Top Sellers</a></li>
                                <li><a href="#">E commerce</a></li>
                                <li><a href="#">Hot Deals</a></li>
                                <li><a href="#">Supplier</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Theme</a></li>
                                <li><a href="#">Website</a></li>
                                <li><a href="#">Isamercan</a></li>
                                <li><a href="#">Themeforest</a></li>
                            </ul>
                        </div>
                        <!-- /widget tag cloud -->
                        <!-- widget products carousel -->
                        <div class="widget">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="widget-title"><span>Top products</span></h4>
                            <div class="sidebar-products-carousel">
                                <div class="owl-carousel" id="sidebar-products-carousel">
                                    <div class="thumbnail no-border no-padding">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-1.jpg" alt=""/>
                                                <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="caption text-center">
                                            <h4 class="caption-title">Standard Product Header</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumbnail no-border no-padding">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-2.jpg" alt=""/>
                                                <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="caption text-center">
                                            <h4 class="caption-title">Standard Product Header</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumbnail no-border no-padding">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-3.jpg" alt=""/>
                                                <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="caption text-center">
                                            <h4 class="caption-title">Standard Product Header</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /widget products carousel -->
                        <!-- widget shop hot deals -->
                        <div class="widget widget-shop-deals">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="widget-title"><span>Hot Deals</span></h4>
                            <div class="hot-deals-carousel">
                                <div class="owl-carousel" id="hot-deals-carousel">
                                    <div class="thumbnail thumbnail-hot-deal no-border no-padding">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-5.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                <div class="countdown-wrapper">
                                                    <div id="dealCountdown1" class="defaultCountdown clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="caption text-center">
                                            <h4 class="caption-title">Standard Hot Deal Product</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <span class="reviews">16 reviews</span>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            <div class="caption-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</div>
                                        </div>
                                    </div>
                                    <div class="thumbnail thumbnail-hot-deal no-border no-padding">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-4.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                <div class="countdown-wrapper">
                                                    <div id="dealCountdown2" class="defaultCountdown clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="caption text-center">
                                            <h4 class="caption-title">Standard Hot Deal Product</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <span class="reviews">16 reviews</span>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            <div class="caption-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</div>
                                        </div>
                                    </div>
                                    <div class="thumbnail thumbnail-hot-deal no-border no-padding">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img src="assets/img/preview/shop/product-1.jpg" alt=""/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                <div class="countdown-wrapper">
                                                    <div id="dealCountdown3" class="defaultCountdown clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="caption text-center">
                                            <h4 class="caption-title">Standard Hot Deal Product</h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <span class="reviews">16 reviews</span>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            <div class="caption-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /widget shop hot deals -->
                    </aside>
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">

                        <div class="main-slider sub">
                            <div class="owl-carousel" id="main-slider">

                                <!-- Slide 1 -->
                                <div class="item slide1 sub">
                                    <img class="slide-img" src="assets/img/preview/slider/slide-1-sub.jpg" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title"><span>Winter Fashion</span></h2>
                                                        <h3 class="caption-subtitle"><span>Collection Ready</span></h3>
                                                        <p class="caption-text">
                                                            <a class="btn btn-theme" href="#">Shop Now</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slide 1 -->

                                <!-- Slide 2 -->
                                <div class="item slide2 sub">
                                    <img class="slide-img" src="assets/img/preview/slider/slide-1-sub.jpg" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title"><span>Winter Fashion</span></h2>
                                                        <h3 class="caption-subtitle"><span>Collection Ready</span></h3>
                                                        <p class="caption-text">
                                                            <a class="btn btn-theme" href="#">Shop Now</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slide 2 -->

                            </div>
                        </div>

                        <!-- shop-sorting -->
                        <div class="shop-sorting">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form class="form-inline" action="">
                                        <div class="form-group selectpicker-wrapper">
                                            <select
                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="Select">
                                                <option>Product Name</option>
                                                <option>Product Name</option>
                                                <option>Product Name</option>
                                            </select>
                                        </div>
                                        <div class="form-group selectpicker-wrapper">
                                            <select
                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="Select">
                                                <option>Select Manifacturers</option>
                                                <option>Select Manifacturers</option>
                                                <option>Select Manifacturers</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4 text-right-sm">
                                    <a class="btn btn-theme btn-theme-transparent btn-theme-sm" href="#"><img src="assets/img/icon-list.png" alt=""/></a>
                                    <a class="btn btn-theme btn-theme-transparent btn-theme-sm" href="#"><img src="assets/img/icon-grid.png" alt=""/></a>
                                </div>
                            </div>
                        </div>
                        <!-- /shop-sorting -->

                        <!-- Products List -->
                        <div class="products list">
                            @foreach($products as $product)
                                <div class="thumbnail no-border no-padding">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="media">
                                                <a class="media-link" href="#">
                                                    <img src="/upload/product/{{$product->image}}" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="caption">
                                                <h4 class="caption-title"><a href="{{route('store.detail_product', ['id' => $product->id])}}">{{$product->name}}</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                                </div>
                                                <a class="reviews" href="#">16 reviews</a>
                                                <div class="overflowed">
                                                    <div class="availability">Còn hàng: {{$product->stock}} Sản phẩm</div>
                                                    <div class="price"><ins>${{$product->price}}</ins> <del>${{$product->sell_price}}</del></div>
                                                </div>
                                                <div class="caption-text">{{$product->description}}</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="{{route('store.add_to_cart', ['product_id' => $product->id])}}"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- /Products list -->

                        <!-- Pagination -->
                        <div class="pagination-wrapper">
                            <ul class="pagination">
                                <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i> Previous</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next <i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- /Pagination -->

                    </div>
                    <!-- /CONTENT -->

                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

        <!-- PAGE -->
        <section class="page-section no-padding-top">
            <div class="container">
                <div class="row blocks shop-info-banners">
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-gift"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Buy 1 Get 1</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-comments"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Call to Free</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-trophy"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Money Back!</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->
@endsection
