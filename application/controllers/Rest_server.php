<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_server extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');

        $this->load->view('rest_server');
    }
	public function get()
	{
		$client= new \GuzzleHttp\Client();
		$res=$client->request('GET','http://www.baidu.com');
		echo $res->getBody();
	}
}
