<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    //Fillable Fields
    protected $fillable = [
        "name",
        "description",
        "meta"
    ];

    protected $dates= [];

    //Validation Rules
    public static $rules = [
        "name" => "required",
        "description" => "required",
        "meta" => "required",
    ];

    // Relationships
    public function triggers()
    {
        return $this->belongsToMany("App\Trigger");
    }
}
/*
action	id	        integer 	primary
action	name	    string		required
action	description	string		required
action	meta	    json		required
action	triggers	array	    belongsToMany
*/