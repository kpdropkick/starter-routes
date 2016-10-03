<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
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
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

	public function shucks(){
		// View = Justone
		$this->data['pagebody'] = 'justone';

		// get the quote #2
		$source = $this->quotes->get(2);

		// populate the data
		$this->data['who'] = $source['who'];
		$this->data['mug'] = $source['mug'];
		$this->data['what'] = $source['what'];

		$this->render();
	}

}
