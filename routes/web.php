<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/cbt', [App\Http\Controllers\CbtController::class, 'index']);

Route::get('/cbt/create-test', [App\Http\Controllers\CbtController::class, 'createTest']);

Route::get('/cbt/start-test', [App\Http\Controllers\CbtController::class, 'startTest']);

Route::get('/cbt/test-landing-page', [App\Http\Controllers\CbtController::class, 'testLandingPage']);

Route::get('/cbt/add-question', [App\Http\Controllers\CbtController::class, 'addQuestion']);

Route::get('/cbt/cbt-dashboard', [App\Http\Controllers\CbtController::class, 'cbtDashboard']);

Route::get('/cbt/test-result', [App\Http\Controllers\CbtController::class, 'testResult']);


Route::get('/generate/question-type', [App\Http\Controllers\QuestionController::class, 'generate']);

Route::get('/question-collection', [App\Http\Controllers\QuestionController::class, 'question_collection']);

Route::get('/detail-collection', [App\Http\Controllers\QuestionController::class, 'detail_collection']);

Route::get('/generate/add-question-manual', [App\Http\Controllers\QuestionController::class, 'add_question_manual']);

Route::get('/generate/add-question-test', [App\Http\Controllers\QuestionController::class, 'add_question_test']);

Route::get('/cbt/test-detail', [App\Http\Controllers\CbtController::class, 'cbtDetail']);

Route::get('/cbt/test-page', [App\Http\Controllers\CbtController::class, 'cbtLandingPage']);

Route::get('/cbt/admin-test-detail/{id}', [App\Http\Controllers\CbtController::class, 'cbtAdminDetailTest']);

Route::post('/store-create-test', [App\Http\Controllers\CbtController::class, 'storeNewTest']);

Route::get('/cbt/select-question/{id}', [App\Http\Controllers\CbtController::class, 'selectQuestionTest']);

Route::get('/cbt/detail-select-question/{id}', [App\Http\Controllers\CbtController::class, 'detailSelectQuestionTest']);

Route::get('/cbt/preview-test', [App\Http\Controllers\CbtController::class, 'preview']);

Route::get('/remove-question/{id}', [App\Http\Controllers\QuestionController::class, 'removeQuestion']);

Route::get('/add-question-to-test/{testId}/{id}', [App\Http\Controllers\QuestionController::class, 'addQuestiontoTest']);

Route::get('/generate', [App\Http\Controllers\GenerateController::class, 'index']);

Route::get('/generate/input-passage', [App\Http\Controllers\GenerateController::class, 'input_passage']);

Route::get('/generate/preview-passage', [App\Http\Controllers\GenerateController::class, 'preview_passage']);

Route::get('/generate/result', [App\Http\Controllers\GenerateController::class, 'generate_result']);

Route::get('/upgrade-account', [App\Http\Controllers\UserController::class, 'upgrade_account']);

Route::get('/upgrade-account/account-information', [App\Http\Controllers\UserController::class, 'account_information']);

Route::get('/upgrade-account/plan-option', [App\Http\Controllers\UserController::class, 'plan_option']);

Route::get('/upgrade-account/payment', [App\Http\Controllers\UserController::class, 'payment']);
