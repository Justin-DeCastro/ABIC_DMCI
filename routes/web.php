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
use App\Http\Controllers\ValueController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CoreController;
use App\Http\Controllers\AlderController;
use App\Http\Controllers\CelandineController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AddLeaseController;
use App\Http\Controllers\SendPropertyController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\RequestController;
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
Route::get('/cellandine', [HomeController::class, 'cellandine'])->name('cellandine');
Route::get('/viewproperties', [HomeController::class, 'viewproperties'])->name('viewproperties');
Route::get('/loan', [HomeController::class, 'loan'])->name('loan');
// Route::get('/rhapsody', [HomeController::class, 'rhapsody']);
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


Route::get('/admin/about/{id}/edit', [AdminController::class, 'editAbout'])->name('admin.edit_about');

Route::put('/admin/about/update/{id}', [AdminAboutDynamicController::class, 'update'])->name('admin.about.update');

//news
Route::get('/news', [NewsUpdateController::class, 'index'])->name('news.index');
Route::post('/news', [NewsUpdateController::class, 'store'])->name('news.store');
Route::put('/news/{id}', [NewsUpdateController::class, 'update'])->name('news.update');
Route::delete('/news/{news}', [NewsUpdateController::class, 'delete'])->name('news.delete');
// Route::delete('/news/{news_id}', 'NewsController@delete');

Route::get('/', [LandingPageController::class, 'latestUpdates']);
Route::get('/forsale', [HomeController::class, 'seller'])->name('seller');
Route::get('/forlease', [HomeController::class, 'leasing'])->name('leasing');
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
//brandvalues
Route::get('/value', [ValueController::class, 'index'])->name('value.index');
Route::post('/value', [ValueController::class, 'store'])->name('value.store');
Route::delete('value/{value}', [ValueController::class, 'delete'])->name('value.delete');
// Route::put('promo/{id}', [PromoController::class,'update'])->name('promo.update');
Route::post('value/{id}', [ValueController::class, 'update'])->name('value.update');

//mission
Route::get('/showabout', [MissionController::class, 'showabout'])->name('about');
Route::get('/mission', [MissionController::class, 'index'])->name('mission.index');
Route::post('/mission', [MissionController::class, 'store'])->name('mission.store');
Route::put('/mission/{id}', [MissionController::class, 'update'])->name('mission.update');
Route::delete('mission/{mission}', [MissionController::class,'delete'])->name('mission.delete');


//executive
Route::get('/executive', [ExecutiveController::class, 'index'])->name('executive.index');
Route::post('/executive', [ExecutiveController::class, 'store'])->name('executive.store');
Route::put('/executive/{id}', [ExecutiveController::class, 'update'])->name('executive.update');
Route::delete('executive/{executive}', [ExecutiveController::class,'delete'])->name('executive.delete');

//brand
Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
Route::post('/brand', [BrandController::class, 'store'])->name('brand.store');
//certification and awards
Route::get('/certification', [CertificationController::class, 'index'])->name('certification.index');
Route::post('/certification', [CertificationController::class, 'store'])->name('certification.store');
Route::put('/certification/{id}', [CertificationController::class, 'update'])->name('certification.update');
Route::delete('certification/{certification}', [CertificationController::class,'delete'])->name('certification.delete');


//filter
Route::get('/filter-locations', [CityController::class, 'filterLocations'])->name('filter-locations');
Route::match(['get', 'post'], '/search', [SearchController::class, 'search'])->name('search');

//core
Route::get('/core', [CoreController::class, 'index'])->name('core.index');
Route::post('/core', [CoreController::class, 'store'])->name('core.store');

Route::put('/core/{id}', [CoreController::class, 'update'])->name('core.update');

Route::delete('core/{core}', [CoreController::class,'delete'])->name('core.delete');
Route::delete('/core/{core}', [CoreController::class,'delete'])->name('core.delete');
//feedback
Route::put('/submit-feedback', 'FeedbackController@store')->name('feedback.store');


//alder
Route::get('/alder', [AlderController::class, 'index'])->name('alder.index');
Route::post('/alder', [AlderController::class, 'store'])->name('alder.store');

// Route::put('/alder/{id}', [AlderController::class, 'update'])->name('alder.update');
// Route::put('/alder/update', [AlderController::class, 'update'])->name('alder.update');
Route::put('/alder/{id}', [AlderController::class, 'update'])->name('alder.update');

Route::delete('alder/{alder}', [AlderController::class,'delete'])->name('alder.delete');

//celandine
Route::get('/celandine', [CelandineController::class, 'index'])->name('celandine.index');
Route::post('/celandine', [CelandineController::class, 'store'])->name('celandine.store');

Route::put('/celandine/{id}', [CelandineController::class, 'update'])->name('celandine.update');

Route::delete('celandine/{celandine}', [CelandineController::class,'delete'])->name('celandine.delete');



Route::get('/contact', [ContactUsController::class, 'create'])->name('contact.create');

// Route to handle the form submission
Route::post('/contact', [ContactUsController::class, 'send'])->name('contact.send');



//for lease

Route::get('/viewsale/{id}', [AlderController::class, 'viewsale'])->name('viewsale');


Route::get('/viewsale{id}', [HomeController::class, 'viewsale'])->name('viewsale');

Route::get('/addleases', [AddLeaseController::class, 'index'])->name('addleases.index');
Route::post('/addleases/store', [AddLeaseController::class, 'store'])->name('addleases.store');
Route::get('/viewleasing{id}', [HomeController::class, 'viewleasing'])->name('viewleasing');
Route::put('/addleases/{id}', [AddLeaseController::class, 'update'])->name('addleases.update');

Route::delete('addleases/{addleases}', [AddLeaseController::class,'delete'])->name('addleases.destroy');

//send your properties
// Route::get('/sendproperties', [SendPropertyController::class, 'index'])->name('index');

Route::get('/sendproperties', [SendPropertyController::class, 'index'])->name('sendproperties.index');
Route::post('/sendproperties', [SendPropertyController::class, 'store'])->name('sendproperties.store');
Route::get('/sendpropertys', [SendPropertyController::class, 'send'])->name('send');
Route::post('/properties/{property}/accept', [SendPropertyController::class, 'accept'])->name('accept.property');
Route::post('/properties/{property}/decline', [SendPropertyController::class, 'decline'])->name('decline.property');
Route::put('/properties/{property}', [SendPropertyController::class, 'update'])->name('sendproperties.update');


//chatbot
Route::get('/chat-widget', function () {
    return view('chat_widget');
});
// routes/web.php
Route::get('/chatbot', function () {
    return view('layouts.app');
});

// Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');
// Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle'])->name('botman');
// Route::get('/botman', [BotManController::class, 'handle'])->name('botman');

Route::post('/botman', [BotManController::class, 'handle']);

//request
Route::post('/submit-request', [RequestController::class, 'submit']);
Route::get('/request', [RequestController::class, 'index'])->name('request.index');
Route::post('/requests/{id}/approve', [RequestController::class, 'accept'])->name('requests.accept');
Route::post('/requests/{id}/decline', [RequestController::class, 'decline'])->name('requests.decline');
