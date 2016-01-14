<?php

use Carbon\Carbon;

class Post extends BaseModel
{
    protected $table = 'posts';

  
    protected $fillable = array('title', 'subtitle', 'content', 'image');

    public static $rules = array(
    'title'      => 'required|max:100',
    'subtitle'   => 'required|max:300',
    'content'    => 'required|max:10000',
    'image'      => 'image'
	);

	public function getCreatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
	}

	public function setTitleAttribute($value)
	{
		$this->attributes['title'] = $value;
		// youcan use this for catgories that to not appear in the db, ie slugs
		$this->attributes['slug'] = Str::slug($value);
	}
}



