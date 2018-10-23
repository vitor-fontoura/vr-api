<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Trigger extends Model
{
    //Fillable Fields
    protected $fillable = [
        "type",
        "repeatable",
        "cooldown",
    ];

    protected $dates = [];

    // Validation rules
    public static $rules = [
        "type" => "required"

    ];

    // Relationships
    public function instance()
    {
        return $this->belongsTo("App\Instance");
    }

    public function action()
    {
        return $this->hasOne("App\Action");
    }

}

/*
trigger	id	        integer	primary
trigger	instance	integer	belongsTo
trigger	action	    integer	hasOne
trigger	type	    enum
trigger	repeatable	integer
trigger	cooldown	time
*/