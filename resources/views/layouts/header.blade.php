<header class="header header-10 header-intro-clearance">
   <div class="header-top">
      <div class="container-fluid">
         @php
            use App\Settings;$settings = Settings::all();
             $settingsArr = [];
             foreach ($settings as $setting) {
                 $settingsArr[$setting->key] = $setting->value;
             }

         @endphp
         <div class="header-left">
            <a href="tel:#" class="mr-4">{{$settingsArr['phone'] ?? ''}}</a>
            <a href="tel:#">{{$settingsArr['email'] ?? ''}}</a>
         </div><!-- End .header-left -->

         <div class="header-right">
            <ul class="top-menu">
               <li>
                  <a href="#">Links</a>
                  <ul>
                     <li>
                        <div class="header-dropdown">
                           <a href="#">English</a>
                           <div class="header-menu">
                              <ul>
                                 <li><a href="#">English</a></li>
                                 <li><a href="#">Bangla</a></li>
                              </ul>
                           </div>
                        </div>
                     </li>

                     @guest('customer')
                        <li class="login">
                           <a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a>
                        </li>
                     @else
                        <li class="myaccount">
                           <a href="{{ route('users.edit') }}"><i class="icon-user"></i>My Account</a>
                        </li>
                        <li>
                           <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                           </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
                        </form>
                     @endguest
                  </ul>
               </li>
            </ul><!-- End .top-menu -->
         </div><!-- End .header-right -->
      </div><!-- End .container -->
   </div><!-- End .header-top -->

   <div class="header-middle">
      <div class="container">
         <div class="header-left">
            <button class="mobile-menu-toggler">
               <span class="sr-only">Toggle mobile menu</span>
               <i class="icon-bars"></i>
            </button>

            <a href="{{route('landing-page')}}" class="logo">
               <img src="{{asset($settingsArr['logo'] ?? '')}}" alt="Chunaputi Logo" width="105" height="25">
            </a>
         </div><!-- End .header-left -->

         <div class="header-center">
            <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
               <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
               <form action="#" method="get">
                  <div class="header-search-wrapper search-wrapper-wide">
                     <div class="select-custom">
                        <select id="cat" name="cat">
                           <option value="">All Departments</option>
                           <option value="1">Fashion</option>
                           <option value="2">- Women</option>
                           <option value="3">- Men</option>
                           <option value="4">- Jewellery</option>
                           <option value="5">- Kids Fashion</option>
                           <option value="6">Electronics</option>
                           <option value="7">- Smart TVs</option>
                           <option value="8">- Cameras</option>
                           <option value="9">- Games</option>
                           <option value="10">Home &amp; Garden</option>
                           <option value="11">Motors</option>
                           <option value="12">- Cars and Trucks</option>
                           <option value="15">- Boats</option>
                           <option value="16">- Auto Tools &amp; Supplies</option>
                        </select>
                     </div><!-- End .select-custom -->
                     <label for="q" class="sr-only">Search</label>
                     <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                     <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                  </div><!-- End .header-search-wrapper -->
               </form>
            </div><!-- End .header-search -->
         </div>

         <div class="header-right">
            <div class="header-dropdown-link">
               <a href="wishlist.html" class="wishlist-link">
                  <i class="icon-heart-o"></i>
                  <span class="wishlist-count">3</span>
                  <span class="wishlist-txt">Wishlist</span>
               </a>

               <div class="dropdown cart-dropdown">
                  <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                     <i class="icon-shopping-cart"></i>
                     @if (Cart::instance('default')->count() > 0)
                        <span class="cart-count">{{ Cart::instance('default')->count() }}</span>
                     @endif
                     <span class="cart-txt">Cart</span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right">
                     <div class="dropdown-cart-products">
                        <?php
                           $getCarts = Cart::content();
                        ?>
                        @foreach($getCarts as $getCart)
                        <div class="product">
                           <div class="product-cart-details">
                              <h4 class="product-title">
                                 <a href="product.html">{{$getCart->name}}</a>
                              </h4>
                              <span class="cart-product-info">
                                <span class="cart-product-qty">{{$getCart->qty}}</span>
                                x {{$getCart->price*$getCart->qty}}
                              </span>
                           </div>
                           <!-- End .product-cart-details -->

                           <figure class="product-image-container">
                              <a href="product.html" class="product-image">
                                 <img src="{{$getCart->model->image}}" alt="product" />
                              </a>
                           </figure>
                           <a href="" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                        </div>
                        @endforeach
                     </div>

                     <div class="dropdown-cart-total">
                        <span>Total</span>

                        <span class="cart-total-price">{{Cart::subtotal()}}</span>
                     </div>
                     <!-- End .dropdown-cart-total -->
                     <div class="dropdown-cart-action">
                        <a href="{{route('cart.index')}}" class="btn btn-primary">View Cart</a>
                        <a href="{{route('checkout.index')}}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                     </div>
                     <!-- End .dropdown-cart-total -->
                  </div>


               </div><!-- End .cart-dropdown -->
            </div>
         </div><!-- End .header-right -->
      </div><!-- End .container -->
   </div><!-- End .header-middle -->

   <div class="header-bottom sticky-header">
      <div class="container">
         <div class="header-left">
            <div class="dropdown category-dropdown @yield('show') is-on" data-visible="true">
               <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                  data-display="static" title="Browse Categories">
                  Browse Categories
               </a>
               <div class="dropdown-menu @yield('show')">
                  <nav class="side-nav">
                     <ul class="menu-vertical sf-arrows">

                        <li class="megamenu-container">
                           <a class="sf-with-ul" href="#">Electronics</a>
                           <div class="megamenu">
                              <div class="row no-gutters">
                                 <div class="col-md-8">
                                    <div class="menu-col">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="menu-title">Laptops & Computers</div><!-- End .menu-title -->
                                             <ul>
                                                <li><a href="#">Desktop Computers</a></li>
                                                <li><a href="#">Monitors</a></li>
                                                <li><a href="#">Laptops</a></li>
                                                <li><a href="#">iPad & Tablets</a></li>
                                                <li><a href="#">Hard Drives & Storage</a></li>
                                                <li><a href="#">Printers & Supplies</a></li>
                                                <li><a href="#">Computer Accessories</a></li>
                                             </ul>

                                             <div class="menu-title">TV & Video</div><!-- End .menu-title -->
                                             <ul>
                                                <li><a href="#">TVs</a></li>
                                                <li><a href="#">Home Audio Speakers</a></li>
                                                <li><a href="#">Projectors</a></li>
                                                <li><a href="#">Media Streaming Devices</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li><a href="#">Home Appliances</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
         <div class="header-center">
            <nav class="main-nav">
               <ul class="menu sf-arrows">
                  <li class="megamenu-container active">
                     <a href="{{route('landing-page')}}">Home</a>
                  </li>
                  <li>
                     <a href="{{route('shop.index')}}" >Shop</a>
                  </li>
                  <li>
                     <a href="#" class="sf-with-ul">Product</a>

                     <div class="megamenu megamenu-sm">
                        <div class="row no-gutters">
                           <div class="col-md-6">
                              <div class="menu-col">
                                 <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                 <ul>
                                    <li><a href="product.html">Default</a></li>
                                    <li><a href="product-centered.html">Centered</a></li>
                                    <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="product-gallery.html">Gallery</a></li>
                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                    <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                    <li><a href="product-fullwidth.html">Full Width</a></li>
                                    <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                 </ul>
                              </div><!-- End .menu-col -->
                           </div><!-- End .col-md-6 -->

                           <div class="col-md-6">
                              <div class="banner banner-overlay">
                                 <a href="category.html">
                                    <img src="/admin/assets/images/menu/banner-2.jpg" alt="Banner">

                                    <div class="banner-content banner-content-bottom">
                                       <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                    </div><!-- End .banner-content -->
                                 </a>
                              </div><!-- End .banner -->
                           </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                     </div><!-- End .megamenu megamenu-sm -->
                  </li>
               </ul><!-- End .menu -->
            </nav><!-- End .main-nav -->
         </div><!-- End .col-lg-9 -->
         <div class="header-right">
            <i class="la la-lightbulb-o"></i><p><span>Clearance Up to 30% Off</span></p>
         </div>
      </div><!-- End .container -->
   </div><!-- End .header-bottom -->
</header>