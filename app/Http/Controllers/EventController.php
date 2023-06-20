<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    /*
    - Create these APIs
    */

    /*
     - GET /api/v1/events -> Return all events from the database
     */
    public function findAllEvent (){
        $AllEvent=Event::get();
        return $AllEvent;
    }
    /*
     - GET /api/v1/events/active-events -> Return all events that are active = current datetime is within startAt and endAt
     */
    public function findAllActive_Event (){
        $AllActive_Event=Event::where(['startAt','<',date("Y-m-d H:i:s")],['endAt','>',date("Y-m-d H:i:s")])->get();
        return $AllActive_Event;
    }
    /*
     - GET /api/v1/events/{id} -> Get one event
     */
    public function find1_EventAccordingId ($id){
        $eventNeed=Event::findOrFail($id);
        return $eventNeed;
        //return $id;
    }

    /*
     - POST /api/v1/events -> Create an event
     */
    public function createNewEvent ($name,$slug){
        $eventNeed=new Event();
        $eventNeed->id=uniqid();
        $eventNeed->name=$name;
        $eventNeed->slug=$slug;
        $eventNeed->save();
        return $eventNeed;
    }
    /**
     * - PUT /api/v1/events/{id} -> Create event if not exist, else update the event in idempotent way
     */
    public function updateOrCreateEvent ($id,$name,$slug){
        
        if(count(Event::where('id',$id)->get())==0){
            $eventNeed=new Event();
            $eventNeed->id=uniqid();
            $eventNeed->name=$name;
            $eventNeed->slug=$slug;
            $eventNeed->save();
            return $eventNeed.'create New';
        }
        else{
            
            Event::where('id',$id)->update(['name'=>$name,'slug'=>$slug]);
        }
    }
    /**
     * - PATCH /api/v1/events/{id} -> Partially update event
     */
    public function partialyUpdateEvent ($id,$name='noChange',$slug='noChange' ){

        $changeDataArray=array();
        if($name!='noChange'){$changeDataArray['name']=$name;};
        if($slug!='noChange'){$changeDataArray['slug']=$slug;};
        Event::where('id',$id)->update(['name'=>$name,'slug'=>$slug]);
    }
    
    /**
    * - DELETE /api/v1/events/{id} -> Soft delete an event
    */
    public function softSelete ($id ){
        Event::where('id',$id)->delete();
    }
}
