@extends('layouts.master')
@section('title', 'Homepage')
@section('show') show @stop
@section('css')
@stop

@section('main')
   <main class="main">
      <div class="intro-slider-container">
         <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                        "nav": false,
                        "responsive": {
                            "992": {
                                "nav": true
                            }
                        }
                    }'>
            @foreach ($sliders as $slider)
            <div class="intro-slide" style="background-image: url({{$slider->image}});">
               <div class="container intro-content">
                  <div class="row">
                     <div class="col-auto offset-lg-3 intro-col">
                        <h3 class="intro-subtitle">{{$slider->sub_title}}</h3>
                        <h1 class="intro-title">{{$slider->title}}<span>
                                            <sup class="font-weight-light">from</sup>
                                            <span class="text-primary">{{$slider->spacial_discount}}</span>
                                        </span>
                        </h1><!-- End .intro-title -->

                        <a href="{{$slider->btn_link}}" class="btn btn-outline-primary-2">
                           <span>{{$slider->btn_text}}</span>
                           <i class="icon-long-arrow-right"></i>
                        </a>
                     </div><!-- End .col-auto offset-lg-3 -->
                  </div><!-- End .row -->
               </div><!-- End .container intro-content -->
            </div>
            @endforeach
         </div><!-- End .owl-carousel owl-simple -->

         <span class="slider-loader"></span><!-- End .slider-loader -->
      </div>

      <div class="mb-4"></div>
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-lg-3">
               <div class="banner banner-overlay">
                  <a href="#">
                     <img src="/site/assets/images/demos/demo-13/banners/banner-1.jpg" alt="Banner">
                  </a>

                  <div class="banner-content">
                     <h4 class="banner-subtitle text-white"><a href="#">Weekend Sale</a></h4><!-- End .banner-subtitle -->
                     <h3 class="banner-title text-white"><a href="#">Lighting <br>& Accessories <br><span>25% off</span></a></h3><!-- End .banner-title -->
                     <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                  </div><!-- End .banner-content -->
               </div><!-- End .banner -->
            </div><!-- End .col-lg-3 -->

            <div class="col-sm-6 col-lg-3 order-lg-last">
               <div class="banner banner-overlay">
                  <a href="#">
                     <img src="/site/assets/images/demos/demo-13/banners/banner-3.jpg" alt="Banner">
                  </a>

                  <div class="banner-content">
                     <h4 class="banner-subtitle text-white"><a href="#">Smart Offer</a></h4><!-- End .banner-subtitle -->
                     <h3 class="banner-title text-white"><a href="#">Anniversary <br>Special <br><span>15% off</span></a></h3><!-- End .banner-title -->
                     <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                  </div><!-- End .banner-content -->
               </div><!-- End .banner -->
            </div><!-- End .col-lg-3 -->

            <div class="col-lg-6">
               <div class="banner banner-overlay">
                  <a href="#">
                     <img src="/site/assets/images/demos/demo-13/banners/banner-2.jpg" alt="Banner">
                  </a>

                  <div class="banner-content">
                     <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Amazing Value</a></h4><!-- End .banner-subtitle -->
                     <h3 class="banner-title text-white"><a href="#">Clothes Trending <br>Spring Collection 2019 <br><span>from $12,99</span></a></h3><!-- End .banner-title -->
                     <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                  </div><!-- End .banner-content -->
               </div><!-- End .banner -->
            </div><!-- End .col-lg-6 -->
         </div><!-- End .row -->
      </div>


      <div class="mb-2"></div>

      <div class="container">
         <h2 class="title text-center mb-2">Explore Popular Categories</h2><!-- End .title -->
         <div class="cat-blocks-container">
            <div class="row">
               <div class="col-6 col-sm-4 col-lg-2">
                  <a href="category.html" class="cat-block">
                     <figure>
                        <span>
                            <img src="/site/assets/images/demos/demo-13/cats/1.jpg" alt="Category image">
                        </span>
                     </figure>

                     <h3 class="cat-block-title">Computer & Laptop</h3><!-- End .cat-block-title -->
                  </a>
               </div><!-- End .col-sm-4 col-lg-2 -->

               <div class="col-6 col-sm-4 col-lg-2">
                  <a href="category.html" class="cat-block">
                     <figure>
                                    <span>
                                        <img src="/site/assets/images/demos/demo-13/cats/2.jpg" alt="Category image">
                                    </span>
                     </figure>

                     <h3 class="cat-block-title">Lighting</h3><!-- End .cat-block-title -->
                  </a>
               </div><!-- End .col-sm-4 col-lg-2 -->

               <div class="col-6 col-sm-4 col-lg-2">
                  <a href="category.html" class="cat-block">
                     <figure>
                                    <span>
                                        <img src="/site/assets/images/demos/demo-13/cats/3.jpg" alt="Category image">
                                    </span>
                     </figure>

                     <h3 class="cat-block-title">Smart Phones</h3><!-- End .cat-block-title -->
                  </a>
               </div><!-- End .col-sm-4 col-lg-2 -->

               <div class="col-6 col-sm-4 col-lg-2">
                  <a href="category.html" class="cat-block">
                     <figure>
                                    <span>
                                        <img src="/site/assets/images/demos/demo-13/cats/4.jpg" alt="Category image">
                                    </span>
                     </figure>

                     <h3 class="cat-block-title">Televisions</h3><!-- End .cat-block-title -->
                  </a>
               </div><!-- End .col-sm-4 col-lg-2 -->

               <div class="col-6 col-sm-4 col-lg-2">
                  <a href="category.html" class="cat-block">
                     <figure>
                                    <span>
                                        <img src="/site/assets/images/demos/demo-13/cats/5.jpg" alt="Category image">
                                    </span>
                     </figure>

                     <h3 class="cat-block-title">Cooking</h3><!-- End .cat-block-title -->
                  </a>
               </div><!-- End .col-sm-4 col-lg-2 -->

               <div class="col-6 col-sm-4 col-lg-2">
                  <a href="category.html" class="cat-block">
                     <figure>
                                    <span>
                                        <img src="/site/assets/images/demos/demo-13/cats/6.jpg" alt="Category image">
                                    </span>
                     </figure>

                     <h3 class="cat-block-title">Furniture</h3><!-- End .cat-block-title -->
                  </a>
               </div><!-- End .col-sm-4 col-lg-2 -->
            </div><!-- End .row -->
         </div><!-- End .cat-blocks-container -->
      </div>

      <div class="mb-3"></div>

      <div class="bg-light pt-3 pb-5">
         <div class="container">
            <div class="heading heading-flex heading-border mb-3">
               <div class="heading-left">
                  <h2 class="title">Hot Deals Products</h2><!-- End .title -->
               </div><!-- End .heading-left -->

               <div class="heading-right">
                  <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="hot-all-link" data-toggle="tab" href="#hot-all-tab" role="tab" aria-controls="hot-all-tab" aria-selected="true">All</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="hot-elec-link" data-toggle="tab" href="#hot-elec-tab" role="tab" aria-controls="hot-elec-tab" aria-selected="false">Electronics</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="hot-furn-link" data-toggle="tab" href="#hot-furn-tab" role="tab" aria-controls="hot-furn-tab" aria-selected="false">Furniture</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="hot-clot-link" data-toggle="tab" href="#hot-clot-tab" role="tab" aria-controls="hot-clot-tab" aria-selected="false">Clothes</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="hot-acc-link" data-toggle="tab" href="#hot-acc-tab" role="tab" aria-controls="hot-acc-tab" aria-selected="false">Accessories</a>
                     </li>
                  </ul>
               </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel">
               <div class="tab-pane p-0 fade show active" id="hot-all-tab" role="tabpanel" aria-labelledby="hot-all-link">
                  <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                       data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-1.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Furniture</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$251.99</span>
                              <span class="old-price">Was $290.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 2 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-top">Top</span>
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-2.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Electronics</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Bose - SoundSport  wireless headphones</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$179.99</span>
                              <span class="old-price">Was $199.99</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 4 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-3.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Furniture</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa <br>frame charcoal</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$3.050.00</span>
                              <span class="old-price">Was $3.200.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 6 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-4.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Clothes</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$240.00</span>
                              <span class="old-price">Was $310.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 4 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-top">Top</span>
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-5.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-countdown" data-until="+7h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Electronics</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart 4K Ultra HD</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$1699.99</span>
                              <span class="old-price">Was $1999.99</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 10 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-new">New</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-6.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Appliances</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Neato Robotics</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              $399.00
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 12 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->
                  </div><!-- End .owl-carousel -->
               </div><!-- .End .tab-pane -->
               <div class="tab-pane p-0 fade" id="hot-elec-tab" role="tabpanel" aria-labelledby="hot-elec-link">
                  <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                       data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-4.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Clothes</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$240.00</span>
                              <span class="old-price">Was $310.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 4 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-1.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Furniture</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$251.99</span>
                              <span class="old-price">Was $290.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 2 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-top">Top</span>
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-2.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Electronics</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Bose - SoundSport  wireless headphones</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$179.99</span>
                              <span class="old-price">Was $199.99</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 4 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-3.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Furniture</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa <br>frame charcoal</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$3.050.00</span>
                              <span class="old-price">Was $3.200.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 6 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-top">Top</span>
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-5.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-countdown" data-until="+7h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Electronics</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart 4K Ultra HD</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$1699.99</span>
                              <span class="old-price">Was $1999.99</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 10 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->
                  </div><!-- End .owl-carousel -->
               </div><!-- .End .tab-pane -->
               <div class="tab-pane p-0 fade" id="hot-furn-tab" role="tabpanel" aria-labelledby="hot-furn-link">
                  <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                       data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-3.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Furniture</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa <br>frame charcoal</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$3.050.00</span>
                              <span class="old-price">Was $3.200.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 6 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-top">Top</span>
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-5.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-countdown" data-until="+7h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Electronics</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart 4K Ultra HD</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$1699.99</span>
                              <span class="old-price">Was $1999.99</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 10 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-new">New</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-6.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Appliances</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Neato Robotics</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              $399.00
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 12 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-4.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Clothes</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$240.00</span>
                              <span class="old-price">Was $310.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 4 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-1.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Furniture</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$251.99</span>
                              <span class="old-price">Was $290.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 2 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-top">Top</span>
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-2.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Electronics</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Bose - SoundSport  wireless headphones</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$179.99</span>
                              <span class="old-price">Was $199.99</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 4 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->
                  </div><!-- End .owl-carousel -->
               </div><!-- .End .tab-pane -->
               <div class="tab-pane p-0 fade" id="hot-clot-tab" role="tabpanel" aria-labelledby="hot-clot-link">
                  <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                       data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-1.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Furniture</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$251.99</span>
                              <span class="old-price">Was $290.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 2 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-3.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Furniture</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa <br>frame charcoal</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$3.050.00</span>
                              <span class="old-price">Was $3.200.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 6 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-4.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Clothes</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$240.00</span>
                              <span class="old-price">Was $310.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 4 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-top">Top</span>
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-2.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Electronics</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Bose - SoundSport  wireless headphones</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$179.99</span>
                              <span class="old-price">Was $199.99</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 4 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->
                  </div><!-- End .owl-carousel -->
               </div><!-- .End .tab-pane -->
               <div class="tab-pane p-0 fade" id="hot-acc-tab" role="tabpanel" aria-labelledby="hot-acc-link">
                  <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                       data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-new">New</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-6.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Appliances</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Neato Robotics</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              $399.00
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 12 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-1.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Furniture</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$251.99</span>
                              <span class="old-price">Was $290.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 2 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-top">Top</span>
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-5.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-countdown" data-until="+7h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Electronics</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart 4K Ultra HD</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$1699.99</span>
                              <span class="old-price">Was $1999.99</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 10 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-3.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Furniture</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa <br>frame charcoal</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$3.050.00</span>
                              <span class="old-price">Was $3.200.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 6 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->

                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-sale">Sale</span>
                           <a href="product.html">
                              <img src="/site/assets/images/demos/demo-13/products/product-4.jpg" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                           </div><!-- End .product-action-vertical -->

                           <div class="product-action">
                              <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                           </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Clothes</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                           <div class="product-price">
                              <span class="new-price">$240.00</span>
                              <span class="old-price">Was $310.00</span>
                           </div><!-- End .product-price -->
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 4 Reviews )</span>
                           </div><!-- End .rating-container -->

                           <div class="product-nav product-nav-dots">
                              <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                              <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                           </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                     </div><!-- End .product -->
                  </div><!-- End .owl-carousel -->
               </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
         </div>
      </div>

      <div class="mb-3"></div>

      <div class="container electronics">
         <div class="heading heading-flex heading-border mb-3">
            <div class="heading-left mb-2">
               <h2 class="title">Features Product</h2>
            </div>
         </div><!-- End .heading -->

         <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="elec-new-tab" role="tabpanel" aria-labelledby="elec-new-link">
               <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                  @foreach ($featureProducts as $featureProduct)
                     <div class="product">
                        <figure class="product-media">
                           <span class="product-label label-top">Top</span>
                           <a href="product.html">
                              <img src="{{url($featureProduct->image)}}" alt="Product image" class="product-image">
                           </a>

                           <div class="product-action-vertical">
                              <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
{{--                              <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>--}}
{{--                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>--}}
                           </div>

                           <div class="product-action">
                              @if ($featureProduct->quantity > 0)
                                 <form action="{{ route('cart.store', $featureProduct) }}" method="POST" id="fCartForm">
                                    {{ csrf_field() }}
                                 </form>
                                 <input type="hidden" name="qty" value="1">
                                 <a href="#" class="btn-product btn-cart" onclick="document.getElementById('fCartForm').submit()"><span>add to cart</span></a>
                              @else
                                 <span class="text-danger text-center"><b>Out of Stock</b></span>
                              @endif
                           </div>
                        </figure>

                        <div class="product-body">
                           <div class="product-cat">
                              <a href="#">Laptops</a>
                           </div><!-- End .product-cat -->
                           <h3 class="product-title"><a href="product.html">{{$featureProduct->name}}</a></h3>
                           <div class="product-price">
                              @if ($featureProduct->spacial_price == null)
                                 {{ presentPrice($featureProduct->price) }}
                              @elseif(isset($featureProduct->spacial_price))
                                 <span class="text-danger">{{ presentPrice($featureProduct->spacial_price) }}</span>
                                 <span class="text-light ml-3"><s>{{ presentPrice($featureProduct->price) }}</s></span>
                              @endif
                           </div>
                           <div class="ratings-container">
                              <div class="ratings">
                                 <div class="ratings-val" style="width: 100%;"></div>
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( 4 Reviews )</span>
                           </div><!-- End .rating-container -->
                        </div>
                     </div>
                  @endforeach

               </div>
            </div>
         </div>
      </div>

      <div class="mb-3"></div><!-- End .mb-3 -->

      <div class="mb-1"></div><!-- End .mb-1 -->

      <div class="container furniture">
         <div class="heading heading-flex heading-border mb-3">
            <div class="heading-left">
               <h2 class="title">Furniture</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
               <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" id="furn-new-link" data-toggle="tab" href="#furn-new-tab" role="tab" aria-controls="furn-new-tab" aria-selected="true">New</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="furn-featured-link" data-toggle="tab" href="#furn-featured-tab" role="tab" aria-controls="furn-featured-tab" aria-selected="false">Featured</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="furn-best-link" data-toggle="tab" href="#furn-best-tab" role="tab" aria-controls="furn-best-tab" aria-selected="false">Best Seller</a>
                  </li>
               </ul>
            </div><!-- End .heading-right -->
         </div><!-- End .heading -->

         <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="furn-new-tab" role="tabpanel" aria-labelledby="furn-new-link">
               <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                  <div class="product">
                     <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-11.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Tables</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Block Side Table/Trolley</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $229.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 12 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-12.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Sofas</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $1,199.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-13.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Lighting</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           <span class="new-price">$892.00</span>
                           <span class="old-price">Was $939.00</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-14.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Chairs</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Wingback Chair</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $210.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #999999;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #cc9999;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-15.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Chairs</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Flow Slim Armchair</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           <span class="new-price">$737,00</span>
                           <span class="old-price">Was $820.00</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #877666;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->
               </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="furn-featured-tab" role="tabpanel" aria-labelledby="furn-featured-link">
               <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                  <div class="product">
                     <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-13.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Lighting</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           <span class="new-price">$892.00</span>
                           <span class="old-price">Was $939.00</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-14.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Chairs</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Wingback Chair</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $210.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #999999;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #cc9999;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-11.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Tables</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Block Side Table/Trolley</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $229.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 12 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-15.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Chairs</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Flow Slim Armchair</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           <span class="new-price">$737,00</span>
                           <span class="old-price">Was $820.00</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #877666;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-12.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Sofas</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $1,199.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->
               </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="furn-best-tab" role="tabpanel" aria-labelledby="furn-best-link">
               <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-12.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Sofas</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $1,199.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-13.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Lighting</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           <span class="new-price">$892.00</span>
                           <span class="old-price">Was $939.00</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-14.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Chairs</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Wingback Chair</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $210.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #999999;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #cc9999;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-15.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Chairs</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Flow Slim Armchair</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           <span class="new-price">$737,00</span>
                           <span class="old-price">Was $820.00</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #877666;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->
               </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
         </div><!-- End .tab-content -->
      </div><!-- End .container -->

      <div class="mb-3"></div><!-- End .mb-3 -->

      <div class="container clothing ">
         <div class="heading heading-flex heading-border mb-3">
            <div class="heading-left">
               <h2 class="title">Clothing & Apparel</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
               <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" id="clot-new-link" data-toggle="tab" href="#clot-new-tab" role="tab" aria-controls="clot-new-tab" aria-selected="true">New</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="clot-featured-link" data-toggle="tab" href="#clot-featured-tab" role="tab" aria-controls="clot-featured-tab" aria-selected="false">Featured</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="clot-best-link" data-toggle="tab" href="#clot-best-tab" role="tab" aria-controls="clot-best-tab" aria-selected="false">Best Seller</a>
                  </li>
               </ul>
            </div><!-- End .heading-right -->
         </div><!-- End .heading -->

         <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="clot-new-tab" role="tabpanel" aria-labelledby="clot-new-link">
               <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-16.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Shoes</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Beige faux suede runner  trainers</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $64.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 12 Reviews )</span>
                        </div><!-- End .rating-container -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-17.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Accessories</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Black boucle check scarf</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $36.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-18.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">T-Shirts</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Red stripe tie front shirt</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $56.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-19.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Bags</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Triple compartment  cross body bag</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $64.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #f1f1f1;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-20.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Shirts</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Oxford grandad shirt</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $44.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 3 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #b8b8b8;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #ebebeb;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->
               </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="clot-featured-tab" role="tabpanel" aria-labelledby="clot-featured-link">
               <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-18.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">T-Shirts</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Red stripe tie front shirt</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $56.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-19.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Bags</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Triple compartment  cross body bag</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $64.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #f1f1f1;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-16.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Shoes</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Beige faux suede runner  trainers</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $64.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 12 Reviews )</span>
                        </div><!-- End .rating-container -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-20.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Shirts</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Oxford grandad shirt</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $44.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 3 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #b8b8b8;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #ebebeb;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-17.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Accessories</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Black boucle check scarf</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $36.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->
               </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="clot-best-tab" role="tabpanel" aria-labelledby="clot-best-link">
               <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                  <div class="product">
                     <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-17.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Accessories</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Black boucle check scarf</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $36.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-20.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Shirts</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Oxford grandad shirt</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $44.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 3 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #b8b8b8;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #ebebeb;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-19.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">Bags</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Triple compartment  cross body bag</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $64.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #f1f1f1;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->

                  <div class="product">
                     <figure class="product-media">
                        <a href="product.html">
                           <img src="/site/assets/images/demos/demo-13/products/product-18.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                           <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                           <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                           <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                           <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                     </figure><!-- End .product-media -->

                     <div class="product-body">
                        <div class="product-cat">
                           <a href="#">T-Shirts</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Red stripe tie front shirt</a></h3><!-- End .product-title -->
                        <div class="product-price">
                           $56.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                           <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                           <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                     </div><!-- End .product-body -->
                  </div><!-- End .product -->
               </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
         </div><!-- End .tab-content -->
      </div><!-- End .container -->

      <div class="mb-3"></div><!-- End .mb-3 -->

      <div class="container">
         <h2 class="title title-border mb-5">Shop by Brands</h2><!-- End .title -->
         <div class="owl-carousel mb-5 owl-simple" data-toggle="owl"
              data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            },
                            "1280": {
                                "items":6,
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
            <a href="#" class="brand">
               <img src="/site/assets/images/brands/1.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
               <img src="/site/assets/images/brands/2.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
               <img src="/site/assets/images/brands/3.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
               <img src="/site/assets/images/brands/4.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
               <img src="/site/assets/images/brands/5.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
               <img src="/site/assets/images/brands/6.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
               <img src="/site/assets/images/brands/7.png" alt="Brand Name">
            </a>
         </div><!-- End .owl-carousel -->
      </div><!-- End .container -->

   </main>
@stop

@section('js')
@stop
