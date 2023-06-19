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

/*
//Test
Route::get('/event', function () {return 2;});
Route::get('/event/create/1', function () {return view('test');});
Route::get('/event/{id}', function ($id) {return $id;});


Route::get('/event/{id}/edit', function () {return 5;});

Route::get('/e/{name} {slug}','EventController@createNewEvent');
Route::get('/uOre/{name} {slug}','EventController@updateOrCreateEvent');
*/

//Simple Use Factory to create data.
Route::get('/test',function () {return $event = factory(App\Event::class, 5)->create();});


