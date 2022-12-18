<?php

use Illuminate\Support\Facades\Route;


Route::get('/migrate', function() {
    Artisan::call('migrate');

    return 'migrateD';
});

Route::get('/', 'HomeController@home')->name('home');
Route::get('/newadmin', function () {
    return view('newadmin.home.index');
})->name('newadmin')->middleware(['auth:admin']);

Route::get('/about', function () {
    return view('about.index');
})->name('about');
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
Route::get('/servis', function () {
    return view('servis.index');
})->name('servis');



Route::prefix('kategory')->group(function () {
    Route::get('{url}', 'HomeController@wow')->name('wow-kategory');
});
Route::get('product-detail-{slug}/{url}', 'HomeController@card')->name('card');
Route::POST('fast-view', 'HomeController@fastView')->name('fastView');


Route::resource('comment', 'CommentController')->middleware(['auth:web']);
Route::POST('comments', 'CommentController@comments')->name('comments');


Route::POST('favoriDestr', 'FavoriController@favoriDestr')->middleware(['auth:web'])->name('favoriDestr');


Route::POST('storeGet', 'StoreProductController@storeGet')->name('storeGet');
Route::POST('storePOST', 'StoreProductController@storePOST')->name('storePOST');



Route::resource('favori', 'FavoriController')->middleware(['auth:web']);
Route::POST('favoriDestr', 'FavoriController@favoriDestr')->middleware(['auth:web'])->name('favoriDestr');
Route::POST('add-shop', 'FavoriController@addcooke')->name('addshop');
Route::GET('card-shop', 'FavoriController@cardcooke')->name('cardShop');

Route::POST('cardshop-update-to-cart', 'FavoriController@updatetocart')->name('update-to-cart');
Route::POST('cardshop-delete', 'FavoriController@Addcartdelete')->name('to-cart-delete');
Route::POST('dayjest', 'FavoriController@dayjest')->name('dayjest');
/*

Route::post('/','MenuController@index' )->name('h');*/
Route::post('darkMode', 'ControlSidebarController@darkMode')->name('changeDarkMode');


Route::post('dark', 'HomeController@dark')->name('dark');


Route::post('fix', 'ControlSidebarController@fix')->name('changeFix');
Route::post('nav-flat', 'ControlSidebarController@navflat')->name('navflat');
Route::post('nav-compact', 'ControlSidebarController@navcompact')->name('navcompact');
Route::post('layout-footer-fixed', 'ControlSidebarController@layoutfooterfixed')->name('layoutfooterfixed');
Route::post('text-sm', 'ControlSidebarController@textsm')->name('textsm');
Route::post('sidebar-light-primary', 'ControlSidebarController@sidebarlightprimary')->name('sidebarlightprimary');
Route::post('vil_delete', 'CityController@vil_delete')->name('vil_delete');



Route::get('login', 'AuthController@login')->name('login');
Route::POST('login', 'AuthController@loginPost');


Route::post('call', 'HomeController@call')->name('call');


Route::post('register', 'AuthController@registerPost')->name('register');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('admin/logout', 'AuthadminController@logout')->name('admin.logout');



Route::resource('profile', 'ProfileController')->middleware(['auth:web']);
////admin
///
///
///
///
Route::get('admins/login', 'AuthadminController@login')->name('admins.login');
Route::POST('admins/login', 'AuthadminController@loginPost');
Route::get('admins/register', 'AuthadminController@register')->name('admins.register');
Route::post('admins/register', 'AuthadminController@registerPost');

