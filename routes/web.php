<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberDashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentMethodeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\TermAndConditionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'home'])->middleware('stepcheck')->name('home');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/contect', [FrontendController::class, 'contect'])->name('contect');
Route::get('/our/stories', [FrontendController::class, 'blogs'])->name('our.stories');
Route::get('/our/videos', [FrontendController::class, 'our_videos'])->name('our.videos');
Route::get('/stories/details/{slug}', [FrontendController::class, 'stories_details'])->name('stories.details');
Route::post('/message/store', [FrontendController::class, 'message_store'])->name('message.store');
Route::get('/albums', [FrontendController::class, 'albums'])->name('albums');
Route::get('/albums/details/{slug}', [FrontendController::class, 'albums_details'])->name('albums.details');
Route::get('/mission/vision', [FrontendController::class, 'mission_vision'])->name('mission.vision');

// addtional page
Route::get('/aboutus', [FrontendController::class, 'about_us'])->name('about.us');
Route::get('/privacy/policy', [FrontendController::class, 'privacy_policy'])->name('privacy.policy');
Route::get('/terms/condition', [FrontendController::class, 'terms_condition'])->name('terms.condition');
// login
Route::group(['prefix' => 'admin'], function(){
    // login route
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // logout route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // dashboard
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::resource('users', UserController::class);
    Route::resource('gallerys', CategoryController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('collection', ReviewController::class);
    Route::resource('experience', ExperienceController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('stories', StoresController::class);
    Route::resource('videos', VideoController::class);
    Route::resource('album', AlbumController::class);
    Route::resource('package', PackageController::class);
    Route::resource('payment', PaymentMethodeController::class);

    // addtional page
    Route::resource('about', AboutController::class);
    Route::resource('privacypolicy', PrivacyPolicyController::class);
    Route::resource('termandcondition', TermAndConditionController::class);
});

// member login
Route::get('/member/login', [MemberController::class, 'member_login'])->name('member.login');
Route::post('/member/login/post', [MemberController::class, 'member_login_post'])->name('member.login.post');
Route::get('/member/logout', [MemberController::class, 'member_logout'])->name('member.logout');
Route::get('/member/registration', [MemberController::class, 'member_registration'])->name('member.registration');
Route::post('/member/register', [MemberController::class, 'member_register'])->name('member.register');
// customer register
Route::get('/member/basic/info', [CustomerDashboardController::class, 'member_basic_info'])->name('member.basic.info');
Route::post('/member/basic/info/store', [CustomerDashboardController::class, 'member_basic_info_store'])->name('member.basic.info.store');
Route::get('/member/education/career', [CustomerDashboardController::class, 'member_education_career'])->name('member.education.career');
Route::post('/education/career/store', [CustomerDashboardController::class, 'education_career_store'])->name('education.career.store');
Route::get('/member/family/location', [CustomerDashboardController::class, 'member_family_location'])->name('member.family.location');
Route::post('/family/location/store', [CustomerDashboardController::class, 'family_location_store'])->name('family.location.store');
Route::get('/member/physical/attribute', [CustomerDashboardController::class, 'member_physical_attribute'])->name('member.physical.attribute');
Route::post('/physical/attribute/store', [CustomerDashboardController::class, 'physical_attribute_store'])->name('physical.attribute.store');
Route::get('/member/lifestyle', [CustomerDashboardController::class, 'member_lifestyle'])->name('member.lifestyle');
Route::post('/lifestyle/store', [CustomerDashboardController::class, 'lifestyle_store'])->name('lifestyle.store');
Route::get('/member/partner/preferences', [CustomerDashboardController::class, 'member_partner_preferences'])->name('member.partner.preferences');
Route::post('/partner/preferences/store', [CustomerDashboardController::class, 'partner_preferences_store'])->name('partner.preferences.store');
Route::get('/member/aboutme', [CustomerDashboardController::class, 'member_aboutme'])->name('member.aboutme');
Route::post('/aboutme/store', [CustomerDashboardController::class, 'aboutme_store'])->name('aboutme.store');
Route::get('/member/manage/photo', [CustomerDashboardController::class, 'member_manage_photo'])->name('member.manage.photo');
Route::post('/manage/photo/store', [CustomerDashboardController::class, 'manage_photo_store'])->name('manage.photo.store');

// member dashboard
Route::group(['prefix' => 'member'], function(){
    Route::get('/profile/update', [MemberDashboardController::class, 'profile_update'])->name('profile.update');
    Route::post('/profile/update/store', [MemberDashboardController::class, 'profile_update_store'])->name('profile.update.store');
    Route::get('/member/profile/{username}', [MemberDashboardController::class, 'member_profile'])->name('member.profile');
    Route::get('/partner/preferance/view', [MemberDashboardController::class, 'partner_preferance_view'])->name('partner.preferance.view');
    Route::post('/partner/preferences/update', [MemberDashboardController::class, 'partner_preferences_update'])->name('partner.preferences.update');
    Route::get('/premium/package', [MemberDashboardController::class, 'premium_package'])->name('premium.package');
    Route::get('/payment/view/{id}', [MemberDashboardController::class, 'payment_view'])->name('payment.view');
    Route::post('/payment/methode/store', [MemberDashboardController::class, 'payment_methode_store'])->name('payment.methode.store');
});

