<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Panel
 *
 * @author www.emsoft.net.pl
 */
class Panel extends CI_Controller{
    
    public function index()
    {
        if($this->session->userdata('login')['user']):
            
        
        $this->load->model('newDatabase_model');
        $dane=new NewDatabase_model();
        $data=array('content'=>NULL);
      $this->load->view('panel',$data); 
      
      else:
          redirect('index.php/Welcome/index');
      endif;
       
        
    }
    
//    wylogowanie z secjii
    
    public function logout(){
        
        $this->session->unset_userdata('login');
        $this->load->view('logout');
        
    }
   
}
