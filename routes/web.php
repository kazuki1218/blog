<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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
// ①ルーティング作成(登録画面表示・ブログ登録)
// ②コントローラー作成(登録画面表示)
// ③登録画面のBladeを表示(CSRF対策)
// ④コントローラーの作成(ブログ登録)
// ⑤バリデーション作成
// ⑥エラー処理

//ブログ一覧画面を表示
Route::get('/', [App\Http\Controllers\BlogController::class, 'showList'])->name('blogs');

// ブログ登録画面を表示
Route::get('/blog/create', [App\Http\Controllers\BlogController::class, 'showCreate'])->name('create');

// ブログ登録
Route::post('/blog/store', [App\Http\Controllers\BlogController::class, 'exeStore'])->name('store');

// ブログ詳細画面を表示
Route::get('/blog/{id}', [App\Http\Controllers\BlogController::class, 'showDetail'])->name('show');

// ブログ編集画面を表示
Route::get('/blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'showEdit'])->name('edit');

// ブログ編集画面からの更新
Route::post('/blog/update', [App\Http\Controllers\BlogController::class, 'exeUpdate'])->name('update');

// ブログ削除
Route::post('/blog/delete/{id}', [App\Http\Controllers\BlogController::class, 'exeDelete'])->name('delete');