Route::prefix('admins')->middleware(['auth:admin'])->group(function () {
    Route::get('/', function () {
        return view('newadmin.home.index');
    })->name("admins");

    Route::resource('/user', 'admin\UsersController');
    Route::resource('/city', 'CityController');
    Route::resource('/shahar', 'ShaharController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/products', 'admin\AdminProductController');
    Route::resource('/productsimg', 'admin\AdminProductImgController');
    Route::resource('/variant', 'admin\VariantController');
    Route::resource('/color', 'admin\ColorController');
    Route::resource('/colorvalue', 'admin\ColorValueController');
    Route::resource('/xususiyat', 'admin\XususiyatController');
    Route::resource('/xususiyatvalue', 'admin\XususiyatValueController');
    Route::resource('/productxususiyatvalue', 'admin\ProductXususiyatValueController');
    Route::resource('/productvarianttvalue', 'admin\ProductVariantValueController');
    Route::resource('/brand', 'admin\BrandController');


    /*ProductVariantValueController start*/
    Route::POST('/variant-delete', 'admin\ProductVariantValueController@variantdelete')->name('variantdelete');
    /*ProductVariantValueController end*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///
    /*XususiyatValueController start*/
    Route::POST('/xusuiyat-value-delete', 'admin\XususiyatValueController@xusuiyatValueDelete')->name('xusuiyatValueTrash');
    /*XususiyatValueController end*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

     /*XususiyatController start*/
    Route::POST('/xusuiyat-delete', 'admin\XususiyatController@xusuiyatDelete')->name('xusuiyatDelete');
    /*XususiyatController end*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///
    /*ProductXususiyatValueController start*/
    Route::POST('/product-xusuiyat-delete', 'admin\ProductXususiyatValueController@productXusuiyatDelete')->name('productXusuiyatDelete');
    Route::POST('/product-xususiyat-value-add', 'admin\ProductXususiyatValueController@productxususiyatvalueAdd')->name('productxususiyatvalueAdd');
    /*ProductXususiyatValueController end */

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /*AdminProductImg start*/
    Route::POST('/produc-drop{id?}', 'admin\AdminProductImgController@dropzone')->name('addImgDrop');
    Route::POST('/produc{id?}', 'admin\AdminProductImgController@sortable')->name('sortable');
    Route::POST('/produc-img/delete', 'admin\AdminProductImgController@deleteImg')->name('producDelete');
    /*AdminProductImg end*/


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

   /* ColorValueController start*/
    Route::POST('/add-variant-dropzon', 'admin\ColorValueController@AddVariantDropzon')->name('AddVariantDropzon');
    Route::GET('/product/getcolor-variant-cerate-product{id}', 'admin\ColorValueController@getColorvariantCerateProduct')->name('getColorvariantCerateProduct');
    Route::post('/product/post-colorvariant-cerate-product', 'admin\ColorValueController@PostColorvariantCerateProduct')->name('PostColorvariantCerateProduct');
    Route::post('/product/color-change-xususiyat-product', 'admin\ColorValueController@ColorchangexususiyatProduct')->name('ColorchangexususiyatProduct');
    Route::post('/product/color-delete', 'admin\ColorValueController@colorValueDelete')->name('colorValueDelete');
    Route::post('/product/get-color-value-update', 'admin\ColorValueController@getColorValueUpdate')->name('get_color_value_update');
    Route::post('/product/post-color-value-update', 'admin\ColorValueController@postColorValueUpdate')->name('post_color_value_update');
    Route::post('/product/color-value-status', 'admin\ColorValueController@status')->name('color_value_status');
    /* ColorValueController end*/


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///
    /*AdminProductController start*/
    Route::post('/product/variant-cerate-product', 'admin\AdminProductController@variantCerateProduct')->name('variantCerateProduct');
    Route::post('/product/change-xususiyat-product', 'admin\AdminProductController@changexususiyatProduct')->name('changexususiyatProduct');
    Route::post('/product/check-status', 'admin\AdminProductController@checkStatus')->name('ProCheckStatus');
    Route::post('/product/product-delete', 'admin\AdminProductController@deleteAll')->name('pro_delete');
    Route::post('/product/product-delete-tek', 'admin\AdminProductController@delete')->name('pro_delete_tek');
    /*AdminProductController end*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /*CategoryController start*/
    Route::post('/kategory/checkStatus', 'CategoryController@checkStatus')->name('KategotyCheckStatus');
    Route::post('/kategory/kategory-delete', 'CategoryController@cat_delete')->name('cat_delete');
    Route::post('/kategory/kategory-delete-tek', 'CategoryController@cat_delete_tek')->name('cat_delete_tek');
    /*CategoryController start*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

   /* AuthadminController start*/
    Route::get('/admin/profile', 'AuthadminController@adminProfileIndex')->name('admin_profile');
    Route::POST('/admin/profile-update-password{id}', 'AuthadminController@adminProfileIndexUpdatePassword')->name('admin_profile_update_password');
    Route::POST('/admin/profile-update{id}', 'AuthadminController@adminProfileIndexUpdate')->name('admin_profile_update');
    /* AuthadminController end*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
});
