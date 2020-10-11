<?php

Route::get('/', 'LandingPageController@index')->name('landing-page');

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

//Cart route:
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
Route::post('/cart/update/{rowId}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth:customer');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');

Route::get('/guestCheckout', 'CheckoutController@index')->name('guestCheckout.index');
Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');


Route::group(['prefix' => 'backpanel'], function () {

    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login.post');
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
});

Route::group(['prefix' => 'backpanel', 'middleware' => 'admin'], function () {

    Route::get('home', 'Admin\DashboardController@index')->name('admin.dashboard');

    //settings route:
    Route::get('settings', 'Admin\SettingsController@showSettings')->name('settings');
    Route::post('settings', 'Admin\SettingsController@storeSetting')->name('store-settings');

    Route::resource('products', 'Admin\ProductController');

    Route::resource('sliders', 'Admin\SliderController');

    Route::resource('categories', 'Admin\CategoryController');
    Route::resource('sub-categories', 'Admin\SubcategoryController');
    Route::resource('brands', 'Admin\BrandController');
    Route::resource('customers', 'Admin\CustomersController');

    Route::post('order/status/{id}', 'Admin\OrdersController@OrderStatus')->name('order.status');
    Route::post('payment/status/{id}', 'Admin\OrdersController@PaymentStatus')->name('payment.status');
    Route::resource('orders', 'Admin\OrdersController', [
        'as' => 'admin'
    ]);
});



Route::group(['namespace' => 'Customer\Auth'], function() {

    Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'RegisterController@createAdmin')->name('register');

    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@adminLogin');
    Route::post('/logout', 'LoginController@logout')->name('logout');

});

//Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'ShopController@search')->name('search');

Route::get('/search-algolia', 'ShopController@searchAlgolia')->name('search-algolia');

Route::middleware('auth:customer')->group(function () {

    Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
    Route::patch('/my-profile', 'UsersController@update')->name('users.update');

    Route::get('/my-orders', 'OrdersController@index')->name('orders.index');
    Route::get('/my-orders/{order}', 'OrdersController@show')->name('orders.show');

});
