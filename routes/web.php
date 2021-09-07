<?php

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

Route::get('/welcome', 'WelcomeController@index')->name('index');

Route::get('/', function () {
    return redirect()->route('index');
});


Auth::routes();
Route::get('/contactus_page','Pages@contactus');
Route::get('/contactus_page', 'EmailerContactUs@index')->name('contactus');
Route::post('/contactus_page/send', 'EmailerContactUs@send');

Route::get('/home', 'HomeController@index');
Route::get('/news_article','Pages@index');
Route::get('/mayors_page','Pages@mayor')->name('mayor');
Route::get('/skills_page','Pages@skills');

Route::get('/contents/news/{id}','Pages@news_contents');
Route::get('/contents/list','Pages@news_list');

Route::get('/brgy/contents/{id}','Pages@brgy_contents');

Route::get('/transparency','Pages@transparency')->name('transparency');

Route::get('ourcity/government_page','Pages@gov')->name('gov');
Route::get('ourcity/congressman_page','Pages@cong')->name('cong');
Route::get('ourcity/vicemayor_page','Pages@vice')->name('vice');
Route::get('ourcity/citycouncil_page','Pages@city')->name('city');
Route::get('ourcity/barangay_page','Pages@brgy')->name('brgy');
Route::get('ourcity/history_page','Pages@history')->name('history');

Route::get('programsandprojects/current_page','Pages@current')->name('current');
Route::get('programsandprojects/archives_page','Pages@archives')->name('archives');

Route::get('Services/Announcements1_page','Pages@announce')->name('announce');
Route::get('Services/Downloadable_page','Pages@downloadable')->name('downloadable');
Route::get('Services/QuarantineFacilities_page','Pages@quarantine')->name('quarantine');
Route::get('Services/SJMC_page','Pages@SJMC')->name('SJMC');

Route::get('Events/TourismFestivities_page','Pages@tourism')->name('tourism');
Route::get('Events/majorcalendar_page','Pages@calendar')->name('calendar');
Route::get('Events/lgu_page','Pages@lgu')->name('lgu');
Route::get('Events/Brgy_page','Pages@brgy1')->name('brgy1');
Route::get('Events/Community_page','Pages@community')->name('community');
Route::get('publicnotice/Bids_page','Pages@bids')->name('bids');

Route::get('publicnotice/Disclosure_page','Pages@disclosure')->name('disclosure');
Route::get('publicnotice/ExecutiveOrders','Pages@executive')->name('executive');
Route::get('publicnotice/Ordinance_page','Pages@ordinance')->name('ordinance');
Route::get('publicnotice/Announcements_page','Pages@announce1')->name('announce1');

Route::get('/directory_page','Pages@directory')->name('direct');

Route::get('/department_page','Pages@department')->name('department');
Route::get('/department_content','Pages@department_content')->name('dept_cont');
Route::get('/department_selected','Pages@department_selected')->name('department_selected');

