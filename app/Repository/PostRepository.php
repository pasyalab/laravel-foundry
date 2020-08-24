<?php
namespace App\Repository;

use App\Post;
use App\Postmeta;

class PostRepository {

	public static function all()
	{
		$posts = Post::with('postmeta')->get();
		return $posts;
	}

	public function id()
	{
		
	}
}
