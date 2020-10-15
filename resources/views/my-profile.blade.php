
@extends('layouts.master')

@section('title', 'My Profile')

@section('css')
   <style>
      .table td {
          padding-top: 8px;
          padding-bottom: 8px;
      }
   </style>
@stop

@section('main')
   <main class="main">
      <div class="page-header text-center" style="background-image: url('/site/assets/images/page-header-bg.jpg');">
         <div class="container">
            <h1 class="page-title">My Account<span>Shop</span></h1>
         </div>
         <!-- End .container -->
      </div>
      <!-- End .page-header -->
      <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
         <div class="container">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{route('landing-page')}}">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Shop</a></li>
               <li class="breadcrumb-item active" aria-current="page">My Account</li>
            </ol>
         </div>
         <!-- End .container -->
      </nav>
      <!-- End .breadcrumb-nav -->

      <div class="page-content">
         <div class="dashboard">
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
               <div class="row">
                  <aside class="col-md-4 col-lg-3">
                     <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">Dashboard</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="false">Orders</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">Account Details</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">Sign Out</a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                           </form>
                        </li>
                     </ul>
                  </aside>
                  <!-- End .col-lg-3 -->

                  <div class="col-md-8 col-lg-9">
                     <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel" aria-labelledby="tab-dashboard-link">
                           <p>
                              Hello <span class="font-weight-normal text-dark">User</span> (not <span class="font-weight-normal text-dark">User</span>? <a href="#">Log out</a>)
                              <br />
                              From your account dashboard you can view your <a href="#tab-orders" class="tab-trigger-link link-underline">recent orders</a>, manage your
                              <a href="#tab-address" class="tab-trigger-link">shipping and billing addresses</a>, and <a href="#tab-account" class="tab-trigger-link">edit your password and account details</a>.
                           </p>
                        </div>
                        <!-- .End .tab-pane -->

                        <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                           <div class="row">
                             <div class="col-lg-12">
                                @if ($orders->count() > 0)
                                <table class="table table-hover">
                                   <thead class="thead-light">
                                   <tr>
                                      <th width="25%">Order ID:</th>
                                      <th width="25%">Order Placed</th>
{{--                                      <th width="20%">Status</th>--}}
                                      <th width="30%">Total</th>
                                      <th width="20%">Action</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   @foreach ($orders as $order)
                                   <tr>
                                      <td>{{ $order->id }}</td>
                                      <td>{{ presentDate($order->created_at) }}</td>
{{--                                      <td>{{ $order->statusHtml() }}</td>--}}
                                      <td>{{ presentPrice($order->billing_total) }}</td>
                                      <td>
                                         <a href="{{ route('orders.show', $order->id) }}">Views Invoice</a>
                                      </td>
                                   </tr>
                                   @endforeach
                                   </tbody>
                                </table>
                                @else
                                   <p>No order has been made yet.</p>
                                   <a href="{{route('shop.index')}}" class="btn btn-outline-primary-2"><span>GO SHOP</span><i class="icon-long-arrow-right"></i></a>
                                @endif
                             </div>
                           </div>
                        </div>
                        <!-- .End .tab-pane -->

                        <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                           <form action="{{ route('users.update') }}" method="POST">
                              @method('patch')
                              @csrf
                              <div class="row">
                                 <div class="col-sm-6">
                                    <label>Full Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required="" />
                                 </div>
                                 <!-- End .col-sm-6 -->

                                 <div class="col-sm-6">
                                    <label>Mobile Number *</label>
                                    <input type="text" class="form-control" name="phone" value="{{ old('name', $user->phone) }}"/>
                                 </div>
                                 <!-- End .col-sm-6 -->
                              </div>
                              <!-- End .row -->

                              <label>Email address *</label>
                              <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required="" />

                              <label>Date Of Birth</label>
                              <input type="date" class="form-control" name="dob"  value="{{ old('dob', $user->dob) }}" />

                              <label>Address</label>
                              <textarea name="address" class="form-control" rows="4">{{ old('address', $user->address) }}</textarea>

                              <label>New password</label>
                              <input type="password" name="password" class="form-control" />

                              <label>Confirm new password</label>
                              <input id="password-confirm" type="password"
                                     name="password_confirmation" class="form-control" />

                              <button type="submit" class="btn btn-outline-primary-2">
                                 <span>SAVE CHANGES</span>
                                 <i class="icon-long-arrow-right"></i>
                              </button>
                           </form>
                        </div>
                        <!-- .End .tab-pane -->
                     </div>
                  </div>
                  <!-- End .col-lg-9 -->
               </div>
               <!-- End .row -->
            </div>
            <!-- End .container -->
         </div>
         <!-- End .dashboard -->
      </div>
      <!-- End .page-content -->
   </main>

@stop

@section('js')

@stop
