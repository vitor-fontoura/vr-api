<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    //Fillable Fields
    protected $fillable = [
        "name",
        "description",
        "meta"
    ];

    protected $dates = [];

    // Validation rules
    public static $rules = [
        "name" => "required",
        "description" => "required",
        "meta" => "required",
    ];

    // Relationships
    public function scenario()
    {
        return $this->hasOne("App\Scenario");
    }

    public function user()
    {
        return $this->hasOne("App\User");
    }

    public function instances()
    {
        return $this->belongsToMany("App\Instance");
    }

}

/*
environment	id	        integer	primary
environment	scenario	integer	hasOne
environment	user	    integer	hasOne
environment	name	    string
environment	description	string
environment	meta	    json
environment	url	        string
environment	instances	array	belongsToMany
*/