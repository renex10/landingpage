<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\HomeAbout;
use App\Models\Multipic;
use App\Models\User;

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

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

Route::get('/', function () {
    //$brands = DB::table('brands')->get();
    $brands = Brand::all();
    $abouts =  HomeAbout::first();
    $images = Multipic::all();

    //$abouts= DB::table('home_abouts')->first();
    return view('home',compact('brands','abouts','images'));

})->name('home');

Route::get('/contacto', function() {
    return view('pages.contacto');
})->name('contacto');

Route::get('/servicios', function() {
    return view('servicios');
})->name('servicios');

Route::get('/planes', function() {
    return view('planes');
})->name('planes');

Route::get('/nosotros', function() {
    return view('nosotros');
})->name('nosotros');

/* Route::get('/contacto', function() {
    return view('contacto');
})->name('contacto'); */

/* Route::view('/contacto','contacto')->name('contacto'); */
Route::view('/nosotros','acerca-de-nosotros')->name('nosotros');
Route::view('/servicios','servicios')->name('servicios');

//categoria controller

Route::get('/category/all',[CategoryController::class,'AllCat'])->name('all.category');
Route::post('/category/add',[CategoryController::class,'AddCat'])->name('store.category');
Route::get('/category/edit/{id}',[CategoryController::class,'Edit']);
Route::post('/category/update/{id}',[CategoryController::class,'Update']);
Route::get('/softdelete/category/{id}',[CategoryController::class,'SoftDelete']);
Route::get('/category/restore/{id}',[CategoryController::class,'Restore']);
Route::get('/pdelete/category/{id}',[CategoryController::class,'Restore']);


// For Brand Controller
Route::get('/brand/all',[BrandController::class,'AllBrand'])->name('all.brand');
Route::post('/brand/add',[BrandController::class,'StoreBrand'])->name('store.brand');
Route::get('/brand/edit/{id}',[BrandController::class,'Edit']);
Route::post('/brand/update/{id}',[BrandController::class,'Update']);
Route::get('/brand/delete/{id}',[BrandController::class,'Delete']);



// Multi Image Route
Route::get('/multi/image',[BrandController::class,'Multipic'])->name('multi.image');
Route::post('/multi/add',[BrandController::class,'StoreImg'])->name('store.image');

//Admin All Route 
Route::get('/home/slider',[HomeController::class,'HomeSlider'])->name('home.slider');
Route::get('/add/slider',[HomeController::class,'AddSlider'])->name('add.slider');
Route::post('/store/slider',[HomeController::class,'StoreSlider'])->name('store.slider');
Route::get('/slider/edit/{id}',[HomeController::class,'Edit']);
Route::post('/slider/update/{id}',[HomeController::class,'Update']);
Route::get('/slider/delete/{id}',[HomeController::class,'Delete']);


//Home About All Route
Route::get('/home/about',[AboutController::class,'HomeAbout'])->name('home.about');
Route::get('/add/about',[AboutController::class,'AddAbout'])->name('add.about');
Route::post('/store/about',[AboutController::class,'StoreAbout'])->name('store.about');
Route::get('/about/edit/{id}',[AboutController::class,'EditAbout']);
Route::post('/update/homeabout/{id}',[AboutController::class,'UpdateAbout']);
Route::get('/about/delete/{id}',[AboutController::class,'DeleteAbout']);


//ruta pagina contacto
/* Route::get('/contacto',[AboutController::class,'Contacto'])->name('contacto');  */

//Admin Contact Page Route
Route::get('/admin/contact',[ContactController::class,'AdminContact'])->name('admin.contact');
Route::get('/admin/add/contact',[ContactController::class,'AdminAddContact'])->name('add.contact');
Route::post('/admin/store/contact',[ContactController::class,'AdminStoreContact'])->name('store.contact');
Route::get('/admin/add/message',[ContactController::class,'AdminMessage'])->name('admin.message');


///HOME Contact Page
Route::get('/contact',[ContactController::class,'Contact'])->name('contact');
Route::post('/contact/form',[ContactController::class,'ContactForm'])->name('contact.form');










Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
     /*    $users = User::all(); */

        return view('admin.index');
    })->name('dashboard');
});

Route::get('/user/logout',[BrandController::class,'Logout'])->name('user.logout');
