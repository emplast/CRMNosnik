<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author piotr
 */
class User extends CI_Controller {

//    widok użytkownicy lista

    public function index() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $users = $dane->workUzytkownicy();
            $role = $dane->workRola();

            if ($this->input->post('user')):
                $users = $dane->workUser($this->input->post('user'));
            endif;



            $data['content'] = $this->load->view('panel/user_panel', array('users' => $users,
                'role' => $role)
                    , TRUE);
            $this->load->view('panel', $data);

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    widok dodaj nowego użytkownika

    public function newUser() {

        $dane= new Panel_model();
        
        
        if ($this->session->userdata('login')['user']):

            $role=$dane->workRola();
            $data['content'] = $this->load->view('panel/newUser_panel',
                    array('role'=>$role)
                    , TRUE);
            $this->load->view('panel', $data);

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    dodawanie nowego uzytkownika

    public function addNewUser() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $dane->addNewUser();
            redirect('index.php/User/index');


        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjście z formularza edytowania użytkownika

    public function editUser() {
        
        
        if ($this->session->userdata('login')['user']):

        $dane = new Panel_model();
        $id = $this->input->post('userId');
        $dane->editUser($id);
        redirect('index.php/User/index');
        
         else:
            redirect('index.php/Welocome.index');

        endif;
    }
}
