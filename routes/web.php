<?php

Route::get('/', 'WelcomeController@index');
Route::get('/about', 'WelcomeController@aboutUs');
Route::get('/singleNews/{title}', 'WelcomeController@singleNews');
Route::get('/national-team/{title}', 'WelcomeController@singleCountry');


///////////////////////////////////////////////////////////////////////////////////////////

Auth::routes();
Route::get('/dashboard', 'HomeController@index');

//////////////////////////A_D_M_I_N////////////////////////////////

Route::get('/admin/register', 'AdminController@showRegistrationForm');
Route::post('/admin/register', 'AdminController@registerAdmin');
Route::get('/admin/manage', 'AdminController@manageAdmins');
Route::get('/admin/delete/{id}','AdminController@deleteAdmin');
Route::get('/admin/profile/{id}','AdminController@adminProfile');
Route::post('/admin/change/info','AdminController@changeInfoPost');
Route::get('/admin/change/info/{id}','AdminController@changeInfo');
Route::post('/admin/change/pw','AdminController@changePwPost');
Route::get('/admin/change/pw/{id}','AdminController@changePw');

//////////////////////////A_D_M_I_N////////////////////////////////


////////////////////////TEST..U-S-E-R..TEST///////////////////////////////////
Route::get('/visitor', 'VisitorController@index');
Route::get('/user-login', 'Auth\VisitorLoginController@showLoginForm');
Route::post('/user-login', 'Auth\VisitorLoginController@login');
////////////////////////TEST..U-S-E-R..TEST///////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////

/*................................Authenticated-Shit-Starts-Here............................*/

Route::group(['middleware'=>['auth:web']],function(){
    
    /*.................................NEWS..............................*/
    Route::group(['prefix' => 'news'], function () {
        Route::get('/add', 'newsController@createNews');
        Route::post('/save','newsController@storeNews');
        Route::get('/manage', 'newsController@manageNews');
        Route::get('/view', 'newsController@viewNews');
        Route::get('/view/{id}','newsController@viewNews');
        Route::get('/edit/{id}','newsController@editNews');
        Route::post('/update','newsController@updateNews');
        Route::get('/delete/{id}','newsController@deleteNews');
    });


    /*...............................Pinned-Video.........................*/

    Route::get('/video/edit/{id}','VideoController@editVideo');
    Route::post('/video/update','VideoController@updateVideo');

    /*..................................About-Us..........................*/

    Route::get('/about-us/edit/{id}','AboutController@editAbout');
    Route::post('/about-us/update','AboutController@updateAbout');

    /*.................................Panel..............................*/

    Route::group(['prefix' => 'panel'], function () {
        Route::get('/add', 'PanelController@createPanel');
        Route::post('/save','PanelController@storePanel');
        Route::get('/manage', 'PanelController@managePanel');
        Route::get('/view/{id}','PanelController@viewPanel');
        Route::get('/edit/{id}','PanelController@editPanel');
        Route::post('/update','PanelController@updatePanel');
        Route::get('/delete/{id}','PanelController@deletePanel');
    });

    /*................................League..............................*/

    Route::group(['prefix' => 'league'], function () {
        Route::get('/add','LeagueController@createLeague');
        Route::post('/save','LeagueController@storeLeague');
        Route::get('/manage', 'LeagueController@manageLeague');
        Route::get('/edit/{id}','LeagueController@editLeague');
        Route::post('/update','LeagueController@updateLeague');
        Route::get('/delete/{id}','LeagueController@deleteLeague');
    });

    /*...............................Team..................................*/

    Route::group(['prefix' => 'team'], function () {
        Route::get('/add', 'TeamController@createTeam');
        Route::post('/save','TeamController@storeTeam');
        //Domestic...
        Route::get('/manage/domestic/{id}','TeamController@manageDomesticTeam');
        Route::get('/domestic/view/{id}','TeamController@viewDomesticTeam');
        Route::get('/domestic/edit/{id}','TeamController@editDomesticTeam');
        Route::post('/update/domestic','TeamController@updateDomesticTeam');
        Route::get('/delete/domestic/{id}','TeamController@deleteDomesticTeam');
        //International
        Route::get('/manage/international','TeamController@manageInternationalTeam');
        Route::get('/international/view/{id}','TeamController@viewInternationalTeam');
        Route::get('/international/edit/{id}','TeamController@editInternationalTeam');
        Route::post('/update/international','TeamController@updateTeam');
        Route::get('/delete/international/{id}','TeamController@deleteTeam');
        
    });
});

/*................................Authenticated-Shit-Ends-Here............................*/