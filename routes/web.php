<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\Frontend\IndexController@index')->name('Index');


/////admin panel///////

Route::get('/Admin/Login', 'App\Http\Controllers\Admin\LoginController@index')->name('Admin/Login');

Route::post('Admin/Login/Attempt', 'App\Http\Controllers\Admin\LoginController@attempt')->name('Admin/Login/Attempt');






Route::group(['middleware'=>'auth'],function(){



Route::get('Admin/Users', 'App\Http\Controllers\Admin\UserController@index')->name('Admin/Users');

Route::get('Admin/Users/Add', 'App\Http\Controllers\Admin\UserController@create')->name('Admin/Users/Add');

Route::post('Admin/Users/Store', 'App\Http\Controllers\Admin\UserController@store')->name('Admin/Users/Store');

Route::post('Admin/Users/EditSession', 'App\Http\Controllers\Admin\UserController@editsession')->name('Admin/Users/EditSession');

Route::get('Admin/Users/Edit', 'App\Http\Controllers\Admin\UserController@edit')->name('Admin/Users/Edit');

Route::post('Admin/Users/Delete', 'App\Http\Controllers\Admin\UserController@delete')->name('Admin/Users/Delete');

Route::post('Admin/Users/Update', 'App\Http\Controllers\Admin\UserController@update')->name('Admin/Users/Update');


Route::get('/Admin/Ads', 'App\Http\Controllers\Admin\AdsController@index')->name('Admin/Ads');

Route::get('/Admin/Ads/Add', 'App\Http\Controllers\Admin\AdsController@create')->name('Admin/Ads/Add');

Route::post('/Admin/Ads/Store', 'App\Http\Controllers\Admin\AdsController@store')->name('Admin/Ads/Store');

Route::post('/Admin/Ads/EditSession', 'App\Http\Controllers\Admin\AdsController@editsession')->name('Admin/Ads/EditSession');

Route::get('/Admin/Ads/Edit', 'App\Http\Controllers\Admin\AdsController@edit')->name('Admin/Ads/Edit');

Route::post('/Admin/Ads/Update', 'App\Http\Controllers\Admin\AdsController@update')->name('Admin/Ads/Update');

Route::post('/Admin/Ads/Delete', 'App\Http\Controllers\Admin\AdsController@delete')->name('Admin/Ads/Delete');



//BANNER SECTIONS STARTS
Route::get('/Admin/Banner', 'App\Http\Controllers\Admin\BannerController@index')->name('Admin/Banner');

Route::get('/Admin/Banner/Add', 'App\Http\Controllers\Admin\BannerController@create')->name('Admin/Banner/Add');

Route::post('/Admin/Banner/Store', 'App\Http\Controllers\Admin\BannerController@store')->name('Admin/Banner/Store');

Route::post('/Admin/Banner/EditSession', 'App\Http\Controllers\Admin\BannerController@editsession')->name('Admin/Banner/EditSession');

Route::get('/Admin/Banner/Edit', 'App\Http\Controllers\Admin\BannerController@edit')->name('Admin/Banner/Edit');

Route::post('/Admin/Banner/Update', 'App\Http\Controllers\Admin\BannerController@update')->name('Admin/Banner/Update');

Route::post('/Admin/Banner/Delete', 'App\Http\Controllers\Admin\BannerController@delete')->name('Admin/Banner/Delete');
//BANNER SECTIONS ENDS



Route::get('/Admin/LP_Leads', 'App\Http\Controllers\Admin\LPController@index')->name('Admin/LP_Leads');
Route::post('/Admin/Landing-Remark', 'App\Http\Controllers\Admin\LPController@LandingRemark')->name('Admin/Landing-Remark');


//mobile BANNER SECTIONS STARTS
Route::get('/Admin/MobileBanner', 'App\Http\Controllers\Admin\MobileBannerController@index')->name('Admin/MobileBanner');

Route::get('/Admin/MobileBanner/Add', 'App\Http\Controllers\Admin\MobileBannerController@create')->name('Admin/MobileBanner/Add');

Route::post('/Admin/MobileBanner/Store', 'App\Http\Controllers\Admin\MobileBannerController@store')->name('Admin/MobileBanner/Store');

Route::post('/Admin/MobileBanner/EditSession', 'App\Http\Controllers\Admin\MobileBannerController@editsession')->name('Admin/MobileBanner/EditSession');

Route::get('/Admin/MobileBanner/Edit', 'App\Http\Controllers\Admin\MobileBannerController@edit')->name('Admin/MobileBanner/Edit');

Route::post('/Admin/MobileBanner/Update', 'App\Http\Controllers\Admin\MobileBannerController@update')->name('Admin/MobileBanner/Update');

Route::post('/Admin/MobileBanner/Delete', 'App\Http\Controllers\Admin\MobileBannerController@delete')->name('Admin/MobileBanner/Delete');
//BANNER SECTIONS ENDS


//IMAGE SECTIONS STARTS
Route::get('Admin/Images', 'App\Http\Controllers\Admin\ImageController@index')->name('Admin/Images');

Route::get('Admin/Images/Add', 'App\Http\Controllers\Admin\ImageController@create')->name('Admin/Images/Add');

Route::post('Admin/Images/Store', 'App\Http\Controllers\Admin\ImageController@store')->name('Admin/Images/Store');

Route::post('Admin/Images/EditSession', 'App\Http\Controllers\Admin\ImageController@editsession')->name('Admin/Images/EditSession');

Route::get('Admin/Images/Edit', 'App\Http\Controllers\Admin\ImageController@edit')->name('Admin/Images/Edit');

Route::post('Admin/Images/Delete', 'App\Http\Controllers\Admin\ImageController@delete')->name('Admin/Images/Delete');

Route::post('Admin/Images/Update', 'App\Http\Controllers\Admin\ImageController@update')->name('Admin/Images/Update');
//IMAGE SECTIONS ENDS

//VIDEO SECTIONS STARTS
Route::get('Admin/Videos', 'App\Http\Controllers\Admin\VideosController@index')->name('Admin/Videos');

Route::get('Admin/Videos/Add', 'App\Http\Controllers\Admin\VideosController@create')->name('Admin/Videos/Add');

Route::post('Admin/Videos/Store', 'App\Http\Controllers\Admin\VideosController@store')->name('Admin/Videos/Store');

Route::post('Admin/Videos/EditSession', 'App\Http\Controllers\Admin\VideosController@editsession')->name('Admin/Videos/EditSession');

Route::get('Admin/Videos/Edit', 'App\Http\Controllers\Admin\VideosController@edit')->name('Admin/Videos/Edit');

Route::post('Admin/Videos/Delete', 'App\Http\Controllers\Admin\VideosController@delete')->name('Admin/Videos/Delete');

Route::post('Admin/Videos/Update', 'App\Http\Controllers\Admin\VideosController@update')->name('Admin/Videos/Update');
//VIDEO SECTIONS ENDS


//CONTACT SECTIONS STARTS
Route::get('Admin/Contacts', 'App\Http\Controllers\Admin\ContactsController@index')->name('Admin/Contacts');
Route::post('Admin/Contacts-Remark', 'App\Http\Controllers\Admin\ContactsController@ContactsRemark')->name('Admin/Contacts-Remark');
//CONTACT SECTIONS ENDS

// Admission Section

Route::get('Admin/Admission', 'App\Http\Controllers\Admin\AdmissionController@index')->name('Admin/Admission');

Route::post('Admission/Store', 'App\Http\Controllers\Frontend\AdmissionController@store')->name('Admission/Store');

Route::post('Admin/Admission/EditSession', 'App\Http\Controllers\Admin\AdmissionController@editsession')->name('Admin/Admission/EditSession');

Route::get('Admin/Admission/Edit', 'App\Http\Controllers\Admin\AdmissionController@edit')->name('Admin/Admission/Edit');

Route::post('Admin/Admission/Delete', 'App\Http\Controllers\Admin\AdmissionController@delete')->name('Admin/Admission/Delete');



//TESTIMONIAL SECTIONS STARTS
Route::get('Admin/Testimonials', 'App\Http\Controllers\Admin\TestimonialController@index')->name('Admin/Testimonials');

Route::get('Admin/Testimonials/Add', 'App\Http\Controllers\Admin\TestimonialController@create')->name('Admin/Testimonials/Add');

Route::post('Admin/Testimonials/Store', 'App\Http\Controllers\Admin\TestimonialController@store')->name('Admin/Testimonials/Store');

Route::post('Admin/Testimonials/EditSession', 'App\Http\Controllers\Admin\TestimonialController@editsession')->name('Admin/Testimonials/EditSession');

Route::get('Admin/Testimonials/Edit', 'App\Http\Controllers\Admin\TestimonialController@edit')->name('Admin/Testimonials/Edit');

Route::post('Admin/Testimonials/Delete', 'App\Http\Controllers\Admin\TestimonialController@delete')->name('Admin/Testimonials/Delete');

Route::post('Admin/Testimonials/Update', 'App\Http\Controllers\Admin\TestimonialController@update')->name('Admin/Testimonials/Update');
//TESTIMONIAL SECTIONS ENDS








Route::get('/Admin/Dashboard', 'App\Http\Controllers\Admin\DashboardController@index')->name('Admin/Dashboard');

Route::get('/Admin', 'App\Http\Controllers\Admin\DashboardController@index')->name('Admin/Dashboard');








Route::get('show_sub_category', 'App\Http\Controllers\Admin\CategoryController@index')->name('show_sub_category');
Route::get('show_category', 'App\Http\Controllers\Admin\CategoryController@index')->name('show_category');

//category crud
Route::get('/Admin/Category', 'App\Http\Controllers\Admin\CategoryController@index')->name('Admin/Category');

Route::get('/Admin/Category/Add', 'App\Http\Controllers\Admin\CategoryController@create')->name('Admin/Category/Add');

Route::post('/Admin/Category/Store', 'App\Http\Controllers\Admin\CategoryController@store')->name('Admin/Category/Store');

Route::post('/Admin/Category/EditSession', 'App\Http\Controllers\Admin\CategoryController@editsession')->name('Admin/Category/EditSession');

Route::get('/Admin/Category/Edit', 'App\Http\Controllers\Admin\CategoryController@edit')->name('Admin/Category/Edit');

Route::post('/Admin/Category/Update', 'App\Http\Controllers\Admin\CategoryController@update')->name('Admin/Category/Update');

Route::post('/Admin/Category/Delete', 'App\Http\Controllers\Admin\CategoryController@delete')->name('Admin/Category/Delete');





Route::get('/Admin/Subject', 'App\Http\Controllers\Admin\SubjectController@index')->name('Admin/Subject');

Route::get('/Admin/Subject/Add', 'App\Http\Controllers\Admin\SubjectController@create')->name('Admin/Subject/Add');

Route::post('/Admin/Subject/Store', 'App\Http\Controllers\Admin\SubjectController@store')->name('Admin/Subject/Store');

Route::post('/Admin/Subject/EditSession', 'App\Http\Controllers\Admin\SubjectController@editsession')->name('Admin/Subject/EditSession');

Route::get('/Admin/Subject/Edit', 'App\Http\Controllers\Admin\SubjectController@edit')->name('Admin/Subject/Edit');

Route::post('/Admin/Subject/Update', 'App\Http\Controllers\Admin\SubjectController@update')->name('Admin/Subject/Update');

Route::post('/Admin/Subject/Delete', 'App\Http\Controllers\Admin\SubjectController@delete')->name('Admin/Subject/Delete');




Route::get('/Admin/SubjectStudentCorner', 'App\Http\Controllers\Admin\SubjectStudentCornerController@index')->name('Admin/SubjectStudentCorner');

Route::get('/Admin/SubjectStudentCorner/Add', 'App\Http\Controllers\Admin\SubjectStudentCornerController@create')->name('Admin/SubjectStudentCorner/Add');

Route::post('/Admin/SubjectStudentCorner/Store', 'App\Http\Controllers\Admin\SubjectStudentCornerController@store')->name('Admin/SubjectStudentCorner/Store');

Route::post('/Admin/SubjectStudentCorner/EditSession', 'App\Http\Controllers\Admin\SubjectStudentCornerController@editsession')->name('Admin/SubjectStudentCorner/EditSession');

Route::get('/Admin/SubjectStudentCorner/Edit', 'App\Http\Controllers\Admin\SubjectStudentCornerController@edit')->name('Admin/SubjectStudentCorner/Edit');

Route::post('/Admin/SubjectStudentCorner/Update', 'App\Http\Controllers\Admin\SubjectStudentCornerController@update')->name('Admin/SubjectStudentCorner/Update');

Route::post('/Admin/SubjectStudentCorner/Delete', 'App\Http\Controllers\Admin\SubjectStudentCornerController@delete')->name('Admin/SubjectStudentCorner/Delete');




//category crud
Route::get('/Admin/Course', 'App\Http\Controllers\Admin\CourseController@index')->name('Admin/Course');

Route::get('/Admin/Course/Add', 'App\Http\Controllers\Admin\CourseController@create')->name('Admin/Course/Add');

Route::post('/Admin/Course/Store', 'App\Http\Controllers\Admin\CourseController@store')->name('Admin/Course/Store');

Route::post('/Admin/Course/EditSession', 'App\Http\Controllers\Admin\CourseController@editsession')->name('Admin/Course/EditSession');

Route::get('/Admin/Course/Edit', 'App\Http\Controllers\Admin\CourseController@edit')->name('Admin/Course/Edit');

Route::post('/Admin/Course/Update', 'App\Http\Controllers\Admin\CourseController@update')->name('Admin/Course/Update');

Route::post('/Admin/Course/Delete', 'App\Http\Controllers\Admin\CourseController@delete')->name('Admin/Course/Delete');



Route::get('/Admin/SubCategory', 'App\Http\Controllers\Admin\SubCategoryController@index')->name('Admin/SubCategory');

Route::get('/Admin/SubCategory/Add', 'App\Http\Controllers\Admin\SubCategoryController@create')->name('Admin/SubCategory/Add');

Route::post('/Admin/SubCategory/Store', 'App\Http\Controllers\Admin\SubCategoryController@store')->name('Admin/SubCategory/Store');

Route::post('/Admin/SubCategory/EditSession', 'App\Http\Controllers\Admin\SubCategoryController@editsession')->name('Admin/SubCategory/EditSession');

Route::get('/Admin/SubCategory/Edit', 'App\Http\Controllers\Admin\SubCategoryController@edit')->name('Admin/SubCategory/Edit');

Route::post('/Admin/SubCategory/Update', 'App\Http\Controllers\Admin\SubCategoryController@update')->name('Admin/SubCategory/Update');

Route::post('/Admin/SubCategory/Delete', 'App\Http\Controllers\Admin\SubCategoryController@delete')->name('Admin/SubCategory/Delete');







Route::get('/Admin/Notification', 'App\Http\Controllers\Admin\NotificationController@index')->name('Admin/Notification');

Route::get('/Admin/Notification/Add', 'App\Http\Controllers\Admin\NotificationController@create')->name('Admin/Notification/Add');

Route::post('/Admin/Notification/Store', 'App\Http\Controllers\Admin\NotificationController@store')->name('Admin/Notification/Store');

Route::post('/Admin/Notification/EditSession', 'App\Http\Controllers\Admin\NotificationController@editsession')->name('Admin/Notification/EditSession');

Route::get('/Admin/Notification/Edit', 'App\Http\Controllers\Admin\NotificationController@edit')->name('Admin/Notification/Edit');

Route::post('/Admin/Notification/ShowSession', 'App\Http\Controllers\Admin\NotificationController@showsession')->name('Admin/Notification/ShowSession');

Route::get('/Admin/Notification/Show', 'App\Http\Controllers\Admin\NotificationController@show')->name('Admin/Notification/Show');

Route::post('/Admin/Notification/Update', 'App\Http\Controllers\Admin\NotificationController@update')->name('Admin/Notification/Update');

Route::post('/Admin/Notification/Delete', 'App\Http\Controllers\Admin\NotificationController@delete')->name('Admin/Notification/Delete');



//feedback review




Route::get('/Admin/Team', 'App\Http\Controllers\Admin\TeamController@index')->name('Admin/Team');

Route::get('/Admin/Team/Add', 'App\Http\Controllers\Admin\TeamController@create')->name('Admin/Team/Add');

Route::post('/Admin/Team/Store', 'App\Http\Controllers\Admin\TeamController@store')->name('Admin/Team/Store');

Route::post('/Admin/Team/EditSession', 'App\Http\Controllers\Admin\TeamController@editsession')->name('Admin/Team/EditSession');

Route::get('/Admin/Team/Edit', 'App\Http\Controllers\Admin\TeamController@edit')->name('Admin/Team/Edit');

Route::post('/Admin/Team/Update', 'App\Http\Controllers\Admin\TeamController@update')->name('Admin/Team/Update');

Route::post('/Admin/Team/Delete', 'App\Http\Controllers\Admin\TeamController@delete')->name('Admin/Team/Delete');






Route::get('/Admin/StudentCorner', 'App\Http\Controllers\Admin\StudentCornerController@index')->name('Admin/StudentCorner');

Route::get('/Admin/StudentCorner/Add', 'App\Http\Controllers\Admin\StudentCornerController@create')->name('Admin/StudentCorner/Add');

Route::post('/Admin/StudentCorner/Store', 'App\Http\Controllers\Admin\StudentCornerController@store')->name('Admin/StudentCorner/Store');

Route::post('/Admin/StudentCorner/EditSession', 'App\Http\Controllers\Admin\StudentCornerController@editsession')->name('Admin/StudentCorner/EditSession');

Route::get('/Admin/StudentCorner/Edit', 'App\Http\Controllers\Admin\StudentCornerController@edit')->name('Admin/StudentCorner/Edit');

Route::post('/Admin/StudentCorner/Update', 'App\Http\Controllers\Admin\StudentCornerController@update')->name('Admin/StudentCorner/Update');

Route::post('/Admin/StudentCorner/Delete', 'App\Http\Controllers\Admin\StudentCornerController@delete')->name('Admin/StudentCorner/Delete');



Route::get('/Admin/Result', 'App\Http\Controllers\Admin\ResultController@index')->name('Admin/Result');

Route::get('/Admin/Result/Add', 'App\Http\Controllers\Admin\ResultController@create')->name('Admin/Result/Add');

Route::post('/Admin/Result/Store', 'App\Http\Controllers\Admin\ResultController@store')->name('Admin/Result/Store');

Route::post('/Admin/Result/EditSession', 'App\Http\Controllers\Admin\ResultController@editsession')->name('Admin/Result/EditSession');

Route::get('/Admin/Result/Edit', 'App\Http\Controllers\Admin\ResultController@edit')->name('Admin/Result/Edit');

Route::post('/Admin/Result/Update', 'App\Http\Controllers\Admin\ResultController@update')->name('Admin/Result/Update');

Route::post('/Admin/Result/Delete', 'App\Http\Controllers\Admin\ResultController@delete')->name('Admin/Result/Delete');






Route::get('/Admin/ResultCategory', 'App\Http\Controllers\Admin\ResultCategoryController@index')->name('Admin/ResultCategory');

Route::get('/Admin/ResultCategory/Add', 'App\Http\Controllers\Admin\ResultCategoryController@create')->name('Admin/ResultCategory/Add');

Route::post('/Admin/ResultCategory/Store', 'App\Http\Controllers\Admin\ResultCategoryController@store')->name('Admin/ResultCategory/Store');

Route::post('/Admin/ResultCategory/EditSession', 'App\Http\Controllers\Admin\ResultCategoryController@editsession')->name('Admin/ResultCategory/EditSession');

Route::get('/Admin/ResultCategory/Edit', 'App\Http\Controllers\Admin\ResultCategoryController@edit')->name('Admin/ResultCategory/Edit');

Route::post('/Admin/ResultCategory/Update', 'App\Http\Controllers\Admin\ResultCategoryController@update')->name('Admin/ResultCategory/Update');

Route::post('/Admin/ResultCategory/Delete', 'App\Http\Controllers\Admin\ResultCategoryController@delete')->name('Admin/ResultCategory/Delete');



Route::get('/Admin/Career', 'App\Http\Controllers\Admin\CareerController@index')->name('Admin/Career');

Route::get('/Admin/Career/Add', 'App\Http\Controllers\Admin\CareerController@create')->name('Admin/Career/Add');

Route::post('/Admin/Career/Store', 'App\Http\Controllers\Admin\CareerController@store')->name('Admin/Career/Store');

Route::post('/Admin/Career/EditSession', 'App\Http\Controllers\Admin\CareerController@editsession')->name('Admin/Career/EditSession');

Route::get('/Admin/Career/Edit', 'App\Http\Controllers\Admin\CareerController@edit')->name('Admin/Career/Edit');

Route::post('/Admin/Career/Update', 'App\Http\Controllers\Admin\CareerController@update')->name('Admin/Career/Update');

Route::post('/Admin/Career/Delete', 'App\Http\Controllers\Admin\CareerController@delete')->name('Admin/Career/Delete');



Route::get('/Admin/Order', 'App\Http\Controllers\Admin\CustomerController@index')->name('Admin/Sales');

Route::get('/Admin/Order/Today', 'App\Http\Controllers\Admin\CustomerController@today_sales')->name('Admin/Sales/Today');

Route::get('/Admin/Sales/Add', 'App\Http\Controllers\Admin\CustomerController@create')->name('Admin/Sales/Add');

Route::post('/Admin/Sales/Store', 'App\Http\Controllers\Admin\CustomerController@store')->name('Admin/Sales/Store');

Route::post('/Admin/Sales/ViewSession', 'App\Http\Controllers\Admin\CustomerController@view_session_sales')->name('Admin/Sales/ViewSession');

Route::get('/Admin/Sales/View', 'App\Http\Controllers\Admin\CustomerController@view_sales')->name('Admin/Sales/View');

Route::post('/Admin/Sales/Update', 'App\Http\Controllers\Admin\CustomerController@update')->name('Admin/Sales/Update');

Route::get('/Admin/Order/History', 'App\Http\Controllers\Admin\CustomerController@delivered_product')->name('Admin/Order/Delivered');

Route::get('/Admin/Order/Cancelled', 'App\Http\Controllers\Admin\CustomerController@cancelled_product')->name('Admin/Order/Cancelled');

Route::get('/Admin/Customer', 'App\Http\Controllers\Admin\CustomerController@all_customers')->name('Admin/Customer');

Route::get('/Admin/Customer/Active', 'App\Http\Controllers\Admin\CustomerController@active_customers')->name('Admin/Customer/Active');

Route::post('/Admin/Customer/ViewSession', 'App\Http\Controllers\Admin\CustomerController@view_session')->name('Admin/Customer/ViewSession');

Route::get('/Admin/Customer/View', 'App\Http\Controllers\Admin\CustomerController@view')->name('Admin/Customer/View');

Route::post('/Admin/Sales/DeliveryStatus/Change', 'App\Http\Controllers\Admin\CustomerController@delivery_status_change')->name('Admin/Sales/DeliveryStatus/Change');

 Route::get('/Check-Out','App\Http\Controllers\Frontend\ShoppingCartController@checkout')->name('Check-Out');
});





