<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cb_test extends MY_Controller{
	public $config;
	public $cb_instance;

	function __construct(){
		parent::__construct();
		
		/* Declare $default_ip, $bucket, $persistant before run this file */
		
		$config = array(
			'host' => $default_ip,
			'username' => '',
			'password' => '',
			'bucket' => $bucket,
			'persistant' => $persistant
		);

		/*Load library and initialize connection*/
		$this->load->library('Couch', $config);
	}

	/*
	 * Input access 3 params
	 * URL: http://domain/cb_test/get_user
	 */
	function get_user($key1 = '', $key2 = 'b', $key3 = 'a'){
		$result = $this->couch->get($key1);
		$result2 = $this->couch->get($key2);
		$result3 = $this->couch->get($key3);

		var_dump($result, $result2, $result3);

	}
}