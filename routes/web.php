<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\generalController;
use App\Http\Controllers\about;
use App\Http\Controllers\menuController;
use App\Http\Controllers\editeventt;
use App\Http\Controllers\editprodukk;
use App\Http\Controllers\editeventtt;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\customerFeedbackController;
use App\Http\Controllers\feedbackadmin;
use App\Http\Controllers\halamandepanController;
use App\Http\Controllers\reservationadmin;
use App\Http\Controllers\quantityController;
use App\Http\Controllers\datacustomerController;
use App\Http\Controllers\verifikasiakun;
use App\Http\Controllers\orderadmin;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\DetailpemesananController;

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


Route::get('/', [halamandepanController::class, 'index']);
Route::get('/menu',  [menuController::class,'menu']) ;
Route::post('/menu',  [menuController::class,'index']) ; 
Route::get('/services', function () {
    return view('services');
});

Route::get('/blog', [generalController::class,'blog']);

Route::get('/about',  [about::class,'about']);

Route::get('/login', function () {
    return view('login');
}); 

    Auth::routes();

/*Log Out*/
Route::get('/logout', [AkunController::class, 'logout']);

/*Accses Admin */
Route::group(['middleware' => ['auth', 'admin']], function () {
/*event*/
Route::get('/editevent',[editeventt::class,'editeventt']);
Route::get('/editevent/tambah', [editeventt::class, 'tambah']);
Route::post('editevent/store', [editeventt::class, 'store'])->name('daftarevent.store');
Route::get('/eventform/edit/{event_id}', [editeventt::class, 'tampil']);
Route::post('eventform/update/{event_id}', [editeventt::class, 'update'])->name('event.update');
Route::get('eventform/delete/{event_id}', [editeventt::class, 'delete'])->name('event.delete');
Route::get('/tambahEvent', [editeventt::class, 'tambahevent']);
Route::post('tambahEvent/store', [editeventt::class, 'store'])->name('tambah.store');

/*Order*/
Route::get('/daftarorder', [orderadmin::class, 'index']);
Route::post('/daftarorder/update/{order_id}', [orderadmin::class, 'update'])->name('daftarorder.update');

/*Detail*/
Route::get('/detailpemesanan/{orders_id}', [DetailpemesananController::class, 'index']);

/*GENERAL */
Route::get('/editgeneral', [generalController::class,'general']);
Route::get('/editgeneral/tambah', [generalController::class, 'tambah']);
Route::post('editgeneral/store', [generalController::class, 'store'])->name('daftarinfo.store');
Route::get('/generalform/edit/{info_id}', [generalController::class, 'tampil']);
Route::post('generalform/update/{info_id}', [generalController::class, 'update'])->name('info.update');
Route::get('generalform/delete/{info_id}', [generalController::class, 'delete'])->name('info.delete');
Route::get('/tambahgeneral', [generalController::class, 'tambahgeneral']);
Route::post('tambahgeneral/store', [generalController::class, 'store'])->name('tambahinfo.store');

/*Feedback*/
Route::get('/editfeedback',[feedbackController::class, 'feedback']);
Route::get('/daftarfeedback',[feedbackadmin::class,'feedbackadmin']);
Route::get('daftarfeedback/reply/{feedback_id}', [feedbackadmin::class, 'reply']);
Route::post('daftarfeedback/update/{feedback_id}', [feedbackadmin::class, 'update'])->name('feedback.update');
Route::get('daftarfeedback/delete/{feedback_id}', [feedbackadmin::class, 'delete'])->name('editfeedback.delete');


/*PRODUK */
Route::get('/editproduk',[editprodukk::class,'editprodukk']);

Route::get('/tambahproduk/tambah', [menuController::class, 'tambah']);
Route::post('editmenu/store', [menuController::class, 'store'])->name('editproduk.store');
Route::get('/editmenu/edit/{id_produk}', [menuController::class, 'edit']);
Route::post('editmenu/update/{id_produk}', [menuController::class, 'update'])->name('editproduk.update');
Route::get('editproduk/delete/{id_produk}', [menuController::class, 'delete'])->name('editproduk.delete');
Route::get('/editmenu', function () {
    return view('ADMIN/editmenu');
});
Route::get('/tambahproduk', function () {
    return view('ADMIN/tambahproduk');
});
/*reservation*/
Route::get('/editreservation',[reservationadmin::class,'reservationadmin']);
Route::post('reservationn/store', [reservationadmin::class, 'tian'])->name('tambah.reservation');
Route::get('editreservation/delete/{reservationorder_id}', [reservationadmin::class, 'delete'])->name('editreservation.delete');

/*data customer */
Route::get('/datacustomer', [datacustomerController::class, 'index']);
Route::get('/detailcustomer/{user_id}', [datacustomerController::class, 'detail']);

/*Verifikasi Akun */
Route::get('/verifikasiakun', [verifikasiakun::class, 'index']);
Route::post('verifikasiakun/{user_id}', [verifikasiakun::class, 'update'])->name('verifikasiakun.update');
Route::get('verifikasiakun/delete/{user_id}', [verifikasiakun::class, 'delete'])->name('verifikasiakun.delete');


});

Route::group(['middleware' => ['auth','verifikasi']], function () {
    Route::post('feedback/store', [customerFeedbackController::class, 'store'])->name('feedback.store');

    Route::get('/reservationn', function () {
        return view('reservationn');
    });
    Route::post('reservation/store', [reservationadmin::class, 'tian'])->name('reservation.store');

    /* Quantity */
    Route::get('/quantity/{id_produk}',  [quantityController::class,'index']) ;
    Route::post('/quantity/store',  [quantityController::class,'store']) ->name('quantity.store');

    /*Feedback*/
    Route::get('/feedback', [halamandepanController::class, 'feedbackpage']);

    /* shop => pembelian terhadap produk */
    Route::get('/shop/{user_id}', [ShopController::class, 'index']);
    Route::post('/shop/store', [ShopController::class, 'store'])->name('shop.store');
    Route::get('/shop/delete/{id_checkout}', [ShopController::class, 'delete']);

});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


?>