<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends Application
{

	function __construct()
	{
		parent::__construct();
	}

		function index() {
			$this->data['pagebody'] = 'justone';
			
			$record = $this->quotes->get(5);
			
			$this->data['mug'] = $record['mug'];
			$this->data['what'] = $record['what'];
			$this->data['who'] = $record['who'];
			
			$this->render();
		}

}
