@extends('layouts.master')

@section('title', 'Product Details')

@section('css')
      <link rel="stylesheet" href="/css/style.css">
@stop
@section('çontent')
   <main class="main">
      <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
         <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('landing-page') }}">Home</a></li>
               <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Products</a></li>
               <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
         </div>
      </nav>

      <div class="page-content">
         <div class="container">
            <div class="product-details-top">
               <div class="row">
                  <div class="col-md-6">
                     <div class="product-gallery product-gallery-vertical">
                        <div class="row">
                           <figure class="product-main-image" style="width: 400px;height: 327px">
                              <img id="product-zoom" src="{{ productImage($product->image) }}" data-zoom-image="{{ productImage($product->image) }}"
                                   alt="{{$product->name}}">
                           </figure>

                           <div id="product-zoom-gallery" class="product-image-gallery">
                              @if ($product->images)
                                 @foreach (json_decode($product->images) as $image)
                                    <a class="product-gallery-item" href="#" >
                                       <img src="{{ productImage($image) }}" alt="product side">
                                    </a>
                                 @endforeach
                              @endif
                           </div><!-- End .product-image-gallery -->
                        </div><!-- End .row -->
                     </div><!-- End .product-gallery -->
                  </div><!-- End .col-md-6 -->

                  <div class="col-md-6">
                     <div class="product-details">
                        <h1 class="product-title">{{ $product->name }}</h1>
                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                        </div><!-- End .rating-container -->

                        <div class="product-price">
                           @if ($product->spacial_price == null)

                              {{ presentPrice($product->price) }}

                           @elseif(isset($product->spacial_price))
                              {{ presentPrice($product->spacial_price) }}
                              <small class="text-light ml-3"><s>{{ presentPrice($product->price) }}</s></small>

                           @endif

                        </div>

                        <div class="product-content">
                           <p>{!! $product->details !!}</p>
                        </div>

                        <div class="details-filter-row details-row-size">
                           <label for="qty">Qty:</label>
                           <div class="product-details-quantity">
                              <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                           </div>
                        </div>

                        <div class="product-details-action">
                           @if ($product->quantity > 0)
                           <a href="javascript:void(0);" class="btn-product btn-cart" onclick="document.getElementById('cartForm').submit()"><span>add to cart</span></a>
                              <form action="{{ route('cart.store', $product) }}" method="POST" id="cartForm">
                                 {{ csrf_field() }}
                              </form>
                           @endif
                        </div>

                        <div class="product-details-footer">
                           <div class="product-cat">
                              <span>Category:</span>
                              @foreach($product->categories as $cat)
                              <a href="#">{{$cat->name}}</a>
                              @endforeach

                           </div>
                        </div>
                     </div>
                  </div><!-- End .col-md-6 -->
               </div><!-- End .row -->
            </div><!-- End .product-details-top -->

            <div class="product-details-tab">
               <ul class="nav nav-pills justify-content-center" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                  </li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                     <div class="product-desc-content">
                        <h3>Product Information</h3>
                        <p>{!! $product->description !!}</p>
                     </div>
                  </div>
               </div>
            </div><

            <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->

            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                 data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
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
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>

               @foreach ($mightAlsoLike as $product)
               <div class="product product-7 text-center">
                  <figure class="product-media">
                     <span class="product-label label-new">New</span>
                     <a href="product.html">
                        <img src="{{ productImage($product->image) }}" alt="Product image" class="product-image">
                     </a>

                     <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                     </div><!-- End .product-action-vertical -->

                     <div class="product-action">
                        @if ($product->quantity > 0)
                           <a href="javascript:void(0);" class="btn-product btn-cart" onclick="document.getElementById('cartForm').submit()"><span>add to cart</span></a>
                           <form action="{{ route('cart.store', $product) }}" method="POST" id="cartForm">
                              {{ csrf_field() }}
                           </form>
                        @endif

                     </div>

                  </figure>

                  <div class="product-body">
                     <div class="product-cat">
                        <a href="#">Women</a>
                     </div><!-- End .product-cat -->
                     <h3 class="product-title"><a href="product.html">{{$product->name}}</a></h3><!-- End .product-title -->
                     <div class="product-price">
                        @if ($product->spacial_price == null)

                           {{ presentPrice($product->price) }}

                        @elseif(isset($product->spacial_price))
                           {{ presentPrice($product->spacial_price) }}
                           <small class="text-dark ml-3"><s>{{ presentPrice($product->price) }}</s></small>

                        @endif
                     </div><!-- End .product-price -->
                     <div class="ratings-container">
                        <div class="ratings">
                           <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 2 Reviews )</span>
                     </div><!-- End .rating-container -->

                     <div class="product-nav product-nav-thumbs">

                     </div>
                  </div>
               </div>
               @endforeach

            </div>
         </div><!-- End .container -->
      </div><!-- End .page-content -->
   </main>


@stop

@section('js')
   <script src="/js/jquery.elevateZoom.min.js"></script>

   <script>
      (function(){
         const currentImage = document.querySelector('#product-zoom');
         const images = document.querySelectorAll('.product-gallery-item');
         images.forEach((element) => element.addEventListener('click', thumbnailClick));
         function thumbnailClick(e) {
            console.log('OK');
            e.preventDefault();
            currentImage.classList.remove('active');
            currentImage.src = this.querySelector('img').src;
            currentImage.addEventListener('transitionend', () => {
               currentImage.src = this.querySelector('img').src;
               currentImage.classList.add('active');
            })
            images.forEach((element) => element.classList.remove('selected'));
            this.classList.add('selected');
         }
      })();
   </script>

   <script>

      // // Product Image Zoom plugin - product pages
      // if ( $.fn.elevateZoom ) {
      //    $('#product-zoom').elevateZoom({
      //       gallery:'product-zoom-gallery',
      //       galleryActiveClass: 'active',
      //       zoomType: "inner",
      //       cursor: "crosshair",
      //       zoomWindowFadeIn: 400,
      //       zoomWindowFadeOut: 400,
      //       responsive: true
      //    });
      //
      //    // On click change thumbs active item
      //    $('.product-gallery-item').on('click', function (e) {
      //       $('#product-zoom-gallery').find('a').removeClass('active');
      //       $(this).addClass('active');
      //
      //       e.preventDefault();
      //    });
      //
      //    var ez = $('#product-zoom').data('elevateZoom');
      //
      //    // Open popup - product images
      //    $('#btn-product-gallery').on('click', function (e) {
      //       if ( $.fn.magnificPopup ) {
      //          $.magnificPopup.open({
      //             items: ez.getGalleryList(),
      //             type: 'image',
      //             gallery:{
      //                enabled:true
      //             },
      //             fixedContentPos: false,
      //             removalDelay: 600,
      //             closeBtnInside: false
      //          }, 0);
      //
      //          e.preventDefault();
      //       }
      //    });
      // }
   </script>
@stop