Auth::routes();



////frontend routes

Route::get('/Login','App\Http\Controllers\Frontend\LoginController@index')->name('Login');

Route::get('/Register','App\Http\Controllers\Frontend\RegisterController@index')->name('Register');

Route::get('/Forgot-Password','App\Http\Controllers\Frontend\LoginController@forgot_password')->name('Forgot-Password');

Route::get('/Reset-Password','App\Http\Controllers\Frontend\LoginController@reset_password')->name('Reset-Password');

Route::get('/OTP','Frontend\OTPController@index')->name('OTP');


Route::get('/Home','App\Http\Controllers\Frontend\IndexController@index')->name('Index');

Route::get('/About','App\Http\Controllers\Frontend\AboutController@index')->name('About');

Route::get('/About-CGPSC','App\Http\Controllers\Frontend\AboutController@about_cgpsc')->name('About-CGPSC');


Route::get('/News-&-Media','App\Http\Controllers\Frontend\GalleryController@news_and_media')->name('News-&-Media');

Route::get('Videos/{id}','App\Http\Controllers\Frontend\GalleryController@videos');

Route::get('/Contact','App\Http\Controllers\Frontend\ContactController@index')->name('Contact');

Route::post('/Store','App\Http\Controllers\Frontend\ContactController@store')->name('Contact/Store');

