<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
                $this->load->view('welcome');
	}
        
//        wyjscie z formularza logowania
        
    public function login(){
        
        $user=$this->input->post('part_0');
        $haslo= md5($this->input->post('part_1'));
        
        $dane= new Panel_model();
        
        if($dane->login($user, $haslo)):
        
        
        redirect('index.php/Panel/index');
        else:
            
            redirect('index.php/Welcome/index');
            
        endif;
        
    }
}
