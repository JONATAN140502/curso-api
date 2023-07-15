<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// crud categories
// Route::prefix('categorie')->group(function () {
//     Route::get('/', 'App\Http\Controllers\CategorieController@index')->name('categorie.index');
//     Route::post('/store', 'App\Http\Controllers\CategorieController@store')->name('categorie.store');
//     Route::get('/{id}/show', 'App\Http\Controllers\CategorieController@show')->name('categorie.show');
//     Route::post('/update', 'App\Http\Controllers\CategorieController@update')->name('categorie.update');
//     Route::post('/destroy', 'App\Http\Controllers\CategorieController@destroy')->name('categorie.destroy');
    
// });
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['auth:api'])->group(function () {
    Route::apiResource('category', CategoryController::class);
    Route::apiResource('course', CourseController::class);
});
// Route::apiResource('category', CategoryController::class);
//     Route::apiResource('course', CourseController::class);
