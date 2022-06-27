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
Auth::routes();//Authentication routes, predefined by Laravel

Route::get('/', 'QuizController@Home');//Returns the home page

Route::get('/aboutus', function(){//Returns the about us page
    return view('about');
});

Route::get('/panel', 'QuizController@RedirectToAppropriatePanel');//Redirect to appropriate panel

Route::resource('quiz', 'QuizEventController', ['only' => [//Quiz Events
    'create', 'store', 'show', 'update'
]]); 

Route::get('quiz/{id}', 'QuizEventController@display'); 

Route::resource('take', 'TakeQuizController', ['only' => [//Related to taking of quiz
    'store', 'show'
]]); 

Route::resource('class', 'ClassController',  ['only' => [//Class
    'index', 'store', 'show', 'destroy'
]]);

Route::resource('question', 'QuestionController', ['only' => [//Question
    'store', 'update',  'destroy',
]]); 

Route::resource('subjects', 'SubjectController', ['only' => [//Subject
    'index', 'store', 'update', 'destroy'
]]);

Route::resource('teachers', 'TeacherController', ['only' => [//Teacher list
    'index'
]]);

Route::resource('account', 'AccountController', ['only' => [//Account management
    'store', 'update', 'destroy'
]]);

Route::resource('questionnaire', 'QuestionnaireController', ['only' => [//Questionnaire
    'show', 
]]);

Route::resource('landingpage', 'LandingController', ['only' => [//Questionnaire
    'index',
]]);

Route::resource('joblist', 'JobController', ['only' => [//Job
    'index',
]]);

Route::post('join', 'QuizController@JoinClass');
Route::get('jobview/{id}', 'JobController@jobview');
Route::post('applyjob', 'LandingController@applyjob');
Route::get('application_list', 'LandingController@applicantlist');

Route::get('career', 'CareerController@index');

Route::post('add details job', 'JobDetailController@storedata');
Route::get('job show', 'JobDetailController@jobshow');

// Route::post('/test', function (){//Debugging purposes only
//     return $_POST;
// });
