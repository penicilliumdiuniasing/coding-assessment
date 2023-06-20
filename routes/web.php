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


/*- Create these views
  - /events -> Show all events in the table (search and pagination has bonus point). Last column should display 2 buttons on each row to update and delete the event
  - /events/{id} -> Show individual event
  - /events/create -> Create an event
  - /events/{id}/edit -> Edit an event
*/


//Test
Route::get('/event', 'EventController@findAllEvent');
//Route::get('/event/{id}', 'EventController@find1_EventAccordingId');//->whereUuid('id');
Route::get('/event/create', 'EventController@createNewEvent');
Route::get('/event/edit', function () {return view('editEvent');});

Route::get('/e/{name} {slug}','EventController@createNewEvent');
Route::get('/uOre/{name} {slug}','EventController@updateOrCreateEvent');


//Simple Use Factory to create data.
Route::get('/test',function () {return $event = factory(App\Event::class, 5)->create();});
Route::get('/test1',function () { //$a+=date("Y-m-d H:i:s");
  return factory(App\Event::class, 5)->make();});

//Route::get('/testShow',function () { $data=App\Event::get();return view('showAllEvent',['data'=>$data]);});


