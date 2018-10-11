<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $table = 'filters';

    protected $fillable = ['parent_id','name','type', 'created_by', 'modified_by'];


	public $timestamps = false;
 
	public function rest_types()
    {
        return $this->hasMany('App\Types', 'id');
    }
	public function children()
    {
        return $this->hasMany('App\Types', 'parent_id');
    }
	public static function getTypeInfo($id) 
    { 
		return Types::find($id);
	}
	public function restaurants()
    {
        return $this->belongsToMany('App\Restaurants','filters_restaurant','filters_id','restaurant_id');
    }
}
