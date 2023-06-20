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
    public function findAllEvent (Request $request){
        $AllEvent=Event::get();
        $editResult=$request->input('edit','nothing');
        $searchData=$request->input('id','nothing');
        $choice=$request->input('Choice');
        $idChosen=$request->input('idChosen');
        if($choice=='search'){
            if($searchData!='nothing'){redirect('/event/'.$searchData)->withInput([$searchData]);};
        };
        //if($editResult=='update'){return redirect('/event/edit')->withInput([$idChosen]);};
        return view('showAllEvent',['data'=>$AllEvent,'test'=>$editResult,'idChosen'=>$idChosen]);
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
        return view('show1Event',['dataEach'=>$eventNeed]);
        //return $id;
    }

    /*
     - POST /api/v1/events -> Create an event
     */
    public function createNewEvent (Request $request){
        

        $choice=$request->input('choice','noChange');
        $id=$request->input('id','noChange');
        $name=$request->input('name','noChange');
        $slug=$request->input('slug','noChange');
        $startAt=$request->input('startAt','noChange');
        $endAt=$request->input('endAt','noChange');


        if($choice=='create'){
           
            if($id!='noChange'){
                //id of new event cannot be null.
                $eventNeed=new Event();
                $eventNeed->id=$id;
                if($name!='noChange'){$eventNeed->name=$name;};
                if($slug!='noChange'){$eventNeed->slug=$slug;};
                if($startAt!='noChange'){$eventNeed->startAt=$startAt;};
                if($endAt!='noChange'){$eventNeed->endAt=$endAt;};
                $eventNeed->save();
            };
        };

        
        return view('createEvent');
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
            //return $eventNeed.'create New';
        }
        else{
            
            Event::where('id',$id)->update(['name'=>$name,'slug'=>$slug]);
        }
    }
    /**
     * - PATCH /api/v1/events/{id} -> Partially update event
     */
    public function partialyUpdateEvent ($id,$name='noChange',$slug='noChange' ,$startAt='noChange',$endAt='noChange' ){

        $changeDataArray=array();
        if($name!='noChange'){$changeDataArray['name']=$name;};
        if($slug!='noChange'){$changeDataArray['slug']=$slug;};
        if($startAt!='noChange'){$changeDataArray['startAt']=$startAt;};
        if($endAt!='noChange'){$changeDataArray['endAt']=$endAt;};
        Event::where('id',$id)->update($changeDataArray);
    }
    
    /**
    * - DELETE /api/v1/events/{id} -> Soft delete an event
    */
    public function softSelete ($id ){
        Event::where('id',$id)->delete();
    }
}
