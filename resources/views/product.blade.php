@extends('layouts.master')

@section('title', 'Product Details')
@section('css')
   <style>
      .btn-wishlist::before {
         content: "\f234";
      }
   </style>
@stop

@section('main')
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
            <div class="product-details-top mb-2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="product-gallery product-gallery-vertical">
                        <div class="row">
                           <figure class="product-main-image">
                              <img id="product-zoom" src="{{ productImage($product->image) }}" data-zoom-image="{{ productImage($product->image) }}" alt="product image">
                              <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                 <i class="icon-arrows"></i>
                              </a>
                           </figure><!-- End .product-main-image -->

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
                     <div class="product-details product-details-centered">
                        <h1 class="product-title">{{ $product->name }}</h1><!-- End .product-title -->

                        <div class="ratings-container">
                           <div class="ratings">
                              <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                           </div><!-- End .ratings -->
                           <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                        </div><!-- End .rating-container -->

                        <div class="product-price">
                           @if ($product->spacial_price == null)
                              {{ presentPrice($product->price) }}
                           @elseif(isset($product->spacial_price))
                              {{ presentPrice($product->spacial_price) }}
                              <small class="text-light ml-3"><s>{{ presentPrice($product->price) }}</s></small>
                           @endif
                        </div><!-- End .product-price -->

                        <div class="product-content">
                           <p>{!! $product->details !!}</p>
                        </div><!-- End .product-content -->

                        <div class="details-filter-row details-row-size">
                           <label for="size">Size:</label>
                           <div class="select-custom">
                              <select name="size" id="size" class="form-control">
                                 <option value="#" selected="selected">One Size</option>
                                 <option value="s">Small</option>
                                 <option value="m">Medium</option>
                                 <option value="l">Large</option>
                                 <option value="xl">Extra Large</option>
                              </select>
                           </div>
                           <label for="size">Color:</label>
                           <div class="select-custom">
                              <select name="size" id="size" class="form-control">
                                 <option value="#" selected="selected">One Size</option>
                                 <option value="s">Small</option>
                                 <option value="m">Medium</option>
                                 <option value="l">Large</option>
                                 <option value="xl">Extra Large</option>
                              </select>
                           </div>
                        </div><!-- End .details-filter-row -->

                        <div class="product-details-action">
                           <div class="details-action-col">
                              <div class="product-details-quantity">
                                 <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                              </div><!-- End .product-details-quantity -->

                              @if ($product->quantity > 0)
                                 <a href="javascript:void(0);" class="btn-product btn-cart" onclick="document.getElementById('cartForm').submit()"><span>add to cart</span></a>
                                 <form action="{{ route('cart.store', $product) }}" method="POST" id="cartForm">
                                    {{ csrf_field() }}
                                 </form>
                              @endif
                           </div><!-- End .details-action-col -->

                           <div class="details-action-wrapper">
                              <a href="#" class="btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                           </div><!-- End .details-action-wrapper -->
                        </div><!-- End .product-details-action -->

                        <div class="product-details-footer">
                           <div class="product-cat">
                              <span>Category:</span>
                              <a href="#">Women</a>
                           </div><!-- End .product-cat -->

                           <div class="social-icons social-icons-sm">
                              <span class="social-label">Share:</span>
                              <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                              <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                              <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                              <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                           </div>
                        </div><!-- End .product-details-footer -->
                     </div><!-- End .product-details -->
                  </div><!-- End .col-md-6 -->
               </div><!-- End .row -->
            </div><!-- End .product-details-top -->

            <div class="product-details-tab">
               <ul class="nav nav-pills justify-content-center" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                  </li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                     <div class="product-desc-content">
                        <h3>Product Information</h3>
                        <p>{!! $product->description !!}</p>
                     </div><!-- End .product-desc-content -->
                  </div><!-- .End .tab-pane -->
                  <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                     <div class="reviews">
                        <h3>Reviews (2)</h3>
                        <div class="review">
                           <div class="row no-gutters">
                              <div class="col-auto">
                                 <h4><a href="#">Samanta J.</a></h4>
                                 <div class="ratings-container">
                                    <div class="ratings">
                                       <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                 </div><!-- End .rating-container -->
                                 <span class="review-date">6 days ago</span>
                              </div><!-- End .col -->
                              <div class="col">
                                 <h4>Good, perfect size</h4>

                                 <div class="review-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis doloremque, possimus, explicabo, autem fugit beatae quae voluptas!</p>
                                 </div><!-- End .review-content -->

                                 <div class="review-action">
                                    <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                    <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                 </div><!-- End .review-action -->
                              </div><!-- End .col-auto -->
                           </div><!-- End .row -->
                        </div><!-- End .review -->

                        <div class="review">
                           <div class="row no-gutters">
                              <div class="col-auto">
                                 <h4><a href="#">John Doe</a></h4>
                                 <div class="ratings-container">
                                    <div class="ratings">
                                       <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                 </div><!-- End .rating-container -->
                                 <span class="review-date">5 days ago</span>
                              </div><!-- End .col -->
                              <div class="col">
                                 <h4>Very good</h4>

                                 <div class="review-content">
                                    <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis laudantium iste amet. Cum non voluptate eos enim, ab cumque nam, modi, quas iure illum repellendus, blanditiis perspiciatis beatae!</p>
                                 </div><!-- End .review-content -->

                                 <div class="review-action">
                                    <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                    <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                 </div><!-- End .review-action -->
                              </div><!-- End .col-auto -->
                           </div><!-- End .row -->
                        </div><!-- End .review -->
                     </div><!-- End .reviews -->
                  </div><!-- .End .tab-pane -->
               </div><!-- End .tab-content -->
            </div><!-- End .product-details-tab -->

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
      </div>
   </main>


@stop

@section('script')

   <script>
      $("#product-zoom").elevateZoom({
         zoomType: "inner",
         cursor: "crosshair"
      });
   </script>

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

@stop
