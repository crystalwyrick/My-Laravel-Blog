<?php

class Post extends Eloquent
{
    protected $table = 'posts';

  
    protected $fillable = array('title', 'subtitle', 'content', 'image');

    public static $rules = array(
    'title'      => 'required|max:100',
    'subtitle'   => 'required|max:300',
    'content'    => 'required|max:10000',
    'image'      => 'image'
	);
}



