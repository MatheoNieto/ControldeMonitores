<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class E404 extends CI_Controller {
      
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        
        $this->load->view('error404'); 
            
        
            
    } 
}
