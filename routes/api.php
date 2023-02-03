<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('inscription', [App\Http\Controllers\AuthController::class, 'InscrisUtilisateur']);
Route::post('connexion', [App\Http\Controllers\AuthController::class, 'connexion']);
Route::get('user/{id}', [App\Http\Controllers\AuthController::class, 'userInfo']);
Route::put('/modifier/{id}', [App\Http\Controllers\AuthController::class, 'update']);
Route::put('/update/{id}', [App\Http\Controllers\AuthController::class, 'updatestatut']);

Route::get('/echec', [App\Http\Controllers\AuthController::class, 'echec']);
Route::get('/reussite/{id}', [App\Http\Controllers\AuthController::class, 'updatestatut']);
Route::get('/reussite', [App\Http\Controllers\AuthController::class, 'accept']);

Route::middleware('auth:sanctum')->group(function () {
   
 
  
 
});

 Route::get('/lecon1', [
        App\Http\Controllers\JsonController::class,
        'lecon1',
    ]);
    Route::get('/lecon2', [
        App\Http\Controllers\JsonController::class,
        'lecon2',
    ]);
    Route::get('/lecon3', [
        App\Http\Controllers\JsonController::class,
        'lecon3',
    ]);
    Route::get('/lecon4', [
        App\Http\Controllers\JsonController::class,
        'lecon4',
    ]);
    Route::get('/lecon5', [
        App\Http\Controllers\JsonController::class,
        'lecon5',
    ]);
    Route::get('/lecon6', [
        App\Http\Controllers\JsonController::class,
        'lecon6',
    ]);
    Route::get('/lecon7', [
        App\Http\Controllers\JsonController::class,
        'lecon7',
    ]);
    Route::get('/lecon8', [
        App\Http\Controllers\JsonController::class,
        'lecon8',
    ]);
    Route::get('/lecon9', [
        App\Http\Controllers\JsonController::class,
        'lecon9',
    ]);
    Route::get('/lecon10', [
        App\Http\Controllers\JsonController::class,
        'lecon10',
    ]);
    Route::get('/lecon11', [
        App\Http\Controllers\JsonController::class,
        'lecon11',
    ]);
    Route::get('/lecon12', [
        App\Http\Controllers\JsonController::class,
        'lecon12',
    ]);
    Route::get('/lecon13', [
        App\Http\Controllers\JsonController::class,
        'lecon13',
    ]);
    Route::get('/lecon14', [
        App\Http\Controllers\JsonController::class,
        'lecon14',
    ]);
    Route::get('/lecon15', [
        App\Http\Controllers\JsonController::class,
        'lecon15',
    ]);
    Route::get('/lecon16', [
        App\Http\Controllers\JsonController::class,
        'lecon16',
    ]);
    Route::get('/lecon17', [
        App\Http\Controllers\JsonController::class,
        'lecon17',
    ]);
    Route::get('/lecon18', [
        App\Http\Controllers\JsonController::class,
        'lecon18',
    ]);
    Route::get('/lecon19', [
        App\Http\Controllers\JsonController::class,
        'lecon19',
    ]);
    Route::get('/lecon20', [
        App\Http\Controllers\JsonController::class,
        'lecon20',
    ]);
    Route::get('/lecon21', [
        App\Http\Controllers\JsonController::class,
        'lecon21',
    ]);
    Route::get('/lecon22', [
        App\Http\Controllers\JsonController::class,
        'lecon22',
    ]);
    Route::get('/lecon23', [
        App\Http\Controllers\JsonController::class,
        'lecon23',
    ]);
    Route::get('/lecon24', [
        App\Http\Controllers\JsonController::class,
        'lecon24',
    ]);
    Route::get('/lecon25', [
        App\Http\Controllers\JsonController::class,
        'lecon25',
    ]);
    Route::get('/lecon26', [
        App\Http\Controllers\JsonController::class,
        'lecon26',
    ]);
    Route::get('/lecon27', [
        App\Http\Controllers\JsonController::class,
        'lecon27',
    ]);
    Route::get('/lecon28', [
        App\Http\Controllers\JsonController::class,
        'lecon28',
    ]);
    Route::get('/lecon29', [
        App\Http\Controllers\JsonController::class,
        'lecon29',
    ]);
    Route::get('/lecon30', [
        App\Http\Controllers\JsonController::class,
        'lecon30',
    ]);
    Route::get('/lecon31', [
        App\Http\Controllers\JsonController::class,
        'lecon31',
    ]);
    Route::get('/lecon32', [
        App\Http\Controllers\JsonController::class,
        'lecon32',
    ]);
    Route::get('/lecon33', [
        App\Http\Controllers\JsonController::class,
        'lecon33',
    ]);
    Route::get('/lecon34', [
        App\Http\Controllers\JsonController::class,
        'lecon34',
    ]);
    Route::get('/lecon35', [
        App\Http\Controllers\JsonController::class,
        'lecon35',
    ]);
    Route::get('/lecon36', [
        App\Http\Controllers\JsonController::class,
        'lecon36',
    ]);
    Route::get('/lecon37', [
        App\Http\Controllers\JsonController::class,
        'lecon37',
    ]);
    Route::get('/lecon38', [
        App\Http\Controllers\JsonController::class,
        'lecon38',
    ]);
    Route::get('/lecon39', [
        App\Http\Controllers\JsonController::class,
        'lecon39',
    ]);
    Route::get('/lecon40', [
        App\Http\Controllers\JsonController::class,
        'lecon40',
    ]);
    Route::get('/lecon41', [
        App\Http\Controllers\JsonController::class,
        'lecon41',
    ]);
    Route::get('/lecon42', [
        App\Http\Controllers\JsonController::class,
        'lecon42',
    ]);
    Route::get('/lecon43', [
        App\Http\Controllers\JsonController::class,
        'lecon43',
    ]);
    Route::get('/lecon44', [
        App\Http\Controllers\JsonController::class,
        'lecon44',
    ]);
    Route::get('/lecon45', [
        App\Http\Controllers\JsonController::class,
        'lecon45',
    ]);
    Route::get('/lecon46', [
        App\Http\Controllers\JsonController::class,
        'lecon46',
    ]);
    Route::get('/lecon47', [
        App\Http\Controllers\JsonController::class,
        'lecon47',
    ]);
    Route::get('/lecon48', [
        App\Http\Controllers\JsonController::class,
        'lecon48',
    ]);
    Route::get('/lecon49', [
        App\Http\Controllers\JsonController::class,
        'lecon49',
    ]);
    Route::get('/lecon50', [
        App\Http\Controllers\JsonController::class,
        'lecon50',
    ]);
    Route::get('/lecon51', [
        App\Http\Controllers\JsonController::class,
        'lecon51',
    ]);
    Route::get('/lecon52', [
        App\Http\Controllers\JsonController::class,
        'lecon52',
    ]);
    Route::get('/lecon53', [
        App\Http\Controllers\JsonController::class,
        'lecon53',
    ]);
    Route::get('/lecon54', [
        App\Http\Controllers\JsonController::class,
        'lecon54',
    ]);
    Route::get('/lecon55', [
        App\Http\Controllers\JsonController::class,
        'lecon55',
    ]);
    Route::get('/lecon56', [
        App\Http\Controllers\JsonController::class,
        'lecon56',
    ]);
    Route::get('/lecon57', [
        App\Http\Controllers\JsonController::class,
        'lecon57',
    ]);
    Route::get('/lecon58', [
        App\Http\Controllers\JsonController::class,
        'lecon58',
    ]);
    Route::get('/lecon59', [
        App\Http\Controllers\JsonController::class,
        'lecon59',
    ]);
    Route::get('/lecon60', [
        App\Http\Controllers\JsonController::class,
        'lecon60',
    ]);
    Route::get('/lecon61', [
        App\Http\Controllers\JsonController::class,
        'lecon61',
    ]);
    Route::get('/lecon62', [
        App\Http\Controllers\JsonController::class,
        'lecon62',
    ]);
    Route::get('/lecon63', [
        App\Http\Controllers\JsonController::class,
        'lecon63',
    ]);
    Route::get('/lecon64', [
        App\Http\Controllers\JsonController::class,
        'lecon64',
    ]);
    Route::get('/lecon65', [
        App\Http\Controllers\JsonController::class,
        'lecon65',
    ]);
    Route::get('/lecon66', [
        App\Http\Controllers\JsonController::class,
        'lecon66',
    ]);
    Route::get('/lecon67', [
        App\Http\Controllers\JsonController::class,
        'lecon67',
    ]);
    Route::get('/lecon68', [
        App\Http\Controllers\JsonController::class,
        'lecon68',
    ]);
    Route::get('/lecon69', [
        App\Http\Controllers\JsonController::class,
        'lecon69',
    ]);
    Route::get('/lecon70', [
        App\Http\Controllers\JsonController::class,
        'lecon70',
    ]);
    Route::get('/lecon71', [
        App\Http\Controllers\JsonController::class,
        'lecon71',
    ]);
    Route::get('/lecon72', [
        App\Http\Controllers\JsonController::class,
        'lecon72',
    ]);
    Route::get('/lecon73', [
        App\Http\Controllers\JsonController::class,
        'lecon73',
    ]);
    Route::get('/lecon74', [
        App\Http\Controllers\JsonController::class,
        'lecon74',
    ]);
    Route::get('/lecon75', [
        App\Http\Controllers\JsonController::class,
        'lecon75',
    ]);
    Route::get('/lecon76', [
        App\Http\Controllers\JsonController::class,
        'lecon76',
    ]);
    Route::get('/lecon77', [
        App\Http\Controllers\JsonController::class,
        'lecon77',
    ]);
    Route::get('/lecon78', [
        App\Http\Controllers\JsonController::class,
        'lecon78',
    ]);
    Route::get('/lecon79', [
        App\Http\Controllers\JsonController::class,
        'lecon79',
    ]);
    Route::get('/lecon80', [
        App\Http\Controllers\JsonController::class,
        'lecon80',
    ]);
    Route::get('/lecon81', [
        App\Http\Controllers\JsonController::class,
        'lecon81',
    ]);
    Route::get('/lecon82', [
        App\Http\Controllers\JsonController::class,
        'lecon82',
    ]);
    Route::get('/lecon83', [
        App\Http\Controllers\JsonController::class,
        'lecon83',
    ]);
    Route::get('/lecon84', [
        App\Http\Controllers\JsonController::class,
        'lecon84',
    ]);
    Route::get('/lecon85', [
        App\Http\Controllers\JsonController::class,
        'lecon85',
    ]);
 
    Route::get('/lecon86', [
        App\Http\Controllers\JsonController::class,
        'lecon86',
    ]);
    Route::get('/lecon87', [
        App\Http\Controllers\JsonController::class,
        'lecon87',
    ]);
    Route::get('/lecon88', [
        App\Http\Controllers\JsonController::class,
        'lecon88',
    ]);
    Route::get('/lecon89', [
        App\Http\Controllers\JsonController::class,
        'lecon89',
    ]);
    Route::get('/lecon90', [
        App\Http\Controllers\JsonController::class,
        'lecon90',
    ]);
    Route::get('/lecon91', [
        App\Http\Controllers\JsonController::class,
        'lecon91',
    ]);
    Route::get('/lecon92', [
        App\Http\Controllers\JsonController::class,
        'lecon92',
    ]);
    Route::get('/lecon93', [
        App\Http\Controllers\JsonController::class,
        'lecon93',
    ]);
    Route::get('/lecon94', [
        App\Http\Controllers\JsonController::class,
        'lecon94',
    ]);
    Route::get('/lecon95', [
        App\Http\Controllers\JsonController::class,
        'lecon95',
    ]);
    Route::get('/lecon96', [
        App\Http\Controllers\JsonController::class,
        'lecon96',
    ]);
    Route::get('/lecon97', [
        App\Http\Controllers\JsonController::class,
        'lecon97',
    ]);
    Route::get('/lecon98', [
        App\Http\Controllers\JsonController::class,
        'lecon98',
    ]);
    Route::get('/lecon99', [
        App\Http\Controllers\JsonController::class,
        'lecon99',
    ]);
    Route::get('/lecon100', [
        App\Http\Controllers\JsonController::class,
        'lecon100',
    ]);
    Route::get('/lecon101', [
        App\Http\Controllers\JsonController::class,
        'lecon101',
    ]);
    Route::get('/lecon102', [
        App\Http\Controllers\JsonController::class,
        'lecon102',
    ]);
    Route::get('/lecon103', [
        App\Http\Controllers\JsonController::class,
        'lecon103',
    ]);
    Route::get('/lecon104', [
        App\Http\Controllers\JsonController::class,
        'lecon104',
    ]);
    Route::get('/lecon105', [
        App\Http\Controllers\JsonController::class,
        'lecon105',
    ]);
    Route::get('/lecon106', [
        App\Http\Controllers\JsonController::class,
        'lecon106',
    ]);
    Route::get('/lecon107', [
        App\Http\Controllers\JsonController::class,
        'lecon107',
    ]);
    Route::get('/lecon108', [
        App\Http\Controllers\JsonController::class,
        'lecon108',
    ]);
    Route::get('/lecon109', [
        App\Http\Controllers\JsonController::class,
        'lecon109',
    ]);
    Route::get('/lecon110', [
        App\Http\Controllers\JsonController::class,
        'lecon110',
    ]);
    Route::get('/lecon111', [
        App\Http\Controllers\JsonController::class,
        'lecon111',
    ]);
    Route::get('/lecon112', [
        App\Http\Controllers\JsonController::class,
        'lecon112',
    ]);
    Route::get('/lecon113', [
        App\Http\Controllers\JsonController::class,
        'lecon113',
    ]);
    Route::get('/lecon114', [
        App\Http\Controllers\JsonController::class,
        'lecon114',
    ]);
    Route::get('/lecon115', [
        App\Http\Controllers\JsonController::class,
        'lecon115',
    ]);
    Route::get('/lecon116', [
        App\Http\Controllers\JsonController::class,
        'lecon116',
    ]);
    Route::get('/lecon117', [
        App\Http\Controllers\JsonController::class,
        'lecon117',
    ]);
    Route::get('/lecon118', [
        App\Http\Controllers\JsonController::class,
        'lecon118',
    ]);
    Route::get('/lecon119', [
        App\Http\Controllers\JsonController::class,
        'lecon119',
    ]);
    Route::get('/facon1', [
        App\Http\Controllers\JsonController::class,
        'facon1',
    ]);
    Route::get('/facon2', [
        App\Http\Controllers\JsonController::class,
        'facon2',
    ]);
    Route::get('/facon3', [
        App\Http\Controllers\JsonController::class,
        'facon3',
    ]);
    Route::get('/facon4', [
        App\Http\Controllers\JsonController::class,
        'facon4',
    ]);
    Route::get('/facon5', [
        App\Http\Controllers\JsonController::class,
        'facon5',
    ]);
    Route::get('/texte1', [
        App\Http\Controllers\JsonController::class,
        'texte1',
    ]);
    Route::get('/texte2', [
        App\Http\Controllers\JsonController::class,
        'texte2',
    ]);
    Route::get('/mode_demploi', [
        App\Http\Controllers\JsonController::class,
        'mode_demploi',
    ]);
    Route::get('/lecon_speciale', [
        App\Http\Controllers\JsonController::class,
        'lecon_speciale',
    ]);
     Route::get('/about', [
        App\Http\Controllers\JsonController::class,
        'about',
    ]);
     Route::get('/introduction', [
        App\Http\Controllers\JsonController::class,
        'introduction',
    ]);



