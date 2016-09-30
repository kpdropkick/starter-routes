<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		$tmp = $source[0];
		$authors[] = array ('who' => $tmp['who'], 'mug' => $tmp['mug'], 'href' => $tmp['where'], 'what' => $tmp['what']);
		$this->data['authors'] = $authors;
        $this->render();
	}

}
