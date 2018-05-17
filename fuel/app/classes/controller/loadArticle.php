<?php

class Controller_loadArticle extends Controller
{
	
	public function action_index()
	{
		//$loadarticle = 'views/mainDiscussionFeed/article-full-view';\]
		$view = View::forge('articleFullView/article-full-view');
		//$view->content = View::forge('articleFullView/article-full-view');
		return $view;
	}
}

?>