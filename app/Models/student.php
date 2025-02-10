<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    
    //now we are creating Accessers and mutators that are use for formating of data
    // public function getStNameAttribute($name)//this is Accesser that show data in specific format
    // {
    //     return ucwords($name);
    // }
    public function getemailAttribute($email)
    {
        return strtoupper($email);
    }
    public function getUpdatedAtAttribute($time)
    {
        $date=Carbon::parse($time);
        return $date->diffForHumans();
    }
    // public function setStNameAttribute($name)
    // {
    //     $this->attributes['st_name']=strtolower($name);
    // }
    // now we create accesors and mutators for name in one function as
    protected function StName():Attribute{
        return Attribute::make(
            get:fn(string $name)=>  ucwords($name),
            set: fn(string $name) =>  strtolower($name),
        );
    }
}
