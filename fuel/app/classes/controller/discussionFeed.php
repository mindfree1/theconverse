<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.1
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */

/**
 * 
 */

class Controller_discussionFeed extends \Controller_Template
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public $template = 'templates/mainDiscussionFeed/template';
	public function action_index()
	{
		$data = array();
		$feeds = array(
			'bbc' => 'feeds.bbci.co.uk/news/world/rss.xml',
			'politics' => 'www.politico.com/rss/politics08.xml',
			'stats' => 'http://www.abs.gov.au/AUSSTATS/wmdata.nsf/activerss/headline_rss/$File/headline_rss.xml'
		);

		//objs to pass over the feeds to the model

		$rss = Model_mainDiscussionFeed::runcurl($feeds['bbc']);
		$rss = Model_mainDiscussionFeed::feedkit($rss);

		//$data['feed'] = array('list' => $rss, 'source' => 'via ' .$feeds['bbc']);

		$data['feed'] = array('list' => $rss);

		$this->template->title = 'Discussion Topics';
		$this->template->content = View::forge('mainDiscussionFeed/mainDiscussionFeed', $data, false);
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
