<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //Fillable Fields
    protected $fillable = [];

    protected $dates = [];

    // Validation rules
    public static $rules = [
        "name" => "required",
        "description" => "required",
        "polygons" => "required|numeric",
        "meta" => "required"
    ];

    // Relationships
    public function instances()
    {
        return $this->belongsToMany("App\Instance");
    }

}

/*
material	id	        integer	primary
material	name	    string	required
material	description	string	required
material	polygons	integer	required
material	meta	    json	required
material	instances	array	belongsToMany
*/
