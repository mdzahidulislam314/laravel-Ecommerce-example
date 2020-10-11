@extends('layouts.master')

@section('title', 'Shop')

@section('css')
    <link rel="stylesheet" href="/css/shop.css">
@stop

@section('çontent')

    <main class="main">
        <div class="page-header text-center" style="background-image: url(&#39;/img/shop/page-header-bg.jpg&#39;)">
            <div class="container">
                <h1 class="page-title">{{ $products->total() }} result(s) for '{{ request()->input('query') }}'</h1>
            </div>
        </div>
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('landing-page') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Search result</li>
                </ol>
            </div>
        </nav>

        <div class="container">
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="toolbox">
                            <div class="toolbox-left">
                            </div>
                            <div class="toolbox-right">
                                <div class="toolbox-sort">
                                    <label for="sortby">Sort by:</label>
                                    <a class="mr-2" href="{{ route('search', ['category'=> request()->category, 'sort' => 'low_high']) }}">Low to High</a> |
                                    <a class="ml-2" href="{{ route('search', ['category'=> request()->category, 'sort' => 'high_low']) }}">High to Low</a>
                                </div>
                            </div>
                        </div>

                        <div class="products mb-3">
                            <div class="row justify-content-center">
                                @forelse ($products as $product)
                                    <div class="col-6 col-md-3 col-lg-3">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-new">New</span>
                                                <a href="{{ route('shop.show', $product->slug) }}">
                                                    <img src="{{ productImage($product->image) }}" alt="Product image" class="product-image">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div>
                                                <div class="product-action">
                                                    @if ($product->quantity > 0)
                                                        <form action="{{ route('cart.store', $product) }}" method="POST" id="fCartForm">
                                                            {{ csrf_field() }}
                                                        </form>
                                                        <a href="#" class="btn-product btn-cart" onclick="document.getElementById('fCartForm').submit()"><span>add to cart</span></a>
                                                    @endif
                                                </div>
                                            </figure>

                                            <div class="product-body">

                                                <h3 class="product-title"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h3>
                                                <div class="product-price">
                                                    @if ($product->spacial_price == null)
                                                        {{ presentPrice($product->price) }}
                                                    @elseif(isset($product->spacial_price))
                                                        <span class="text-danger">{{ presentPrice($product->spacial_price) }}</span>
                                                        <span class="text-light ml-3"><s>{{ presentPrice($product->price) }}</s></span>
                                                    @endif
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 20%;"></div>
                                                    </div>
                                                    <span class="ratings-text">( 2 Reviews )</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div style="text-align: left">No items found</div>
                                @endforelse
                            </div>
                        </div>

                        {{ $products->links() }}
                    </div>

                </div>
            </div>
        </div>
    </main>

@stop

@section('js')

    <script src="/js/shop.js"></script>

@stop















{{--@extends('layout')

@section('title', 'Products')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shop</span>
    @endcomponent

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                @foreach ($categories as $category)
                    <li class="{{ setActiveCategory($category->slug) }}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div> <!-- end sidebar -->
        <div>
            <div class="products-header">
                <h1 class="stylish-heading">{{ $categoryName }}</h1>
                <div>
                    <strong>Price: </strong>
                    <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'low_high']) }}">Low to High</a> |
                    <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'high_low']) }}">High to Low</a>

                </div>
            </div>

            <div class="products text-center">
                @forelse ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                    </div>
                @empty
                    <div style="text-align: left">No items found</div>
                @endforelse
            </div> <!-- end products -->

            <div class="spacer"></div>
            {{ $products->appends(request()->input())->links() }}
        </div>
    </div>

@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection--}}



{{--@extends('layouts.master')--}}

{{--@section('css')--}}
{{--    <link rel="stylesheet" href="/css/shop.css">--}}
{{--@stop--}}

{{--@section('çontent')--}}


{{--            @if(count($errors) > 0)--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="search-results-container container">--}}
{{--            <h1>Search Results</h1>--}}
{{--            <p class="search-results-count">{{ $products->total() }} result(s) for '{{ request()->input('query') }}'</p>--}}

{{--            @if ($products->total() > 0)--}}
{{--            <table class="table table-bordered table-striped">--}}
{{--                <thead>--}}
{{--                    <tr>--}}
{{--                        <th>Name</th>--}}
{{--                        <th>Details</th>--}}
{{--                        <th>Description</th>--}}
{{--                        <th>Price</th>--}}
{{--                    </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                    @foreach ($products as $product)--}}
{{--                        <tr>--}}
{{--                            <th><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></th>--}}
{{--                            <td>{{ $product->details }}</td>--}}
{{--                            <td>{{ str_limit($product->description, 80) }}</td>--}}
{{--                            <td>{{ $product->presentPrice() }}</td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}

{{--            {{ $products->appends(request()->input())->links() }}--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </main>--}}

{{--@stop--}}
