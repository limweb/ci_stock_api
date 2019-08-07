<?php 

class Test_hook {

	private $CI;

	public function __construct()
	{
		$this->CI = &get_instance();

	}

	function index()
	{
		// dump('---auth----');
	}
}