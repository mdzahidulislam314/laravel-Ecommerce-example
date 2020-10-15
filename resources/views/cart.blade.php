@extends('layouts.master')

@section('title', 'Cart')

@section('css')
    <style>
        button#removeCoupon {
            background: none;
            border: none;
        }
    </style>
@stop

@section('main')
    <main class="main">
        <div class="page-header text-center" style="background-image: url(&#39;/img/page-header-bg.jpg&#39;)">
            <div class="container">
            @if (Cart::count() > 0)
                
                <h1 class="page-title">{{ Cart::count() }} item(s) in Shopping Cart<span>Shop</span></h1>
            </div>
            
        </div>
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('landing-page') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </div>
        </nav>

        <div class="page-content">
            <div class="cart">
                <div class="container">
                    @if (session()->has('success_message'))
                        <div class="alert alert-success mb-2">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif
                    @if (session()->has('error_message'))
                        <div class="alert alert-danger mb-2">
                            {{ session()->get('error_message') }}
                        </div>
                    @endif
                    @if(count($errors) > 0)
                        <div class="alert alert-danger mb-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                    <div class="col-lg-9">
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                <th width="40px">Product</th>
                                <th width="20px">Price</th>
                                <th width="10px">Quantity</th>
                                <th width="20px">Total</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="{{ route('shop.show', $item->model->slug) }}">
                                            <img src="{{ productImage($item->model->image) }}" alt="Product image">
                                            </a>
                                        </figure>
                                        <h3 class="product-title">
                                            <a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a>
                                        </h3>
                                    </div>
                                </td>
                                <td class="price-col">{{ presentPrice($item->subtotal) }}</td>
                                <td class="quantity-col">
                                    <form action="{{route('cart.update', $item->rowId)}}" method="POST" id="updateQty">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->model->id}}">
                                        <div class="cart-product-quantity">
                                            <input type="number" name="quantity" class="form-control"
                                                   value="{{$item->qty}}" min="1" max="10" step="1" data-decimals="0" required>
                                        </div>
                                    </form>
                                </td>
                                <td class="total-col">{{ presentPrice($item->subtotal) }}</td>

                                <td class="remove-col">
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn-remove"><i class="icon-close"></i></button>
                                    </form>
                                    
                                </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="cart-bottom">
                            @if (! session()->has('coupon'))
                                <form action="{{ route('coupon.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="cart-discount">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="coupon_code" id="coupon_code" placeholder="coupon code">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </form>
                            @endif

                            <a href="javascript:void(0);" class="btn btn-outline-dark-2"
                               onclick="document.getElementById('updateQty').submit()"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
                        </div>
                    </div>
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Cart Total</h3>
                            <table class="table table-summary">
                                <tbody>

                                <tr class="summary-subtotal">
                                    <td>Subtotal:</td>
                                    <td>{{ presentPrice(Cart::subtotal()) }}</td>
                                </tr>

                                {{--Coupon area Start--}}
                                @if (session()->has('coupon'))
                                <tr class="summary-subtotal" style="border-bottom: 2px dashed #39f">
                                    <td>Discount:({{session()->get('coupon')['name']}})
                                        <form action="{{ route('coupon.destroy') }}" method="POST" class="d-inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" id="removeCoupon" class="text-danger">X</button>
                                        </form>
                                    </td>
                                    <td class="text-danger">- {{ presentPrice(session()->get('coupon')['discount']) }}</td>
                                </tr>
                                <tr class="summary-subtotal">
                                    <td>New Subtotal:</td>
                                    <td>{{presentPrice($newSubtotal)}}</td>
                                </tr>
                                @endif
                                {{--Coupon area End--}}

                                <tr class="summary-subtotal">
                                    <td>Vat:</td>
                                    <td>{{ presentPrice($newTax) }}</td>
                                </tr>
                                <tr class="summary-total">
                                    <td>Grand Total:</td>
                                    <td>{{ presentPrice($newTotal) }}</td>
                                </tr>

                                </tbody>
                            </table>
                            <a href="{{ route('checkout.index') }}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                        </div>
                        <a href="{{ route('shop.index') }}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                    </aside>
                    
                    </div>
                </div>
            </div>
        </div>
        @else

                <h3>No items in Cart!</h3>
                <div class="spacer"></div>
                <a href="{{ route('shop.index') }}" class="btn-product">Continue Shopping</a>
                <div class="spacer"></div>

        @endif
    </main>
@stop

@section('js')

@stop

