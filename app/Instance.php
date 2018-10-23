<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Instance extends Model
{
    //Fillable Fields
    protected $fillable = [
        "meta",
    ];

    protected $dates = [];

    //Validation Rules
    public static $rules = [
        "meta" => "required"
    ];

    // Relationships
    public function environment()
    {
        return $this->hasOne("App\Environment");
    }

    public function material()
    {
        return $this->hasone("App\Material");
    }

}

/*
instance	id	        integer	primary
instance	environment	integer	hasOne
instance	material	integer	hasOne
instance	meta	    json
*/