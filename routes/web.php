<?php
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
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
Route::get('/contact', function () {
    return view('emailform');
});
Route::post('/contact', function(Request $request){
    Mail::send(new SendMail($request));
    return redirect('/contact');
});

Route::get('/', 'IndexController@index');
Route::get('/about-us', 'IndexController@landingAbout');
Route::get('/gallery', 'IndexController@landingGaleri');
Route::get('/gallery/{id}', 'IndexController@landingDetailGaleri');
Route::get('/contact', 'IndexController@landingContact');
Route::get('/guru-page', 'IndexController@landingGuru');
Route::get('/berita-page', 'IndexController@landingBerita');
Route::get('/berita-page/{id}', 'IndexController@landingDetailBerita');
Route::get('/pengumuman-page', 'IndexController@landingPengumuman');
Route::get('/pengumuman-page/{id}', 'IndexController@landingDetailPengumuman');
Route::get('/agenda-page', 'IndexController@landingAgenda');
Route::get('/agenda-page/{id}', 'IndexController@landingDetailAgenda');
Route::get('/siswa-page', 'IndexController@landingSiswa');
Route::get('/siswa-page/{id}', 'IndexController@landingDetailSiswa');
Route::get('/download-page', 'IndexController@landingDownload');
// Route::get('/download-file/{id}', 'IndexController@downloadFile');

Route::post('/send','IndexController@send');


Auth::routes(['register' => false]);
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/about', 'AboutController');
    Route::resource('/galeri', 'GalleryController');
    Route::resource('/slider', 'SliderController');
    Route::resource('/service', 'ServiceController');
    Route::resource('/partner', 'PartnerController');
    Route::resource('/kontak', 'ContactController');
    Route::resource('/berita', 'BeritaController');
    Route::resource('/guru', 'GuruController');
    Route::resource('/pengumuman', 'PengumumanController');
    Route::resource('/agenda', 'AgendaController');
    Route::resource('/download', 'DownloadController');
    Route::resource('/siswa', 'SiswaController');
});