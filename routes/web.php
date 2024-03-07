<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAboutDynamicController;
use App\Http\Controllers\NewsUpdateController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\RecoController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\ExecutiveController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\HighController;
use App\Http\Controllers\MidController;
use App\Http\Controllers\SubdivisionController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LeisureController;
use App\Http\Controllers\KaakbayController;
use App\Http\Controllers\ContactFormController;
/*
/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/admin/news', 'AdminNewsController@index')->name('admin.news.index');


// Route::get('/', function () {
//     return view('landing-page');
// });


Route::post('/contact/send-email', [ContactFormController::class, 'sendEmail'])->name('contact.sendEmail');

Route::post('/logout', 'App\Http\Controllers\Auth\SigninController@logout')->name('logout');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('landing-page', [LandingPageController::class, 'latestUpdates'])->name('landing-page');

Route::get('/latest-updates', [LandingPageController::class, 'latestUpdates']);
// Route::get('userpage', 'App\Http\Controllers\LandingPageController@index')->name('landing-page');
Route::get('/whatsNew', [HomeController::class, 'index'])->name('whatsNew');

Route::get('/seller', [HomeController::class, 'sellers'])->name('sellers');
Route::get('/prop', [HomeController::class, 'prop'])->name('prop');
Route::get('/guides', [HomeController::class, 'guides'])->name('guides');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/update', [HomeController::class, 'update'])->name('images.update');
Route::get('/mulberry', [HomeController::class, 'mulberry'])->name('mulberry');
Route::get('/atherton', [HomeController::class, 'atherton'])->name('atherton');
Route::get('/prismas', [HomeController::class, 'prismas'])->name('prismas');
Route::get('/allegra', [HomeController::class, 'allegra'])->name('allegra');
Route::get('/sonora', [HomeController::class, 'sonora'])->name('sonora');
Route::get('/fortis', [HomeController::class, 'fortis'])->name('fortis');
Route::get('/finder', [HomeController::class, 'finder'])->name('finder');
Route::get('/development', [HomeController::class, 'development'])->name('development');
Route::get('/beating', [HomeController::class, 'beating'])->name('beating');
Route::get('/top', [HomeController::class, 'top'])->name('top');
Route::get('/mobile', [HomeController::class, 'mobile'])->name('mobile');
Route::get('/aston', [HomeController::class, 'aston'])->name('aston');
Route::get('/kai', [HomeController::class, 'kai'])->name('kai');
Route::get('/crest', [HomeController::class, 'crest'])->name('crest');

//faq
Route::get('/faq', [HomeController::class, 'faq'])->name('faq.1');
Route::get('/faq2', [HomeController::class, 'faq2'])->name('faq.2');
//admin
Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
Route::get('/home', [AdminController::class, 'index'])->name('home')->middleware('admin');
// Route::get('/', 'NewsController@index');


//logo


Route::get('/logos', [LogoController::class, 'index'])->name('logos.index');
Route::get('/logos/create', [LogoController::class, 'create'])->name('logos.create');
Route::post('/logos', [LogoController::class, 'store'])->name('logos.store');
Route::get('/logos/{id}/edit', [LogoController::class, 'edit'])->name('logos.edit');
Route::put('/logos/{id}', [LogoController::class, 'update'])->name('logos.update');
Route::delete('/logos/{id}', [LogoController::class, 'destroy'])->name('logos.destroy');

Route::get('/logo', [HomeController::class, 'add'])->name('logo.add');


Route::get('/flush-session', 'Auth\SigninController@flushSession')->name('flush.session');






//vision
Route::get('/visions', [VisionController::class, 'index'])->name('visions.index');
Route::get('/visions/create', [VisionController::class, 'create'])->name('visions.create');
Route::post('/visions', [VisionController::class, 'store'])->name('visions.store');
Route::get('/visions/{vision}/edit', [VisionController::class, 'edit'])->name('visions.edit');
Route::put('/visions/{vision}', [VisionController::class, 'update'])->name('visions.update');
Route::delete('/visions/{vision}', [VisionController::class, 'destroy'])->name('visions.destroy');



Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('registration');
Route::post('/register', [RegistrationController::class, 'register'])->name('registration.post');

// Route::get('/signin', [SigninController::class, 'showSigninForm'])->name('signin');
// Route::post('/signin', [SigninController::class, 'signin']);
Route::get('/signin', [SigninController::class, 'showSigninForm'])->name('signin');
Route::post('/signin', [SigninController::class, 'signin'])->name('signin.post');
Route::group(['middleware' => ['auth', AdminMiddleware::class]], function () {
    // Define routes that require admin privileges here
});
//SELLERS ROUTE
// Route::resource('sellers', 'App\Http\Controllers\SellerController');
// Route::get('/sellers', [SellerController::class, 'index'])->name('sellers.index');
// Route::get('/sellers/create', [SellerController::class, 'create'])->name('sellers.create');
// Route::post('/sellers', [SellerController::class, 'store'])->name('sellers.store');
// Route::get('/sellers/{seller}/edit', [SellerController::class, 'edit'])->name('sellers.edit');
// Route::put('/sellers/{seller}', [SellerController::class, 'update'])->name('sellers.update');
// Route::delete('/sellers/{seller}', [SellerController::class, 'destroy'])->name('sellers.destroy');




// routes/web.php
// Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about.index');
// Route::put('/admin/about/{id}', [AboutController::class, 'update'])->name('admin.about.update');
// // routes/web.php

Route::get('/admin/about/{id}/edit', [AdminController::class, 'editAbout'])->name('admin.edit_about');
// Route::put('/admin/about/{id}/update', [AdminController::class, 'updateAbout'])->name('admin.about.update');
// Route::get('/admin/about', [AdminAboutDynamicController::class, 'index'])->name('admin.about.index');
Route::put('/admin/about/update/{id}', [AdminAboutDynamicController::class, 'update'])->name('admin.about.update');

//news
Route::get('/news', [NewsUpdateController::class, 'index'])->name('news.index');
Route::post('/news', [NewsUpdateController::class, 'store'])->name('news.store');
Route::put('/news/{id}', [NewsUpdateController::class, 'update'])->name('news.update');
Route::delete('/news/{news}', [NewsUpdateController::class, 'delete'])->name('news.delete');
// Route::delete('/news/{news_id}', 'NewsController@delete');

Route::get('/', [LandingPageController::class, 'latestUpdates']);
Route::get('/seller', [HomeController::class, 'seller'])->name('seller');

Route::get('/reco', [RecoController::class, 'index'])->name('reco.index');
Route::post('/reco', [RecoController::class, 'store'])->name('reco.store');
Route::put('/reco/{id}', [RecoController::class, 'update'])->name('reco.update');
Route::delete('reco/{reco}', [RecoController::class,'delete'])->name('reco.delete');
// Route::put('/high/{id}', [HighController::class, 'update'])->name('high.update');
//condo
Route::get('/high', [HighController::class, 'index'])->name('high.index');
Route::post('/high', [HighController::class, 'store'])->name('high.store');
Route::delete('high/{high}', [HighController::class,'delete'])->name('high.delete');
Route::put('/high/{id}', [HighController::class, 'update'])->name('high.update');
// Route::put('/high/{id}', [RecoController::class, 'update'])->name('high.update');
//condo mid
Route::get('/mid', [MidController::class, 'index'])->name('mid.index');
Route::post('/mid', [MidController::class, 'store'])->name('mid.store');
Route::put('/mid/{id}', [MidController::class, 'update'])->name('mid.update');
Route::delete('mid/{mid}', [MidController::class,'delete'])->name('mid.delete');
//city
Route::get('/city', [CityController::class, 'index'])->name('city.index');
Route::post('/city', [CityController::class, 'store'])->name('city.store');
Route::put('/city/{id}', [CityController::class, 'update'])->name('city.update');
Route::delete('city/{city}', [CityController::class,'delete'])->name('city.delete');
//leisure
Route::get('/leisure', [LeisureController::class, 'index'])->name('leisure.index');
Route::post('/leisure', [LeisureController::class, 'store'])->name('leisure.store');
Route::put('/leisure/{id}', [LeisureController::class, 'update'])->name('leisure.update');
Route::delete('leisure/{leisure}', [LeisureController::class,'delete'])->name('leisure.delete');


//subdivision
Route::get('/subdivision', [SubdivisionController::class, 'index'])->name('subdivision.index');
Route::post('/subdivision', [SubdivisionController::class, 'store'])->name('subdivision.store');
Route::put('/subdivision/{id}', [SubdivisionController::class, 'update'])->name('subdivision.update');
// Route::put('/subdivision/{id}', [KaakbayController::class, 'update'])->name('kaakbay.update');
Route::delete('subdivision/{subdivision}', [SubdivisionController::class,'delete'])->name('subdivision.delete');


//card
Route::get('/cards', [CardController::class, 'index'])->name('card.index');
Route::post('/cards', [CardController::class, 'store'])->name('card.store');
Route::put('/card/{id}', [CardController::class, 'update'])->name('card.update');
Route::delete('card/{card}', [CardController::class,'delete'])->name('card.delete');

// Route::delete('/cards/{card}', 'CardController@delete')->name('card.delete');


// Route::post('/reco/{id}', [CardController::class, 'update'])->name('reco.update');

//testimonials
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonial.index');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonial.store');
Route::put('/testimonial/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
Route::delete('testimonial/{testimonial}', [TestimonialController::class,'delete'])->name('testimonial.delete');
//kaakbay
Route::get('/kaakbay', [KaakbayController::class, 'index'])->name('kaakbay.index');
Route::post('/kaakbay', [KaakbayController::class, 'store'])->name('kaakbay.store');
Route::put('/kaakbay/{id}', [KaakbayController::class, 'update'])->name('kaakbay.update');
Route::delete('kaakbay/{kaakbay}', [KaakbayController::class,'delete'])->name('kaakbay.delete');


//events
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::post('/event/{id}', [EventController::class, 'update'])->name('event.update');
Route::delete('event/{event}', [EventController::class,'delete'])->name('event.delete');
//promo
Route::get('/promo', [PromoController::class, 'index'])->name('promo.index');
Route::post('/promo', [PromoController::class, 'store'])->name('promo.store');
Route::delete('promo/{promo}', [PromoController::class, 'delete'])->name('promo.delete');
// Route::put('promo/{id}', [PromoController::class,'update'])->name('promo.update');
Route::post('promo/{id}', [PromoController::class, 'update'])->name('promo.update');


//mission
Route::get('/showabout', [MissionController::class, 'showabout'])->name('about');
Route::get('/mission', [MissionController::class, 'index'])->name('mission.index');
Route::post('/mission', [MissionController::class, 'store'])->name('mission.store');
Route::put('/mission/{id}', [MissionController::class, 'update'])->name('mission.update');
Route::delete('mission/{mission}', [MissionController::class,'delete'])->name('mission.delete');


//executive
Route::get('/executive', [ExecutiveController::class, 'index'])->name('executive.index');
Route::post('/executive', [ExecutiveController::class, 'store'])->name('executive.store');

//brand
Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
Route::post('/brand', [BrandController::class, 'store'])->name('brand.store');
//certification and awards
Route::get('/certification', [CertificationController::class, 'index'])->name('certification.index');
Route::post('/certification', [CertificationController::class, 'store'])->name('certification.store');
Route::put('/certification/{id}', [CertificationController::class, 'update'])->name('certification.update');
Route::delete('certification/{certification}', [CertificationController::class,'delete'])->name('certification.delete');
