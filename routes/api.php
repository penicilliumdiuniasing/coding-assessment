<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
- Create these APIs

- GET /api/v1/events -> Return all events from the database
- GET /api/v1/events/active-events -> Return all events that are active = current datetime is within startAt and endAt
- GET /api/v1/events/{id} -> Get one event
- POST /api/v1/events -> Create an event
- PUT /api/v1/events/{id} -> Create event if not exist, else update the event in idempotent way
- PATCH /api/v1/events/{id} -> Partially update event
- DELETE /api/v1/events/{id} -> Soft delete an event
 */

Route::prefix('/api/v1')->group(function(){
    Route::get('/events','EventController@findAllEvent');
    Route::get('/events/active-events','EventController@findAllActive_Event');
    Route::get('/events/{id}','EventController@find1_EventAccordingId');
    Route::post('/events','EventController@createNewEvent');
    Route::put('/events/{id}','EventController@updateOrCreateEvent');
    Route::patch('/events/{id}','EventController@partialyUpdateEvent');
    Route::delete('/events/{id}','EventController@softSelete');
});
