<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wise extends Application
{

	function __construct()
	{
		parent::__construct();
	}
    
		function Bingo() {
			$this->data['pagebody'] = 'justone'; 
			
			$record = $this->quotes->get(6);
			
			$this->data['mug'] = $record['mug'];
			$this->data['what'] = $record['what'];
			$this->data['who'] = $record['who'];
			
			$this->render();
		}
}
