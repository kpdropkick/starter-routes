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
		$this->data['pagebody'] = 'justone';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->get(1);
		$this->data['who'] = $source['who'];
		$this->data['mug'] = $source['mug'];
		$this->data['what'] = $source['what'];

        $this->render();
	}

	public function zzz(){

		// View = Justone
		$this->data['pagebody'] = 'justone';

		// get the quote #2
		$source = $this->quotes->get(1);

		// populate the data
		$this->data['who'] = $source['who'];
		$this->data['mug'] = $source['mug'];
		$this->data['what'] = $source['what'];

		$this->render();
	}

	public function gimme($id){

		// View = Justone
		$this->data['pagebody'] = 'justone';

		// get the quote #3. id grabs the quote #3.
		$source = $this->quotes->get($id);

		// populate the data
		$this->data['who'] = $source['who'];
		$this->data['mug'] = $source['mug'];
		$this->data['what'] = $source['what'];

		$this->render();
	}
}
