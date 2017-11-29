<?php

namespace App\Services;

use Iluminate\View\Factory;
use Sentinel;
use App\Models\Post;

class CommentService
{
	protected $view;
	
	public function __construct(Factory $view)
	{
		$this->view = $view;
	}
	
	public function pendingComments()
	{
		$user_id = Sentinel::getUser()->id;
		
		$posts = Post::where('user_id', $user_id)->count();
		
		return $posts;
	}
}