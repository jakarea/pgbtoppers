<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IntakeController;
use App\Http\Controllers\Admin\StripeController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('frontend.home');
    Route::get('/ik-zoek', 'zoek_ben')->name('frontend.zoek_ben');

    Route::get('/zorgverleners', 'ikben')->name('frontend.ikben')->middleware('auth');
    Route::get('/zorgverleners/{id}', 'ikbenview')->name('frontend.ikbenview')->middleware('auth');

    Route::get('/huishoudelijke-hulp', 'ikzoek')->name('frontend.ikzoek')->middleware('auth');
    Route::get('/huishoudelijke-hulp/{id}', 'ikzoekview')->name('frontend.ikzoekview')->middleware('auth');

    Route::get('/meld', 'meld')->name('frontend.meld');
    Route::get('/onze', 'onze')->name('frontend.onze');

    // home contact store
    Route::post('/home/store', 'store')->name('home.store');

});


Route::controller(AboutUsController::class)->group(function () {
    Route::get('/over-ons', 'index')->name('frontend.about_us');
});


Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile/{user}', 'show')->name('frontend.profile');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('frontend.contact');
});

Route::controller(IntakeController::class)->group(function () {
    Route::get('/intake', 'index')->name('intake.index');
    Route::post('/intake/store', 'store')->name('intake.store');
});

Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    Session::flush();
    return Redirect::to('/');
})->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'name' => 'admin.'], function () {

    Route::controller(AdminHomeController::class)->group(function () {
        
        Route::get('/intake', 'intake')->name('admin.intake');
        Route::get('/testimonial', 'testimonial')->name('admin.testimonial');
        Route::get('/testimonial/add', 'add')->name('testimonial.add');
        Route::get('/testimonial/edit/{id}', 'edit')->name('testimonial.edit');
        Route::post('/testimonial/edit/{id}', 'update')->name('testimonial.update');
        Route::post('/testimonial/store', 'store')->name('testimonial.store');
        Route::get('/testimonial/destroy/{id}', 'destroy')->name('testimonial.destroy');
    });

    Route::controller(ServiceController::class)->group(function () { 

        Route::get('/services', 'index')->name('admin.services'); 
        Route::get('/services-provider', 'indexprovider')->name('admin.services-provider');

        // ik-zoek store
        Route::get('/services/add', 'add')->name('services.add'); 
        Route::post('/services/add', 'store')->name('services.store'); 

        // ik-ben store
        Route::get('/services-provider/add', 'provideradd')->name('services-provider.add'); 
        Route::post('/services-provider/add', 'providerstore')->name('services-provider.store'); 

        Route::get('/services-provider/{id}', 'view')->name('services.view');

        Route::get('/services-provider/{id}/approve', 'approve')->name('services.approve');
        Route::get('/services-provider/{id}/pending', 'pending')->name('services.pending');

        Route::get('/services/{id}/edit', 'edit')->name('services.edit');

        Route::post('/services/update/{id}', 'update')->name('services.update'); 
        Route::get('/services/destroy/{id}', 'destroy')->name('services.destroy');

        Route::post('/send-mail', 'sendMailToSeller');

        Route::get('/mailbox', 'mailBox')->name('admin.mailbox');
        Route::get('/mailbox/{id}', 'mailBoxView')->name('admin.mailboxsingle');
    });

    Route::controller(UserController::class)->group(function (){ 
        Route::get('/', 'userprofile')->name('admin.userprofile');
        Route::get('/users', 'index')->name('users.index');
        Route::get('/users/add', 'add')->name('users.add');
        Route::post('/users/add', 'strore')->name('users.store');

        Route::get('/users/{id}/edit', 'edit')->name('users.edit');
        Route::post('/users/{id}/edit', 'update')->name('users.update');
        Route::get('/users/{id}/delete', 'destroy')->name('users.destroy');
    });

    Route::get('/payment',[StripeController::class,'checkout'])->name('admin.payment');
    Route::post('/payment/process',[StripeController::class,'paymentSession']);
    Route::get('/payment/success/{session_id}',[StripeController::class,'paymentSuccess']);
    Route::get('/payment/cancel',[StripeController::class,'paymentCancel']);


    Route::get('/payment-history', [StripeController::class,'paymentHistory'])->name('admin.payment-history');
    Route::get('/payment-history/{id}', [StripeController::class,'paymentHistorySingle'])->name('admin.payment-history-single');
});
