<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

use App\Http\Controllers\CartController;


Route::get('/', 'Auth\LoginController@home');

// Homepage
Route::get('/catalog', 'CatalogController@index')->name('catalog');


// Catalog
Route::get('find', 'CatalogController@find');
Route::get('search', 'CatalogController@search');
Route::get('item/{id}', 'CatalogController@openProduct')->name('openProduct');
Route::get('rateProduct/{id}', 'CatalogController@getProduct')->name('rateProduct')->middleware('auth');
Route::post('addReview/{productID}/{clientID}','ReviewController@addReview')->name('rateProduct.addReview');
Route::get('deleteReview/{id}', 'ReviewController@deleteReview')->name('deleteReview')->middleware('auth');
Route::put('editReview/{id}', 'ReviewController@editReview')->name('editReview')->middleware('auth');



// Manage Profile
Route::get('myprofile', 'UserController@index')->middleware('auth')->name('myprofile');
Route::get('myprofile','UserController@userView')->middleware('auth');
Route::post('myprofile/submitUserInfo','UserController@editUserInfo')->middleware('auth');
Route::get('myprofile/account_data','UserController@userView')->middleware('auth');
Route::view('myprofile/account_data','pages/account_data')->middleware('auth');
Route::post('myprofile/submitAccountData','UserController@submitAccountData')->middleware('auth');
Route::get('/myprofile/myorders', 'UserController@myOrders')->middleware('auth');

// Static pages
Route::view('/aboutus','pages/aboutus');
Route::view('/contacts','pages/contacts');
Route::view('/faq','pages/faq');

// Basket
Route::get('add-to-basket/{id}', 'BasketController@add')->name('basket.add')->middleware('auth');
Route::get('clear-cart', 'BasketController@clearBasket')->name('basket.clearBasket')->middleware('auth');
Route::get('increase/{id}', 'BasketController@increaseQty')->name('basket.increaseQty')->middleware('auth');
Route::get('decrease/{id}', 'BasketController@decreaseQty')->name('basket.decreaseQty')->middleware('auth');


// Authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink($request->only('email'));

    return $status === Password::RESET_LINK_SENT ?
                back()->with(['status' => __($status)]) : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);

    $status = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status)) : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

// Admin pages
//Admin manage users
Route::view('admin_manage_users','pages/admin_manage_users')->middleware('auth')->name('admin_manage_users');
Route::get('/admin_manage_users','ManageUsersController@getUsers')->middleware('auth');
Route::post('/admin_manage_users/addUser','ManageUsersController@addUser')->middleware('auth');
Route::post('/admin_manage_users/editUser','ManageUsersController@editUser')->middleware('auth');
Route::get('/admin_manage_users/delete/{id}', 'ManageUsersController@deleteUser')->name('users.delete')->middleware('auth');
Route::get('/admin_manage_users/toggleBlock/{id}', 'ManageUsersController@toggleBlock')->name('users.toggleBlock')->middleware('auth');
Route::post('/admin_manage_users/addAdministrator','ManageUsersController@addAdministrator')->middleware('auth');
Route::post('/searchUser', 'ManageUsersController@searchUser')->middleware('auth')->name('searchUser');


// Cart
Route::post("add_to_cart", [CartController::class, 'addToCart']);

Route::post("remove_from_cart", [CartController::class, 'removeFromCart']);
Route::post("clear_cart", [CartController::class, 'clearCart']);

Route::get('cartlist', [CartController::class, 'cartList']);

// Checkout
Route::view('checkout','pages/checkout')->middleware('auth');
Route::get('paid', [CartController::class, 'paid']);