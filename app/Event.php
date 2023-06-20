<?php

namespace App;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /*
    - `Event` will have these properties
  - **id** -> PK, UNIQUE, value must be a UUID
  - **name** -> String
  - **slug** -> UNIQUE, String
  - **createdAt** -> NOT NULL, DateTime
  - **updatedAt** -> NOT NULL, DateTime

    */
   // use HasFactory,HasUuids;

   
   //use SoftDeletes;

   //const DELETED_AT = 'deletedAt';
    protected $fillable = [
     'name', 'slug'
    ];
    

}
