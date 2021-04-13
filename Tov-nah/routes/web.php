<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\registerController;
use App\http\Controllers\HomeController;
use App\http\Controllers\otherController;
use App\http\Controllers\contactController;
use App\http\Controllers\hotelController;
use App\http\Controllers\locationController;
use App\http\Controllers\restaurantController;
use App\http\Controllers\thingController;
use App\http\Controllers\testController;
use App\http\Controllers\b_LocationController;
use App\http\Controllers\MailController;


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

Route::get('/', [homeController::class, 'DisplayHome']);
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile/{id}', [registerController::class, 'profile']);
});

Route::group(['middleware' => ['auth' , 'admin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    // ----------Backend-------------------
    //UserTable
    Route::get('/profile-acc/{id}', [registerController::class, 'profiled']);
    Route::get('/dataUser', [registerController::class,'registered']);
    Route::get('/edit/{id}', [registerController::class, 'edit']);
    Route::post('/create', [registerController::class, 'create']);
    Route::put('/register-update/{id}', [registerController::class, 'update']);
    Route::delete('/deleteUser/{id}', [registerController::class, 'delete']);
    Route::get('/contact-admin', [MailController::class, 'data']);
    //Hotel
    //Hotel -> insert data into hotel table
    Route::get('/back-hotel', [hotelController::class, 'insertHotel']);
    Route::post('/insertHotel', [hotelController::class, 'store'])->name('insertHotel');
    //Hotel -> list and delte
    Route::get('/listHotel', [hotelController::class, 'listHotel']);
    Route::delete('/deleteHotel/{id}', [hotelController::class, 'deleteHotel']);
    //Hotel -> update
    Route::get('/updateHotel/{id}', [hotelController::class, 'showHotel']);
    Route::post('/updateHotel', [hotelController::class, 'editHotel'])->name('updateHotel');


    //Restaurant
    //Restaurant -> insert data into restaurant table
    Route::get('/back-restaurant', [restaurantController::class, 'insertRestaurant']);
    Route::post('/insertRestaurant', [restaurantController::class, 'store'])->name('insertRestaurant');
    //Restaurant -> list and delte
    Route::get('/listRestaurant', [restaurantController::class, 'listRestaurant']);
    Route::delete('/deleteRestaurant/{id}', [restaurantController::class, 'deleteRestaurant']);
    //Restaurant -> update
    Route::get('/updateRestaurant/{id}', [restaurantController::class, 'showRestaurant']);
    Route::post('/updateRestaurant', [restaurantController::class, 'editRestaurant'])->name('updateRestaurant');



    //Location
    //Location->insert data into location table
    Route::get('/back-location', [b_LocationController::class, 'insertLocation']);
    Route::post('/insertLocation', [b_LocationController::class, 'store'])->name('insertLocation');
    //Location -> list and delte
    Route::get('/listLocation', [b_LocationController::class, 'listLocation']);
    Route::delete('/deleteLocation/{id}', [b_LocationController::class, 'deleteLocation']);
    //Location -> update
    Route::get('/updateLocation/{id}', [b_LocationController::class, 'showLocation']);
    Route::post('/updateLocation', [b_LocationController::class, 'editLocation'])->name('updateLocation');


    //Thing to do
    //Thing-To-Do -> insert data into ThingToDo table
    Route::get('/back-thing', [thingController::class, 'insertThing']);
    Route::post('/insertThing', [thingController::class, 'store'])->name('insertThing');
    //Thing-To-Do -> list and delete
    Route::get('/listThing', [thingController::class, 'listThing']);
    Route::delete('deleteThing/{id}', [thingController::class, 'deleteThing']);
    //Thing-To-Do -> update
    Route::get('/updateThing/{id}', [thingController::class, 'showThing']);
    Route::post('/updateThing', [thingController::class, 'editThing'])->name('updateThing');

    //list Booking hotel
    Route::get('/listHotelBooking', [hotelController::class, 'listBooking']);
    Route::delete('/deleteHotelBooking/{id}', [hotelController::class, 'deleteBooking']);
    //list Booking Restaurant
    Route::get('/listRestaurantBooking', [restaurantController::class, 'listBooking']);
    Route::delete('/deleteRestaurantBooking/{id}', [restaurantController::class, 'deleteBooking']);

});
// ----------Frontend-------------------
    
//home 
    Route::get('/home', [HomeController::class, 'displayHome']);
//thing to do
    Route::get('/thing', [thingController::class, 'DisplayThing']);
    Route::get('/detailThing/{id}', [thingController::class, 'detailThing']);
//location
    Route::get('/location', [b_LocationController::class, 'DisplayLocation']);
    Route::get('/detailLocation/{id}', [b_LocationController::class, 'detailLocation']);
//hotel
    Route::get('/hotel', [hotelController::class, 'DisplayHotel']);
    Route::get('/detailHotel/{id}', [hotelController::class, 'detailHotel']);
    //booking hotel
    Route::post('/BookingHotel', [hotelController::class, 'HBooking'])->name('BookingHotel');

//restaurant
    Route::get('/restaurant', [restaurantController::class, 'DisplayRestaurant']);
    Route::get('/detailRestaurant/{id}', [restaurantController::class, 'detailRestaurant']);
//booking hotel
    Route::post('/BookingRestaurant', [restaurantController::class, 'RBooking'])->name('BookingRestaurant');

//contact us
    Route::view('contact', 'frontend.contact');
    Route::post('/contact', [contactController::class, 'index'])->name('contact');

    Route::post('/email', [MailController::class, 'send']);



