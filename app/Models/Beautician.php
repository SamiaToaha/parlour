<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beautician extends Model
{
    use HasFactory;
    
    protected $guarded=[];
    public function service()
    {
        return $this->belongsTo(Service::class,'service_name','id');
}
}