Route::get('/Career','App\Http\Controllers\Frontend\CareerController@index')->name('Career');

Route::post('/Career/Store','App\Http\Controllers\Frontend\CareerController@store')->name('Career/Store');

Route::get('/test',function(){
	return '<form action="http://localhost/rajput_backup/Career/Store" method="post"><input type="submit"></form>';
});

Route::get('/Admission','App\Http\Controllers\Frontend\AdmissionController@index')->name('Admission');

Route::post('/Admission/Callback/{id}','App\Http\Controllers\Frontend\AdmissionController@callback');

Route::get('/Our-Team','App\Http\Controllers\Frontend\TeamController@index')->name('Our-Team');

Route::get('/Shopping-Cart','App\Http\Controllers\Frontend\ShoppingCartController@index')->name('Shopping-Cart');



Route::post('/Cart/Store','App\Http\Controllers\Frontend\ShoppingCartController@store')->name('Cart/Store');

Route::post('/Cart/Remove','App\Http\Controllers\Frontend\ShoppingCartController@remove')->name('Cart/Remove');


Route::get('/Payment','App\Http\Controllers\Frontend\PaymentController@index')->name('Payment');

Route::get('/Invoice','App\Http\Controllers\Frontend\InvoiceController@index')->name('Invoice');


Route::get('/Pendrive-Course','App\Http\Controllers\Frontend\CourseController@pendrive')->name('Pendrive-Course');

