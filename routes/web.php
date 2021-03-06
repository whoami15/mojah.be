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

Route::get('/', function () {
    return view('welcome');
});

Route::get('mailing-lists', 'MailingListController@index');
Route::get('mailing-lists/author/{id}', 'AuthorController@show');
Route::get('mailing-lists/{slug}', 'TopicController@index');
Route::get('mailing-lists/{slug}/{topic}', 'TopicController@show');

Route::get('/api/v1/mailing-lists/{slug}', 'TopicApiController@index');
Route::get('/api/v1/mailing-lists/{slug}/{topicId}/messages', 'TopicMessagesApiController@index');
Route::get('/api/v1/authors/{authorId}/topics', 'AuthorTopicsController@index');
Route::get('/api/v1/authors/{authorId}/messages', 'AuthorMessagesController@index');

Route::get('analytics', 'AnalyticsController@index');
Route::get('analytics/transactions-per-day', 'AnalyticsController@transactionCountPerDay');

Route::feeds();
