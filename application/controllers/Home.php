<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
            $data['title'] = 'hello world';
            $this->load->helper('url');
            redirect('home/test2');
            $this->load->view('index/index',$data);
	}
        
        public function test2(){
            echo 'I am test2';
        }
}
