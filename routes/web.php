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

  Route::get('/', 'AdminController@welcome'); 


//ADMIN
Route::group(['middleware'=>['auth']],function(){
	Route::get('home','AdminController@home');
Route::match(['get','post'],'admin_add_products_view','AddproductController@add_product');
//Route::post('add_products_db','AddproductController@add_product_db');



//CATEGORY
Route::get('admin_add_category_view','AddcategoryController@add_category');
Route::get('admin_view_category_view','AddcategoryController@view_category');
Route::post('add_category_db','AddcategoryController@add_category_db');
Route::get('edit_category/{id}','AddcategoryController@edit_category');
Route::get('delete_category/{id}','AddcategoryController@delete_category');



//PRODUCT
Route::get('admin_view_product_view','AddproductController@view_product');
Route::get('admin_view_more_product_view/{id}','AddproductController@view_more_product');
Route::get('ad_edit_product/{id}','AddproductController@edit_product');
Route::get('admin_delete_product/{id}','AddproductController@delete_product');
Route::POST('admin_update_products','AddproductController@update_product');






//BANNER
Route::get('admin_add_banner_view','BannerController@add_banner_view');
Route::POST('banner_db','BannerController@banner_db');
Route::get('admin_view_banner','BannerController@view_banner');
Route::get('admin_edit_banner/{id}','BannerController@edit_banner');
Route::POST('banner_update','BannerController@banner_update');
Route::get('delete_banner/{id}','BannerController@delete_banner');




//Recomended Product
Route::get('recomended','AdminController@recomended');
 // New =1 , Recomended =4  Top Products = 2
Route::get('recomended_db','AdminController@recomended_db')->name('recomended_db');
//Route::get('/home', 'AdminController@home')->name('home');
Route::get('recomended_update','AdminController@recomended_update');
Route::get('recomended_db_update','AdminController@recomended_db_update');





//SubCategory
Route::get('sub_category_view','SubCategoriesTableController@sub_category_view');
Route::post('/savesub','SubCategoriesTableController@savesubcategory');




//Special Banner 
Route::get('special','SpecialbannerController@index');
Route::post('special_banner_db','SpecialbannerController@save');
});

//Ecommerce User Register
Route::get('register_view','EcomuserController@register_view');
Route::get('login_view','EcomuserController@login_view');
Route::post('register_save','EcomuserController@register_save');
Route::post('login_verify','EcomuserController@login_verify');
Route::get('ecom_after_login/{id}','EcomuserController@ecom_after_login');  
Route::get('ecommerce/{id}','EcomuserController@ecommerce_after_login');
Route::get('ecommerce_logout/{id}','EcomuserController@ecommerce_logout_user');
Route::get('single_product/{id}','EcomuserController@views_single_product_detail');
Route::get('view_all_products_page','AddproductController@view_all_products_page');
Route::get('view_new_arrival_page','AddproductController@view_new_arrival_page');
Route::get('view_top_product_page','AddproductController@view_top_products_page');
Route::get('Contact_Us','AddproductController@contact_us_ecommerce');




//Add to Carts 

Route::get('add_to_cart/{id}','CartsController@add_to_cart');
Route::get('cart','CartsController@cart')->name('cart.add');
Route::get('delete_cart_product/{id}','CartsController@delete_from_cart');




//Adim Logout
Route::get('logout','AdminController@logout');




//Route::post('edit_category_db',);
Auth::routes();





Route::get('search',"AutocompleteController@index")->name('search');
;
Route::post('fetch', 'AutocompleteController@fetch');





Route::get('/export_excel', 'ExportController@index');

Route::get('/export_excel/excel', 'ExportController@excel')->name('export_excel.excel');