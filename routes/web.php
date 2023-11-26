<?php


use App\Http\Controllers\AuthController;

use App\Http\Controllers\OurWorksController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\WorksController;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::group(['middleware' => ['auth']], function (){
    Route::get('/', 'HomeController@index')->name('home');
});
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/english', [HomeController::class, 'english'])->name('english');
Route::post('/mailsubmit', [HomeController::class, 'mailsubmit'])->name('home.mail');
Route::get('/panel/login', [AuthController::class, 'panelLogin'])->name('panel.login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('panel.login.post')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('panel.logout')->middleware('auth');



Route::group(['prefix' => 'panel'], function () {

    Route::get('/', [PanelController::class, 'about'])->name('panel.about');
    Route::put('/about', [PanelController::class, 'aboutupdate'])->name('panel.aboutupdate');

    Route::get('/printed', [PanelController::class,'printed'])->name('panel.printed');
    Route::put('/printed', [PanelController::class,'printedupdate'])->name('panel.printedupdate');

    Route::resource('/works', WorksController::class)->except(['show']);

    Route::resource('/our_works', OurWorksController::class)->except(['show']);
    /*
    Route::get('/lotterypermits', [LotterypermitsController::class,'index'])->name('lotterypermits.index');
    Route::put('/lotterypermits', [LotterypermitsController::class,'update'])->name('lotterypermits.update');

    Route::get('/organisation', [OrganisationController::class,'index'])->name('organisation.index');
    Route::put('/organisation', [OrganisationController::class,'update'])->name('organisation.update');

    Route::get('/legislation', [LegislationController::class,'index'])->name('legislation.index');
    Route::put('/legislation', [LegislationController::class,'update'])->name('legislation.update');

    Route::get('/activityreport', [ActivityreportController::class,'index'])->name('activityreport.index');
    Route::put('/activityreport', [ActivityreportController::class,'update'])->name('activityreport.update');


    Route::get('/ethics', [EthicsController::class,'index'])->name('ethics.index');
    Route::put('/ethics', [EthicsController::class,'update'])->name('ethics.update');

    Route::get('/additives', [AdditivesController::class,'index'])->name('additives.index');
    Route::put('/additives', [AdditivesController::class,'update'])->name('additives.update');

    Route::get('/homedetails', [HomeDetailsController::class,'index'])->name('homedetails.index');
    Route::put('/homedetails', [HomeDetailsController::class,'update'])->name('homedetails.update');

    Route::get('/icon', [IkonController::class,'index'])->name('icon.index');
    Route::put('/icon', [IkonController::class,'update'])->name('icon.update');

    Route::get('/icon', [IkonController::class,'index'])->name('icon.index');
    Route::put('/icon', [IkonController::class,'update'])->name('icon.update');

    Route::get('/management', [ManagementController::class,'index'])->name('management.index');
    Route::put('/management', [ManagementController::class,'update'])->name('management.update');

    Route::get('/managementimage', [ManagementImageController::class,'index'])->name('managementimage.index');
    Route::put('/managementimage', [ManagementImageController::class,'update'])->name('managementimage.update');

    Route::resource('/publicly', PubliclyController::class)->except(['show']);

    Route::resource('/ticket', TicketController::class)->except(['show']);

    Route::resource('/notice', NoticeController::class)->except(['show']);

    Route::resource('/contact', ContactController::class)->except(['show']);

    Route::resource('/banner', BannerController::class)->except(['show']);

    Route::resource('/resultjson', ResultJsonController::class)->except(['show']);

    Route::resource('/filesupload', FilesUploadController::class)->except(['show']);
    */
});
/*
Route::get('migrate', function (){
    Artisan::call();
});
*/
