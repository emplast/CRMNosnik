<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Work
 *
 * @author piotr
 */
class Work extends CI_Controller {

//    wyświetlanie widoku listy zlecen

    public function index() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $zlecenia = $dane->work(date('Y'));



            if ($this->input->post('stan') == "1"):

                $zleceniaB = $dane->workB($this->input->post('rok'));
                $wyświetl = array('zlecenia' => $zleceniaB);

            elseif ($this->input->post('stan') == "2"):

                $zleceniaW = $dane->workW($this->input->post('rok'));
                $wyświetl = array('zlecenia' => $zleceniaW);

            elseif ($this->input->post('stan') == "3"):

                $zleceniaN = $dane->workN($this->input->post('rok'));
                $wyświetl = array('zlecenia' => $zleceniaN);

            elseif ($this->input->post('stan') == "4"):

                $zleceniaO = $dane->workO($this->input->post('rok'));
                $wyświetl = array('zlecenia' => $zleceniaO);

            elseif ($this->input->post('stan') == "5"):

                $zleceniaZ = $dane->workZ($this->input->post('rok'));
                $wyświetl = array('zlecenia' => $zleceniaZ);

            else:
                (!$this->input->post('lata')) ?
                                $wyświetl = array('zlecenia' => $zlecenia) :
                                $wyświetl = array('zlecenia' => $dane->work($this->input->post('lata')));

            endif;
            $data['content'] = $this->load->view('panel/work_panel', $wyświetl, TRUE);

            $this->load->view('panel', $data);

        else:
            redirect('index.php/Welcome/index');
        endif;
    }

//    wyświetlanie widoku nowe zlecenia

    public function newWork() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $statusy = $dane->workStatus();
            $partnerzy = $dane->workPartner();
            $sposoby = $dane->workSposob();
            $diagnozy = $dane->workDiagnoza();
            $nosniki = $dane->workNosnik();
            $przyczyny = $dane->workAwaria();


            $data['content'] = $this->load->view('panel/newWork_panel', array('statusy' => $statusy,
                'partnerzy' => $partnerzy,
                'sposoby' => $sposoby,
                'diagnozy' => $diagnozy,
                'nosniki' => $nosniki,
                'przyczyny' => $przyczyny), TRUE);
            $this->load->view('panel', $data);

        else:
            redirect('index.php/Welcome/index');
        endif;
    }

//    widok edytowania zlecenia

    public function edit() {

        if ($this->session->userdata('login')['user']):

            $id = $this->uri->segment(3);

            $dane = new Panel_model();
            $statusy = $dane->workStatus();
            $partnerzy = $dane->workPartner();
            $sposoby = $dane->workSposob();
            $diagnozy = $dane->workDiagnoza();
            $nosniki = $dane->workNosnik();
            $przyczyny = $dane->workAwaria();
            $zlecenie = $dane->workOnly($id);

            $data['content'] = $this->load->view('panel/editWork_panel', array('statusy' => $statusy,
                'partnerzy' => $partnerzy,
                'sposoby' => $sposoby,
                'diagnozy' => $diagnozy,
                'nosniki' => $nosniki,
                'przyczyny' => $przyczyny,
                'zlecenie' => $zlecenie)
                    , TRUE);
            $this->load->view('panel', $data);


        else:
            redirect('index.php/Welcome/index');
        endif;
    }

//     wyjscie z formularza dodawania nowego zlecenia


    public function addWork() {

        if ($this->session->userdata('login')['user']):

            $dane = new Panel_model();
            $dane->addWork();
            redirect('index.php/Work/index');

        else:
            redirect('index.php/Welcome/index');
        endif;
    }

//    wyjcie z formularza edytowania zlecenia

    public function editWork() {

        if ($this->session->userdata('login')['user']):

            $id = $this->input->post('idWork');
            $dane = new Panel_model();
            $dane->editWork($id);
            redirect('index.php/Work/edit/' . $id);

        else:
            redirect('index.php/Welcome/index');
        endif;
    }

//    usuwanie zlecenia

    public function deleteWork() {
        
        if ($this->session->userdata('login')['user']):

        $id = $this->input->post('idWork1');
        $dane = new Panel_model();
        $dane->deleteWork($id);
        redirect('index.php/Work/index');
        
        
        else:
            redirect('index.php/Welcome/index');
        endif;
    }

}
