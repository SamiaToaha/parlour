<?php

namespace App\Models;

use App\Models\TimeSlot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TimeSlot extends Model
{
    
    use HasFactory;
    protected $table="timeslots";
    protected $guarded=[];

    public function service()
    {
        return $this->belongsTo(Service::class,'name','id');

}
}
