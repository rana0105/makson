<?php
Route::get('/', 'PagesController@index')->name('post.home');
Route::get('at-a-glance', 'PagesController@atAglance');
Route::get('history', 'PagesController@ourHistory');

Route::get('recognition', 'PagesController@recognition');
Route::get('board-of-director', 'PagesController@boardOfdirector');
Route::get('meet-people', 'PagesController@meetPeople');
Route::get('mission-vision', 'PagesController@missionVision');


Route::get('metro-spinning-ltd', 'PagesController@groupConcernMesl');
Route::get('maksons-spinning-mills-ltd', 'PagesController@groupConcernMasml');
Route::get('maksourcing-ltd', 'PagesController@groupConcernMal');
Route::get('maksons-textile-limited', 'PagesController@groupConcernMtextile');
Route::get('makcot-international', 'PagesController@groupConcernMakcot');
Route::get('lamuni-apparels-ltd ', 'PagesController@groupConcernLamuni');
Route::get('maksons-properties-development-ltd', 'PagesController@groupConcernMpdl');
Route::get('maksons-logistic-ltd', 'PagesController@groupConcernMalogist');

Route::get('major-share-holding', 'PagesController@invastore');

Route::get('annual-reports', 'PagesController@annualReports');
Route::post('annualReportPost', 'PagesController@annualReportPost');

Route::get('compliance-status', 'PagesController@complianceCtatus');
Route::post('compleanceReportPost', 'PagesController@compleanceReportPost');

Route::get('quarterly-reports', 'PagesController@quarterlyReports');
Route::post('quarterlyReportPost', 'PagesController@quarterlyReportPost');

Route::get('director-report', 'PagesController@directoReports');
Route::post('directorReportPost', 'PagesController@directorReportPost');

Route::get('csr', 'PagesController@strategy');
Route::get('career', 'PagesController@carrerr');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::post('contactPage','PagesController@postContact')->name('contact.post');
Route::post('contactHome','PagesController@postContactHome')->name('contact.post.home');
Route::get('details/{id}', 'PagesController@detailJob')->name('job.details');
Route::post('jobApply', 'PagesController@jobApply')->name('job.apply');


Auth::routes(); 

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('member', 'Backend\MemberController');
    Route::resource('slider', 'Backend\SliderController');
    Route::resource('bulletin', 'Backend\BulletinController');
    Route::resource('concern', 'Backend\ConcernController');
    Route::resource('clientele', 'Backend\ClienteleController');
    Route::resource('areport', 'Backend\AreportController');
    Route::resource('qreport', 'Backend\QreportController');
    Route::resource('cstatus', 'Backend\CstatusController');
    Route::resource('dreport', 'Backend\DreportController');
    Route::resource('jobpost', 'Backend\JobpostController');
});