Route::get('/Desktop-Course','App\Http\Controllers\Frontend\CourseController@desktop')->name('Desktop-Course');


Route::get('/Desktop-Course/Search','App\Http\Controllers\Frontend\CourseController@desktop_search')->name('Desktop-Course/Search');



Route::get('/Pendrive-Course/Search','App\Http\Controllers\Frontend\CourseController@pendrive_search')->name('Pendrive-Course/Search');


Route::get('/Course/{ProductName}','App\Http\Controllers\Frontend\CourseController@productname');


Route::get('/Result','App\Http\Controllers\Frontend\ResultController@index')->name('Result');



Route::post('/Category/Change','App\Http\Controllers\Frontend\CourseController@category_change')->name('Category/Change');

Route::post('/SubCategory/Change','App\Http\Controllers\Frontend\CourseController@sub_category_change')->name('SubCategory/Change');

Route::post('/Subject/Change','App\Http\Controllers\Frontend\CourseController@subject_change')->name('Subject/Change');

Route::post('/Language/Change','App\Http\Controllers\Frontend\CourseController@language_change')->name('Language/Change');


Route::get('/Return-Policy','App\Http\Controllers\Frontend\FaqsController@return_policy')->name('Return-Policy');

Route::get('/Faqs','App\Http\Controllers\Frontend\FaqsController@faqs')->name('Faqs');

