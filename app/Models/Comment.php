<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['use_id','post_id','content'];
	
	/**
	* The Eloquent users model name
	*
	* @var string type
	*/
	protected static $usersModel = 'App\Models\Users';
	
	/*
	* The Eloquent posts model name
	*
	* @var string type
	*/
	protected static $postsModel = 'App\Models\Post';
	
	/**
	* Return the users relationship
	*
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/
	
	public function user()
	{
		return $this->belongsTo(static::$usersModel, 'user_id');
	}
	
	/**
	* Return the comments relationship
	*
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/
	
	public function post()
	{
		return $this->belongsTo(static::$postsModel, 'post_id');
	}
	
	/**
	* Save Comment
	*
    * @param array $comment
	* @return void
	*/
	public function saveComment($comment=array())
	{
		return $this->fill($comment)->save();
	}
	
	/**
	* Update comment
	*
    * @param array $comment
	* @return void
	*/
	public function updateComment($comment=array())
	{
		return $this->update($comment);
	}
}
