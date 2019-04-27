<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Baza
 *
 * @author piotr
 */
class Baza extends CI_Controller {

    public function index() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $statusy = $dane->workStatus();
            $sposoby = $dane->workSposob();
            $partnerzy = $dane->workPartner();
            $nosniki = $dane->workNosnik();
            $awarie = $dane->workAwaria();
            $diagnozy = $dane->workDiagnoza();


            $data = array('content' => $this->load->view('panel/baza_panel', array('statusy' => $statusy,
                    'sposoby' => $sposoby,
                    'partnerzy' => $partnerzy,
                    'nosniki' => $nosniki,
                    'awarie' => $awarie,
                    'diagnozy' => $diagnozy), TRUE));
            $this->load->view('panel', $data);


        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjscie z formularza dodawania statusów

    public function addStatus() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $dane->addStatus();
            redirect('index.php/Baza/index');


        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjscie z formularza usuń status sprawy

    public function deleteStatus() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $id = $this->input->post('id_status');
            $dane->deleteStatus($id);
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//  wyjscie z formularza edytuj status sprawy

    public function editStatus() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $id = $this->input->post('id_status1');
            $dane->editStatus($id);
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjscie z formularza dodawania sposobów dostarczenia nośnika

    public function addSposob() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $dane->addSposob();
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjście z formularza usuwania sposobu dostarczenia nośnika

    public function deleteSposob() {

        if ($this->session->userdata('login')['user']):

            $id = $this->input->post('id_sposobu');
            $dane = new Panel_model();
            $dane->deleteSposob($id);
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//  wyjście z formularza edytownia sposobu dostarczenia nośnika

    public function editSposob() {

        if ($this->session->userdata('login')['user']):

            $id = $this->input->post('id_sposobu1');
            $dane = new Panel_model();
            $dane->editSposob($id);
            redirect('index.php/Baza/index');



        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//  wyjscie z formularza dodawania nowego partnera


    public function addPartner() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $dane->addPartner();
            redirect('index.php/Baza/index');


        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjście z formularza usuwania partnera

    public function deletePartner() {


        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $id = $this->input->post('id_partnera');
            $dane->deletePartner($id);
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyście z formularza edytowania partnera

    public function editPartner() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $id = $this->input->post('id_partnera1');
            $dane->editPartner($id);
            redirect('index.php/Baza/index');


        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjście z formularza dodawania rodzaju nośnika

    public function addNosnik() {


        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $dane->addNosnik();
            redirect('index.php/Baza/index');


        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjście z formularza usuwania rodzaju nośnika


    public function deleteNosnik() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $id = $this->input->post('id_nosnika');
            $dane->deleteNosnik($id);
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjscie z formularza edytowania rodzajów nośnika

    public function editNosnik() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $id = $this->input->post('id_nosnika1');
            $dane->editNosnik($id);
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjscie z formularza dodawania pzryczyn awarii

    public function addAwaria() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $dane->addAwaria();
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyście z formularza usuwania pzryczyn awarii


    public function deleteAwaria() {

        if ($this->session->userdata('login')['user']):


            $dane = new Panel_model();
            $id = $this->input->post('id_awarii');
            $dane->deleteAwaria($id);
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjście z formularza edytowania przyczyn awarii

    public function editAwaria() {


        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $id = $this->input->post('id_awarii1');
            $dane->editAwaria($id);
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjscie z formularza dodawania diagnozy

    public function addDiagnoza() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $dane->addDiagnoza();
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//    wyjscie z formularza usuwania diagnozy


    public function deleteDiagnoza() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $id = $this->input->post('id_diagnozy');
            $dane->deleteDiagnoza($id);
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

//     wyjście z formularza edytowania diagnozy


    public function editDiagnoza() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $id = $this->input->post('id_diagnozy1');
            $dane->editDiagnozy($id);
            redirect('index.php/Baza/index');

        else:
            redirect('index.php/Welocome.index');

        endif;
    }

}