Route::get('/Terms-&-Condition','App\Http\Controllers\Frontend\FaqsController@terms')->name('Terms-&-Condition');



Route::get('/My-Course','App\Http\Controllers\Frontend\MyCourseController@index')->name('My-Course');

Route::get('/Profile','App\Http\Controllers\Frontend\ProfileController@index')->name('Profile');

Route::get('/Images','App\Http\Controllers\Frontend\GalleryController@images')->name('Images');

Route::get('/Previous-Question-Papers','App\Http\Controllers\Frontend\StudentCornerController@previous_question_paper')->name('Previous-Question-Papers');


Route::get('/Current-Affair','App\Http\Controllers\Frontend\StudentCornerController@current_affair')->name('Current-Affair');


Route::get('/StudentCorner/{id}','App\Http\Controllers\Frontend\StudentCornerController@current_affair');


Route::get('/Study-Material','App\Http\Controllers\Frontend\StudentCornerController@study_material')->name('Study-Material');


Route::get('/Test-Series','App\Http\Controllers\Frontend\StudentCornerController@test_series')->name('Test-Series');


Route::get('/Model-Answer-Key','App\Http\Controllers\Frontend\StudentCornerController@model_answer_key')->name('Model-Answer-Key');



Route::get('/Our-Achievers','App\Http\Controllers\Frontend\OurAchieversController@index')->name('Our-Achievers');



Route::get('/Terms-&-Conditions','App\Http\Controllers\Frontend\TermsAndConditionsController@index')->name('Terms-&-Conditions');

Route::get('/Teacher-Details','App\Http\Controllers\Frontend\TeachersController@index')->name('Teacher-Details');



Route::get('/User/Login','App\Http\Controllers\Frontend\UserController@login')->name('User/Login');

Route::get('/User/Register','App\Http\Controllers\Frontend\UserController@register')->name('User/Register');

Route::get('/User/MyCourse','App\Http\Controllers\Frontend\UserController@mycourse')->name('User/MyCourse');

Route::get('/User/Profile','App\Http\Controllers\Frontend\UserController@profile')->name('User/Profile');

Auth::routes();

Route::get('auth/google', [App\Http\Controllers\Frontend\GoogleController::class, 'redirectToGoogle']);

Route::get('callback/{provider}' ,'App\Http\Controllers\Frontend\GoogleController@handleGoogleCallback');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/Order/Store','App\Http\Controllers\Frontend\ShoppingCartController@order_store')->name('Order/Store');

Route::post('/Order/Callback/{id}','App\Http\Controllers\Frontend\ShoppingCartController@order_callback')->name('Order/Callback');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
