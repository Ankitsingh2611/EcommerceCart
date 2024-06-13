@extends('layouts.base')
@section('content')

<section class="pt-0 poster-section">
    <div class="poster-image slider-for custome-arrow classic-arrow">
        <div>
            <img src="assets/images/furniture-images/poster/1.png" class="img-fluid blur-up lazyload" alt="">
        </div>
        <div>
            <img src="assets/images/furniture-images/poster/2.png" class="img-fluid blur-up lazyload" alt="">
        </div>
        <div>
            <img src="assets/images/furniture-images/poster/3.png" class="img-fluid blur-up lazyload" alt="">
        </div>
    </div>
    <div class="slider-nav image-show">
        <div>
            <div class="poster-img">
                <img src="assets/images/furniture-images/poster/t2.jpg" class="img-fluid blur-up lazyload" alt="">
                <div class="overlay-color">
                    <i class="fas fa-plus theme-color"></i>
                </div>
            </div>
        </div>
        <div>
            <div class="poster-img">
                <img src="assets/images/furniture-images/poster/t1.jpg" class="img-fluid blur-up lazyload" alt="">
                <div class="overlay-color">
                    <i class="fas fa-plus theme-color"></i>
                </div>
            </div>

        </div>
        <div>
            <div class="poster-img">
                <img src="assets/images/furniture-images/poster/t3.jpg" class="img-fluid blur-up lazyload" alt="">
                <div class="overlay-color">
                    <i class="fas fa-plus theme-color"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-contain">
        <div class="banner-left">
            <h4>Sale <span class="theme-color">35% Off</span></h4>
            <h1>New Latest <span>Dresses</span></h1>
            <p>BUY ONE GET ONE <span class="theme-color">FREE</span></p>
            <h2>$79.00 <span class="theme-color"><del>$65.00</del></span></h2>
            {{-- <p class="poster-details mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.</p> --}}
        </div>
    </div>

    <div class="right-side-contain">
        <div class="social-image">
            <h6>Facebook</h6>
        </div>

        <div class="social-image">
            <h6>Instagram</h6>
        </div>

        <div class="social-image">
            <h6>Twitter</h6>
        </div>
    </div>
</section>
<!-- banner section start -->
<section class="ratio2_1 banner-style-2">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="collection-banner p-bottom p-center text-center">
                    <a href="shop-left-sidebar.html" class="banner-img">
                        <img src="assets/images/fashion/banner/1.jpg" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail">
                        <a href="javacript:void(0)" class="heart-wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                        <span class="font-dark-30">26% <span>OFF</span></span>
                    </div>
                    <a href="shop-left-sidebar.html" class="contain-banner">
                        <div class="banner-content with-big">
                            <h2 class="mb-2">New Hoodie</h2>
                            <span>BUY ONE GET ONE FREE</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="collection-banner p-bottom p-center text-center">
                    <a href="shop-left-sidebar.html" class="banner-img">
                        <img src="assets/images/fashion/banner/2.jpg" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail">
                        <a href="javacript:void(0)" class="heart-wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                        <span class="font-dark-30">50% <span>OFF</span></span>
                    </div>
                    <a href="shop-left-sidebar.html" class="contain-banner">
                        <div class="banner-content with-big">
                            <h2 class="mb-2">Women Fashion</h2>
                            <span>New offer 50% off</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="collection-banner p-bottom p-center text-center">
                    <a href="shop-left-sidebar.html" class="banner-img">
                        <img src="assets/images/fashion/banner/3.jpg" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail">
                        <a href="javacript:void(0)" class="heart-wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                        <span class="font-dark-30">36% <span>OFF</span></span>
                    </div>
                    <a href="shop-left-sidebar.html" class="contain-banner">
                        <div class="banner-content with-big">
                            <h2 class="mb-2">New Jacket</h2>
                            <span>BUY ONE GET ONE FREE</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner section end -->

<section class="ratio_asos overflow-hidden">
    <div class="container p-sm-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h2>New Arrival</h2>
                    <h5 class="theme-color">Our Collection</h5>
                </div>
            </div>
        </div>
        <style>
            .r-price {
                display: flex;
                flex-direction: row;
                gap: 20px;
            }

            .r-price .main-price {
                width: 100%;
            }

            .r-price .rating {
                padding-left: auto;
            }

            .product-style-3.product-style-chair .product-title {
                text-align: left;
                width: 100%;
            }

            @media (max-width:600px) {

                .product-box p,
                .product-box a {
                    text-align: left;
                }

                .product-style-3.product-style-chair .main-price {
                    text-align: right !important;
                }
            }
        </style>
        <div class="row g-sm-4 g-3">

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/10.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$5</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Men's Wear</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Mulicolour T-Shirt</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/10.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$3</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Men's Wear</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Blue Jacket</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/17.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$8</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Men's Wear</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Yellow-Black Sweater</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/3.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$4</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Men's Wear</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Muli-Colour Jacket</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/2.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$11</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Men's Wear</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Blue Jacket</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/12.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$19</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Men's Wear</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Multi-Colour Shirt</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/3.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$4</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Men's Wear</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Multi-Colored Shirt</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/8.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$18</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Men's Wear</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Black Jacket</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/23.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$20</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Men's Wear</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Orange Shirt</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/11.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$7</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Men's Wear</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Multi-Colored Jacket </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/20.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$5</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Men's Wear</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Shirt</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/20.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$21</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Men's Wear</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Shirt</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- category section start -->
<section class="category-section ratio_40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="title title-2 text-center">
                    <h2>Our Category</h2>
                    <h5 class="text-color">Our collection</h5>
                </div>
            </div>
        </div>
        <div class="row gy-3">
            <div class="col-xxl-2 col-lg-3">
                <div class="category-wrap category-padding category-block theme-bg-color">
                    <div>
                        <h2 class="light-text">Top</h2>
                        <h2 class="top-spacing">Our Top</h2>
                        <span>Categories</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-10 col-lg-9">
                <div class="category-wrapper category-slider1 white-arrow category-arrow">
                    <div>
                        <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                            <img src="assets/images/fashion/category/1.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">Shoes</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                            <img src="assets/images/fashion/category/2.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">Men</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                            <img src="assets/images/fashion/category/3.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">Jeans</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                            <img src="assets/images/fashion/category/4.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">Jacket</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                            <img src="assets/images/fashion/category/3.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">Jeans</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- category section end -->


<section class="product-slider overflow-hidden">
    <div>
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="title-3 pb-4 title-border">
                        <h2>Most Popular</h2>
                        <h5 class="theme-color">Our Collection</h5>
                    </div>

                    <div class="product-slider round-arrow">
                        <div>
                            <div class="row g-3">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="product/details.html">
                                            <img src="assets/images/furniture-images/product/1.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="product/details.html">
                                                <h6 class="font-light">Fully Confirtable</h6>
                                                <h3>Latest wood handle chair 7854</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="product/details.html">
                                            <img src="assets/images/furniture-images/product/2.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="product/details.html">
                                                <h6 class="font-light">Fully Confirtable</h6>
                                                <h3>Latest wood handle chair 7854</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="product/details.html">
                                            <img src="assets/images/furniture-images/product/3.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="product/details.html">
                                                <h6 class="font-light">Fully Confirtable</h6>
                                                <h3>Latest wood handle chair 7854</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="product/details.html">
                                            <img src="assets/images/furniture-images/product/4.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="product/details.html">
                                                <h6 class="font-light">Fully Confirtable</h6>
                                                <h3>Latest wood handle chair 7854</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="title-3 pb-4 title-border">
                        <h2>Recent Popular</h2>
                        <h5 class="theme-color">Our Collection</h5>
                    </div>

                    <div class="product-slider round-arrow">
                        <div>
                            <div class="row g-3">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="product/details.html">
                                            <img src="assets/images/furniture-images/product/1.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="product/details.html">
                                                <h6 class="font-light">Fully Confirtable</h6>
                                                <h3>Latest wood handle chair 7854</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="product/details.html">
                                            <img src="assets/images/furniture-images/product/2.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="product/details.html">
                                                <h6 class="font-light">Fully Confirtable</h6>
                                                <h3>Latest wood handle chair 7854</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="product/details.html">
                                            <img src="assets/images/furniture-images/product/3.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="product/details.html">
                                                <h6 class="font-light">Fully Confirtable</h6>
                                                <h3>Latest wood handle chair 7854</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="product/details.html">
                                            <img src="assets/images/furniture-images/product/4.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="product/details.html">
                                                <h6 class="font-light">Fully Confirtable</h6>
                                                <h3>Latest wood handle chair 7854</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="title-3 pb-4 title-border">
                        <h2>Most Popular</h2>
                        <h5 class="theme-color">Our Collection</h5>
                    </div>

                    <div class="product-slider round-arrow">
                        <div>
                            <div class="row g-3">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="product/details.html">
                                            <img src="assets/images/furniture-images/product/1.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="product/details.html">
                                                <h6 class="font-light">Fully Confirtable</h6>
                                                <h3>Latest wood handle chair 7854</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="product/details.html">
                                            <img src="assets/images/furniture-images/product/2.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="product/details.html">
                                                <h6 class="font-light">Fully Confirtable</h6>
                                                <h3>Latest wood handle chair 7854</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="product/details.html">
                                            <img src="assets/images/furniture-images/product/3.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="product/details.html">
                                                <h6 class="font-light">Fully Confirtable</h6>
                                                <h3>Latest wood handle chair 7854</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="product/details.html">
                                            <img src="assets/images/furniture-images/product/4.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="product/details.html">
                                                <h6 class="font-light">Fully Confirtable</h6>
                                                <h3>Latest wood handle chair 7854</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .products-c .bg-size {
        background-position: center 0 !important;
    }
</style>

<section class="ratio_asos overflow-hidden pb-5">
    <div class="px-0 container-fluid p-sm-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h2>Fashion Top Deals</h2>
                    <h5 class="theme-color">Our Collection</h5>
                </div>
            </div>

            <div class="our-product products-c">
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/25.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$21</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                <a href="product/details.html" class="font-default">
                                    <h5>Skater Multicolor Dress</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/26.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$21</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                <a href="product/details.html" class="font-default">
                                    <h5>Skater Multicolor Dress</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/27.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$21</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                <a href="product/details.html" class="font-default">
                                    <h5>Skater Multicolor Dress</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/28.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$21</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                <a href="product/details.html" class="font-default">
                                    <h5>Skater Multicolor Dress</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/29.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$21</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                <a href="product/details.html" class="font-default">
                                    <h5>Skater Multicolor Dress</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/30.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$21</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                <a href="product/details.html" class="font-default">
                                    <h5>Skater Multicolor Dress</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/31.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$21</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                <a href="product/details.html" class="font-default">
                                    <h5>Skater Multicolor Dress</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/fashion/product/front/32.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$21</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                <a href="product/details.html" class="font-default">
                                    <h5>Skater Multicolor Dress</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
