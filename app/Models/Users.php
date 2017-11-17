<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;

class Users extends EloquentUser
{
    /**
	* The Eloquent posts model name
	*
	* @var string type
	*/
	protected static $postsModel = 'App\Models\Post';
	
	/*
	* The Eloquent comment model name
	*
	* @var string type
	*/
	protected static $commentsModel = 'App\Models\Comment';
	
	/**
	* Return the posts relationship
	*
	// * return \Illuminate\Database\Eloquent\Reations\HasMany
	*/
	
	public function posts()
	{
		return $this->hasMany(static::$postsModel, 'user_id');
	}
	
	/**
	* Return the comments relationship
	*
	// * return \Illuminate\Database\Eloquent\Reations\HasMany
	*/
	
	public function comments()
	{
		return $this->hasMany(static::$commentsModel, 'user_id');
	}
}
