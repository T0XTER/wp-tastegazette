<?php

class ShownPosts
{
	static $shownPosts = [];

	public static function addPostId($postId)
	{
		self::$shownPosts[(int)$postId] = true;
		//var_dump(self::$shownPosts, $postId);
	}

	public static function getPostIds()
	{
		return array_keys(self::$shownPosts);
	}
}