Route::get('Login/employee_page','Pages@employee')->name('employee');
Route::get('Login/residence_page','Pages@residence')->name('residence');
Route::get('Login/visitor_page','Pages@visitor')->name('visitor');



Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    //user
    Route::get('/records_user/records', 'RecordsController@index')->name('admin.records_user.records');
    Route::resource('/records_user','RecordsController');
    Route::post('/records_user/create', 'RecordsController@store')->name('admin.records_user.records_insert');
    //admin
    Route::get('/records_admin/records', 'AdminRecordsController@index')->name('admin.records_admin.records');
    Route::resource('/records_admin','AdminRecordsController');
    Route::post('/records_admin/create', 'AdminRecordsController@store')->name('admin.records_admin.records_insert');
    //Announcment
    Route::get('/announcment/announcement', 'AnnouncementController@index')->name('admin.announcment.announcement');
    Route::post('/announcment/announcement', 'AnnouncementController@store');
    Route::resource('/announcment','AnnouncementController');
    Route::post('/announcment/list', 'AnnouncementController@makefirst');
    //News
    Route::get('/news/index', 'NewsController@index')->name('admin.news.index');
    Route::post('/news/create', 'NewsController@store');
    Route::resource('/index','NewsController');
    //Mayors
    Route::get('/covid_update/list_MC', 'MayorsController@index')->name('admin.covid_update.list_MC');
    Route::post('/covid_update/create_MC', 'MayorsController@store');
    Route::resource('/list_MC','MayorsController');
    Route::post('/covid_update/list_MC', 'MayorsController@makefirst');

    //Covid_Age
    // Route::get('/covid/covid_age', 'CovidAgeController@index')->name('admin.covid.covid_age');

    //Covid
    Route::get('/covid/brgy', 'CovidController@index')->name('admin.covid.brgy');
    Route::post('/covid/brgy', 'CovidController@Covid_update');
    Route::resource('/covid','CovidController');
    Route::post('/covid/', 'CovidController@Covid_target');

    //qr
    Route::get('/qr/list_qr', 'QRController@index')->name('admin.qr.list_qr');
    Route::post('/qr/list_qr', 'QRController@store1');
    Route::get('/qr/list_sched', 'QRController@list_sched')->name('admin.qr.list_sched');
    // Route::post('/qr/brgy', 'CovidController@Covid_update');
    Route::resource('/qr','QRController');
    // Route::post('/qr/', 'CovidController@Covid_target');

    //events
    Route::get('/events/events_list', 'EventsController@index')->name('admin.events.events_list');
    Route::post('/events/events_list', 'EventsController@store');
    Route::resource('/events','EventsController');
    // Route::post('/qr/', 'CovidController@Covid_target');

    //programs
    Route::get('/vice-mayor/programs/prog_list', 'ProgramsController@index')->name('admin.vice-mayor.programs.prog_list');
    Route::post('/vice-mayor/programs/prog_list', 'ProgramsController@store');
    Route::resource('/vice-mayor/programs','ProgramsController');

    //updates
    Route::get('/vice-mayor/updates/updates_list', 'UpdatesController@index')->name('admin.vice-mayor.updates.updates_list');
    Route::post('/vice-mayor/updates/updates_list', 'UpdatesController@store');
    Route::resource('/vice-mayor/updates','UpdatesController');

    //announcements
    Route::get('/vice-mayor/announcements/announcement_list', 'VM_AnnouncementsController@index')->name('admin.vice-mayor.announcements.announcement_list');
    Route::post('/vice-mayor/announcements/announcement_list', 'VM_AnnouncementsController@store');
    Route::resource('/vice-mayor/announcements','VM_AnnouncementsController');

    //cong-programs
    Route::get('/congressman/programs/prog_list', 'ProgramsCongressman@index')->name('admin.congressman.programs.prog_list');
    Route::post('/congressman/programs/prog_list', 'ProgramsCongressman@store');
    Route::resource('/congressman/programs','ProgramsCongressman');

    //cong-updates
    Route::get('/congressman/updates/updates_list', 'UpdatesCongressman@index')->name('admin.congressman.updates.updates_list');
    Route::post('/congressman/updates/updates_list', 'UpdatesCongressman@store');
    Route::resource('/congressman/updates','UpdatesCongressman');

    //cong-announcement
    Route::get('/congressman/announcements/announcement_list', 'AnnouncementsCongressman@index')->name('admin.congressman.announcements.announcement_list');
    Route::post('/congressman/announcements/announcement_list', 'AnnouncementsCongressman@store');
    Route::resource('/congressman/announcements','AnnouncementsCongressman');

    //Achievement
    Route::get('/achievement/congressman-list', 'AchievementsController@index')->name('admin.achievement.congressman-list');
    Route::get('/achievement/mayors-list', 'AchievementsController@mayor')->name('admin.achievement.mayors-list');
    Route::get('/achievement/vm-list', 'AchievementsController@vm')->name('admin.achievement.vm-list');
    // Route::post('/achievement/congressman-list.blade', 'AchievementsController@store');
    Route::resource('/achievement','AchievementsController');

    //Activity
    Route::get('/activity/act-list', 'ActivityController@index')->name('admin.activity.act-list');
    Route::post('/activity/act-list', 'ActivityController@index');
    // Route::post('/achievement/congressman-list.blade', 'AchievementsController@store');
    Route::resource('/activity','ActivityController');

    //Activity
    Route::get('/article/art-list', 'ArticleController@index')->name('admin.article.art-list');
    Route::post('/article/art-list', 'ArticleController@index');
    // Route::post('/achievement/congressman-list.blade', 'AchievementsController@store');
    Route::resource('/article','ArticleController');


    //Department
    Route::get('/department/department-list', 'DeparmentController@index')->name('admin.department.deparment-list');
    Route::post('/department/department-create', 'DeparmentController@create')->name('admin.department.deparment-create');
    //child
    Route::get('/department/child_dept/{id}','DeparmentController@child')->name('admin.department.child_dept');
    Route::get('/department/child_dept_edit/{id}', 'DeparmentController@child_edit')->name('admin.department.deparment-edit');
    Route::get('/department/department-create-child', 'DeparmentController@create_child')->name('admin.department.deparment-creates');
    Route::post('/department/child_dept_edit/{id}', 'DeparmentController@update_child')->name('admin.department.deparment-update');
    Route::post('/department/department-create-child', 'DeparmentController@store_child')->name('admin.department.deparment-create');
    Route::resource('/department','DeparmentController');
    
    //VIP Stores
    Route::get('/vip_list', 'Admin_VIPController@index')->name('admin.vip.vip_list');
    Route::resource('/vip', 'Admin_VIPController');
    
});
