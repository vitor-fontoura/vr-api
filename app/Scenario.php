<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Scenario extends Model
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
    public function environments()
    {
        return $this->belongsToMany("App\Environment");
    }

}

/*
scenario	id	            integer	primary
scenario	name	        string	required
scenario	description	    string	required
scenario	meta	        json    required
scenario	environments	array	belongsToMany
*/