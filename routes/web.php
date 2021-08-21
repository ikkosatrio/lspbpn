<?php
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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

Route::get('/migrate', function() {

    Artisan::call('migrate');
    return "Migration success!";

});

Route::get('/migratefull', function() {

    Artisan::call('migrate:fresh --seed');
    return "Migration FULL success!";

});


//ARTISAN CALL
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cleared!";
});


//ADMIN
Route::get('/admin/login', 'Auth\LoginController@showLoginForm');
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', 'Admin\DashboardController@index')->name('admin.index');
    Route::get('/admin/not-found', 'Admin\DashboardController@notFound')->name('admin-not-found');
    Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::resource('admin/config', 'Admin\ConfigController',['as' => 'admin']);
    Route::resource('admin/profile', 'Admin\ProfileController',['as' => 'admin']);
    Route::resource('admin/slide', 'Admin\SlideController',['as' => 'admin']);
    Route::resource('admin/user', 'Admin\UserController',['as' => 'admin']);
    Route::resource('admin/group', 'Admin\GroupController',['as' => 'admin']);
    Route::resource('admin/testimoni', 'Admin\TestimoniController',['as' => 'admin']);
    Route::resource('admin/faq', 'Admin\FaqController',['as' => 'admin']);
    Route::resource('admin/event', 'Admin\EventController',['as' => 'admin']);
    Route::resource('admin/news', 'Admin\NewsController',['as' => 'admin']);
    Route::resource('admin/news-category', 'Admin\NewsCategoryController',['as' => 'admin']);

    Route::resource('admin/asesor', 'Admin\AsesorController',['as' => 'admin']);
    Route::resource('admin/certificate-holder', 'Admin\CertificateHolderController',['as' => 'admin']);
    Route::resource('admin/kompetensi', 'Admin\KompetensiController',['as' => 'admin']);
    Route::resource('admin/kompetensi.detail', 'Admin\KompetensiDetailController',['as' => 'admin']);

    Route::resource('admin/gallery', 'Admin\GalleryController',['as' => 'admin']);
    Route::resource('admin/gallery-category', 'Admin\GalleryCategoryController',['as' => 'admin']);
    Route::resource('admin/appointment', 'Admin\AppointmentController',['as' => 'admin']);
    Route::resource('admin/client', 'Admin\ClientController',['as' => 'admin']);
    Route::resource('admin/home', 'Admin\HomeController',['as' => 'admin']);

    Route::resource('admin/visi-misi', 'Admin\VisiMisiController',['as' => 'admin']);
    Route::resource('admin/struktur', 'Admin\StrukturController',['as' => 'admin']);
    Route::resource('admin/tempat', 'Admin\TempatController',['as' => 'admin']);
    Route::resource('admin/logo', 'Admin\LogoController',['as' => 'admin']);
    Route::resource('admin/contoh-sertifikat', 'Admin\ContohSertifikatController',['as' => 'admin']);
    Route::resource('admin/regulasi', 'Admin\RegulasiController',['as' => 'admin']);
    Route::resource('admin/contact-message', 'Admin\ContactMessageController',['as' => 'admin']);
});

Route::get('/', 'User\HomeController@index')->name('index');
Route::get('/news', 'User\PagesController@news')->name('news');
Route::get('/news/{slug}', 'User\PagesController@newsdetail')->name('news_detail');
Route::get('/abous-us', 'User\NewsController@detail')->name('about-us');

Route::get('/skema/{slug}', 'User\PagesController@skemadetail')->name('skema_detail');
Route::get('/skema', 'User\PagesController@skema')->name('skema');
Route::get('/gallery/{slug}', 'User\PagesController@gallerydetail')->name('gallery_photos');
Route::get('/gallery', 'User\PagesController@gallery')->name('gallery');
Route::get('/contact-us', 'User\PagesController@contact')->name('contact-us');
Route::get('/contact-us/store', 'User\PagesController@contactstore')->name('contact_us.store');
Route::get('/testimoni', 'User\PagesController@testimoni')->name('testimoni');
Route::get('/event', 'User\PagesController@event')->name('event');
Route::get('/event/{id}', 'User\PagesController@eventDetail')->name('event.detail');
Route::get('/pemegang', 'User\PagesController@pemegang')->name('pemegang');
Route::get('/asesor', 'User\PagesController@asesor')->name('asesor');
Route::get('/visi-misi', 'User\PagesController@visimisi')->name('visimisi');
Route::get('/struktur', 'User\PagesController@struktur')->name('struktur');
Route::get('/tempat', 'User\PagesController@tempat')->name('tempat');
Route::get('/logo', 'User\PagesController@logo')->name('logo');
Route::get('/contoh-sertifikat', 'User\PagesController@contohsertifikat')->name('contohsertifikat');
Route::get('/regulasi', 'User\PagesController@regulasi')->name('regulasi');


Route::post('main/sendconsult', 'User\HomeController@sendconsult')->name('user.sendconsult');




//OTHER
Auth::routes();
