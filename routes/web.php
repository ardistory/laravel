<?php

use App\Http\Controllers\CekHeaderMiddlewareController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\UploadFileController;
use App\Http\Middleware\CekHeaderMiddleware;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/youtube', '/pzn');

Route::fallback(function () {
    return "404 by ardiStory";
});

Route::get('/allmethod', [InputController::class, 'allMethod']);
Route::get('/input', [InputController::class, 'input']);
Route::get('/binding/{param1}/ardi/{param2}', [InputController::class, 'binding']);
Route::get('/validation', [InputController::class, 'validation']);
Route::get('/onlyinput', [InputController::class, 'onlyInput']);
Route::get('/exceptinput', [InputController::class, 'exceptInput']);
Route::get('/mergeinput', [InputController::class, 'mergeInput']);

Route::get('/file', [UploadFileController::class, 'getUpload']);
Route::post('/file/upload', [UploadFileController::class, 'uploadFile'])
    ->withoutMiddleware([VerifyCsrfToken::class]);

Route::get('/response/text', [ResponseController::class, 'responseText']);
Route::get('/response/json', [ResponseController::class, 'responseJson']);
Route::get('/response/file', [ResponseController::class, 'responseRenderFile']);
Route::get('/response/download', [ResponseController::class, 'responseDownloadFile']);

Route::get('/cookie/set', [CookieController::class, 'setCookie']);
Route::get('/cookie/get', [CookieController::class, 'getCookie']);
Route::get('/cookie/clear', [CookieController::class, 'clearCookie']);

Route::controller(RedirectController::class)->prefix('/redirect')->group(function () {
    Route::get('/from', 'redirectFrom');
    Route::get('/to', 'redirectTo');
    Route::get('/hello', 'redirectName');
    Route::get('/hello/{a}/{b}', 'redirectHello')->name('redirect.hello');
    Route::get('/action', 'redirectAction');
    Route::get('/away', 'redirectAway');
});

Route::middleware([CekHeaderMiddleware::class])->prefix('/middleware')->group(function () {
    Route::get('/cekheader', [CekHeaderMiddlewareController::class, 'cekHeader']);
    Route::get('/group', [CekHeaderMiddlewareController::class, 'cekHeaderGroup']);
});

Route::get('/url/action', function () {
    return URL::action([RedirectController::class, 'redirectHello'], [
        'a' => 'ardi',
        'b' => 'putra'
    ]);
});

Route::get('/form', [FormController::class, 'form']);
Route::post('/form', [FormController::class, 'postForm']);