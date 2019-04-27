<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Panel_model
 *
 * @author www.emsoft.net.pl
 */
class Panel_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

//    sprawdzenie czy istnieje użytkownik LOGOWANIE


    public function login($user, $haslo) {

        $sql = 'SELECT * FROM uzytkownicy WHERE login="' . $user . '" AND haslo="' . $haslo . '"AND aktywnosc=1';
        $query = $this->db->query($sql);

        if ($query->num_rows() != NULL && $query->num_rows() > 0):

            $this->session->set_userdata('login', array('id' => $query->row()->id,
                'user' => $query->row()->login,
                'rola' => $query->row()->rola,
                'aktywnosc' => $query->row()->aktywnosc));
            return TRUE;

        endif;

        return FALSE;
    }

//    wyświetlanie zleceeń


    public function work($rok) {

        $sql = 'SELECT a.*,b.status as status_1,c.partner as partner_1,'
                . 'd.sposob_przekazania as sposob_przekazania_1,e.diagnoza as diagnoza_1,'
                . 'f.rodzaj as rodzaj_1,g.przyczyna_awarii as przyczyna_awarii_1'
                . ' FROM zlecenia a '
                . 'LEFT JOIN statusy as b ON a.status=b.id '
                . 'LEFT JOIN partnerzy as c ON a.partner=c.id '
                . 'LEFT JOIN sposoby_przekazania as d ON a.sposob_przekazania=d.id '
                . 'LEFT JOIN diagnozy as e ON a.diagnoza=e.id '
                . 'LEFT JOIN rodzaje_nosnika as f ON a.nosnik=f.id '
                . 'LEFT JOIN przyczyny_awarii as g ON a.przyczyna_awarii=g.id '
                . 'WHERE EXTRACT(YEAR FROM a.data_utworzenia)=' . $rok . ' '
                . 'ORDER BY a.data_utworzenia ASC';

        $query = $this->db->query($sql);

        return $query->result();
    }

//    wyświetlanie zleceń tylko z numere Bielska

    public function workB($rok) {

        $sql = 'SELECT a.*,b.status as status_1,c.partner as partner_1,'
                . 'd.sposob_przekazania as sposob_przekazania_1,e.diagnoza as diagnoza_1,'
                . 'f.rodzaj as rodzaj_1,g.przyczyna_awarii as przyczyna_awarii_1'
                . ' FROM zlecenia a '
                . 'LEFT JOIN statusy as b ON a.status=b.id '
                . 'LEFT JOIN partnerzy as c ON a.partner=c.id '
                . 'LEFT JOIN sposoby_przekazania as d ON a.sposob_przekazania=d.id '
                . 'LEFT JOIN diagnozy as e ON a.diagnoza=e.id '
                . 'LEFT JOIN rodzaje_nosnika as f ON a.nosnik=f.id '
                . 'LEFT JOIN przyczyny_awarii as g ON a.przyczyna_awarii=g.id '
                . 'WHERE IF(' . $rok . '!="0", a.nrB!="" AND a.nrW="" AND EXTRACT(YEAR FROM a.data_utworzenia)=' . $rok . ', a.nrB!="" AND a.nrW="")';

        $query = $this->db->query($sql);

        return $query->result();
    }

    //    wyświetlanie zleceń tylko z numere Warszawy

    public function workW($rok) {

        $sql = 'SELECT a.*,b.status as status_1,c.partner as partner_1,'
                . 'd.sposob_przekazania as sposob_przekazania_1,e.diagnoza as diagnoza_1,'
                . 'f.rodzaj as rodzaj_1,g.przyczyna_awarii as przyczyna_awarii_1'
                . ' FROM zlecenia a '
                . 'LEFT JOIN statusy as b ON a.status=b.id '
                . 'LEFT JOIN partnerzy as c ON a.partner=c.id '
                . 'LEFT JOIN sposoby_przekazania as d ON a.sposob_przekazania=d.id '
                . 'LEFT JOIN diagnozy as e ON a.diagnoza=e.id '
                . 'LEFT JOIN rodzaje_nosnika as f ON a.nosnik=f.id '
                . 'LEFT JOIN przyczyny_awarii as g ON a.przyczyna_awarii=g.id '
                . 'WHERE IF(' . $rok . '!="0", a.nrB="" AND a.nrW!="" AND EXTRACT(YEAR FROM a.data_utworzenia)=' . $rok . ', a.nrB="" AND a.nrW!="")';

        $query = $this->db->query($sql);

        return $query->result();
    }

//    wyświetlanie zleceń tylko nowych

    public function workN($rok) {

        $sql = 'SELECT a.*,b.status as status_1,c.partner as partner_1,'
                . 'd.sposob_przekazania as sposob_przekazania_1,e.diagnoza as diagnoza_1,'
                . 'f.rodzaj as rodzaj_1,g.przyczyna_awarii as przyczyna_awarii_1'
                . ' FROM zlecenia a '
                . 'LEFT JOIN statusy as b ON a.status=b.id '
                . 'LEFT JOIN partnerzy as c ON a.partner=c.id '
                . 'LEFT JOIN sposoby_przekazania as d ON a.sposob_przekazania=d.id '
                . 'LEFT JOIN diagnozy as e ON a.diagnoza=e.id '
                . 'LEFT JOIN rodzaje_nosnika as f ON a.nosnik=f.id '
                . 'LEFT JOIN przyczyny_awarii as g ON a.przyczyna_awarii=g.id '
                . 'WHERE IF(' . $rok . '!="0", a.status="1" AND EXTRACT(YEAR FROM a.data_utworzenia)=' . $rok . ', a.status="1")';

        $query = $this->db->query($sql);

        return $query->result();
    }

    //    wyświetlanie zleceń tylko otwartych

    public function workO($rok) {

        $sql = 'SELECT a.*,b.status as status_1,c.partner as partner_1,'
                . 'd.sposob_przekazania as sposob_przekazania_1,e.diagnoza as diagnoza_1,'
                . 'f.rodzaj as rodzaj_1,g.przyczyna_awarii as przyczyna_awarii_1'
                . ' FROM zlecenia a '
                . 'LEFT JOIN statusy as b ON a.status=b.id '
                . 'LEFT JOIN partnerzy as c ON a.partner=c.id '
                . 'LEFT JOIN sposoby_przekazania as d ON a.sposob_przekazania=d.id '
                . 'LEFT JOIN diagnozy as e ON a.diagnoza=e.id '
                . 'LEFT JOIN rodzaje_nosnika as f ON a.nosnik=f.id '
                . 'LEFT JOIN przyczyny_awarii as g ON a.przyczyna_awarii=g.id '
                . 'WHERE IF(' . $rok . '!="0",'
                . ' a.status!=1 AND a.status!=7 AND a.status!=8  '
                . ' AND EXTRACT(YEAR FROM a.data_utworzenia)=' . $rok . ', '
                . ' a.status!=1 AND a.status!=7 AND a.status!=8)';
               

        $query = $this->db->query($sql);

        return $query->result();
    }

    //    wyświetlanie zleceń tylko zamkniętych

    public function workZ($rok) {

        $sql = 'SELECT a.*,b.status as status_1,c.partner as partner_1,'
                . 'd.sposob_przekazania as sposob_przekazania_1,e.diagnoza as diagnoza_1,'
                . 'f.rodzaj as rodzaj_1,g.przyczyna_awarii as przyczyna_awarii_1 '
                . 'FROM zlecenia a '
                . 'LEFT JOIN statusy as b ON a.status=b.id '
                . 'LEFT JOIN partnerzy as c ON a.partner=c.id '
                . 'LEFT JOIN sposoby_przekazania as d ON a.sposob_przekazania=d.id '
                . 'LEFT JOIN diagnozy as e ON a.diagnoza=e.id '
                . 'LEFT JOIN rodzaje_nosnika as f ON a.nosnik=f.id '
                . 'LEFT JOIN przyczyny_awarii as g ON a.przyczyna_awarii=g.id '
                . 'WHERE IF(' . $rok . '!="0", '
                . '(a.status=7 OR a.status=8) '
                . 'AND EXTRACT(YEAR FROM a.data_utworzenia)=' . $rok . ', '
                . 'a.status=7 OR a.status=8 )';

        $query = $this->db->query($sql);

        return $query->result();
    }

//    wyswietlanie pojedynczego zamowienia

    public function workOnly($id) {

        $sql = 'SELECT a.*,b.status as status_1,c.partner as partner_1,'
                . 'd.sposob_przekazania as sposob_przekazania_1,e.diagnoza as diagnoza_1,'
                . 'f.rodzaj as rodzaj_1,g.przyczyna_awarii as przyczyna_awarii_1'
                . ' FROM zlecenia a '
                . 'LEFT JOIN statusy as b ON a.status=b.id '
                . 'LEFT JOIN partnerzy as c ON a.partner=c.id '
                . 'LEFT JOIN sposoby_przekazania as d ON a.sposob_przekazania=d.id '
                . 'LEFT JOIN diagnozy as e ON a.diagnoza=e.id '
                . 'LEFT JOIN rodzaje_nosnika as f ON a.nosnik=f.id '
                . 'LEFT JOIN przyczyny_awarii as g ON a.przyczyna_awarii=g.id '
                . 'WHERE a.id="' . $id . '"';


        $query = $this->db->query($sql);

        return $query->row();
    }

//    dodawanie nowego zlecenia

    public function addWork() {

        $dane = array('imie' => $this->input->post('imie'),
            'nazwisko' => $this->input->post('nazwisko'),
            'adres' => $this->input->post('adres'),
            'telefon' => $this->input->post('telefon'),
            'email' => $this->input->post('email'),
            'nazwa_firmy' => $this->input->post('nazwa_firmy'),
            'adres_firmy' => $this->input->post('adres_firmy'),
            'nip' => $this->input->post('nip'),
            'telefon_firmy' => $this->input->post('telefon_firmy'),
            'email_firmy' => $this->input->post('email_firmy'),
            'dataW' => $this->input->post('dataW'),
            'dataB' => $this->input->post('dataB'),
            'status' => $this->input->post('status'),
            'nrW' => $this->input->post('nrW'),
            'nrB' => $this->input->post('nrB'),
            'nr_partnera' => $this->input->post('nr_partnera'),
            'partner' => $this->input->post('partner'),
            'sposob_przekazania' => $this->input->post('sposob_przekazania'),
            'nr_wykonawcy' => $this->input->post('nr_wykonawcy'),
            'diagnoza' => $this->input->post('diagnoza'),
            'nosnik' => $this->input->post('nosnik'),
            'opis_nosnika' => $this->input->post('opis_nosnika'),
            'haslo' => $this->input->post('haslo'),
            'akcesoria' => $this->input->post('akcesoria'),
            'przyczyna_awarii' => $this->input->post('przyczyna_awarii'),
            'dane_do_odzyskania' => $this->input->post('dane_do_odzyskania'),
            'dysk_serwisowany' => $this->input->post('dysk_serwisowany'),
            'zgoda_na_otwarcie' => $this->input->post('zgoda_na_otwarcie'),
            'zgoda_na_utylizacje' => $this->input->post('zgoda_na_utylizacje'),
            'zaswiadczenie' => $this->input->post('zaswiadczenie'),
            'skad_dowiedzial' => $this->input->post('skad_dowiedzial'),
            'nosnik_na_dane' => $this->input->post('nosnik_na_dane'),
            'opis_diagnozy' => $this->input->post('opis_diagnozy'),
            'koszt_diagnozy' => $this->input->post('koszt_diagnozy'),
            'diagnoza_oplacona' => $this->input->post('diagnoza_oplacona'),
            'link_klienta' => $this->input->post('link_klienta'),
            'koszt_odzyskania' => $this->input->post('koszt_odzyskania'),
            'odzysk_oplacony' => $this->input->post('odzysk_oplacony'),
            'klient_otrzymal' => $this->input->post('klient_otzrymal'),
            'dodatkowe_informacje' => $this->input->post('dodatkowe_informacje'),
            'edytujacy' => $this->session->userdata('login')['user']);

        $this->db->insert('zlecenia', $dane);
    }

//    edycja zlecenia


    public function editWork($id) {

        $dane = array('imie' => $this->input->post('imie'),
            'nazwisko' => $this->input->post('nazwisko'),
            'adres' => $this->input->post('adres'),
            'telefon' => $this->input->post('telefon'),
            'email' => $this->input->post('email'),
            'nazwa_firmy' => $this->input->post('nazwa_firmy'),
            'adres_firmy' => $this->input->post('adres_firmy'),
            'nip' => $this->input->post('nip'),
            'telefon_firmy' => $this->input->post('telefon_firmy'),
            'email_firmy' => $this->input->post('email_firmy'),
            'dataW' => $this->input->post('dataW'),
            'dataB' => $this->input->post('dataB'),
            'status' => $this->input->post('status'),
            'nrW' => $this->input->post('nrW'),
            'nrB' => $this->input->post('nrB'),
            'nr_partnera' => $this->input->post('nr_partnera'),
            'partner' => $this->input->post('partner'),
            'sposob_przekazania' => $this->input->post('sposob_przekazania'),
            'nr_wykonawcy' => $this->input->post('nr_wykonawcy'),
            'diagnoza' => $this->input->post('diagnoza'),
            'nosnik' => $this->input->post('nosnik'),
            'opis_nosnika' => $this->input->post('opis_nosnika'),
            'haslo' => $this->input->post('haslo'),
            'akcesoria' => $this->input->post('akcesoria'),
            'przyczyna_awarii' => $this->input->post('przyczyna_awarii'),
            'dane_do_odzyskania' => $this->input->post('dane_do_odzyskania'),
            'dysk_serwisowany' => $this->input->post('dysk_serwisowany'),
            'zgoda_na_otwarcie' => $this->input->post('zgoda_na_otwarcie'),
            'zgoda_na_utylizacje' => $this->input->post('zgoda_na_utylizacje'),
            'zaswiadczenie' => $this->input->post('zaswiadczenie'),
            'skad_dowiedzial' => $this->input->post('skad_dowiedzial'),
            'nosnik_na_dane' => $this->input->post('nosnik_na_dane'),
            'opis_diagnozy' => $this->input->post('opis_diagnozy'),
            'koszt_diagnozy' => $this->input->post('koszt_diagnozy'),
            'diagnoza_oplacona' => $this->input->post('diagnoza_oplacona'),
            'link_klienta' => $this->input->post('link_klienta'),
            'koszt_odzyskania' => $this->input->post('koszt_odzyskania'),
            'odzysk_oplacony' => $this->input->post('odzysk_oplacony'),
            'klient_otrzymal' => $this->input->post('klient_otzrymal'),
            'dodatkowe_informacje' => $this->input->post('dodatkowe_informacje'),
            'edytujacy' => $this->session->userdata('login')['user']);

        $this->db->where('id', $id);
        $this->db->update('zlecenia', $dane);
    }

//    usuwanie zlecenia

    public function deleteWork($id) {

        $this->db->delete('zlecenia', array('id' => $id));
    }

//    wyświetlanie uzytkowników


    public function workUzytkownicy() {

        $sql = 'SELECT a.*,b.rola as status , c.nazwa as stan '
                . 'FROM uzytkownicy as a '
                . 'LEFT JOIN role as b ON a.rola=b.id '
                . 'LEFT JOIN aktywnosc c ON a.aktywnosc=c.id ';

        $query = $this->db->query($sql);

        return $query->result();
    }

    //    wyświetlanie aktywnych i nie aktywnych uzytkowników


    public function workUser($user) {

        $sql = 'SELECT a.*,b.rola as status , c.nazwa as stan '
                . 'FROM uzytkownicy as a '
                . 'LEFT JOIN role as b ON a.rola=b.id '
                . 'LEFT JOIN aktywnosc c ON a.aktywnosc=c.id '
                . 'WHERE a.aktywnosc=' . $user;

        $query = $this->db->query($sql);

        return $query->result();
    }

//    dodawanie nowego użytkownika

    public function addNewUser() {

        $data = array('imie' => $this->input->post('imie'),
            'nazwisko' => $this->input->post('nazwisko'),
            'miejscowosc' => $this->input->post('miejscowosc'),
            'kod_pocztowy' => $this->input->post('kod_pocztowy'),
            'ulica' => $this->input->post('ulica'),
            'nr_lokalu' => $this->input->post('nr_lokalu'),
            'email' => $this->input->post('email'),
            'telefon' => $this->input->post('telefon'),
            'login' => $this->input->post('login'),
            'haslo' => md5($this->input->post('haslo')),
            'rola' => $this->input->post('rola'),
            'aktywnosc' => ($this->input->post('aktywnosc') ? "1" : "2"),
            'edytujacy' => $this->session->userdata('login')['user']);
        $this->db->insert('uzytkownicy', $data);
    }

//    edytowanie uzytkownika

    public function editUser($id) {

        $sql = 'SELECT * FROM uzytkownicy WHERE id="'.$id.'"';
        $query = $this->db->query($sql);
        $md5 = $query->row()->haslo;

        if ($this->isValidMd5($this->input->post('modal_haslo'))):
            $haslo = $md5;
        else:
            $haslo = md5($this->input->post('modal_haslo'));
        endif;


        $data = array('imie' => $this->input->post('modal_imie'),
            'nazwisko' => $this->input->post('modal_nazwisko'),
            'miejscowosc' => $this->input->post('modal_miejscowosc'),
            'kod_pocztowy' => $this->input->post('modal_kod_pocztowy'),
            'ulica' => $this->input->post('modal_ulica'),
            'nr_lokalu' => $this->input->post('modal_nr_lokalu'),
            'email' => $this->input->post('modal_email'),
            'telefon' => $this->input->post('modal_telefon'),
            'login' => $this->input->post('modal_login'),
            'haslo' => $haslo,
            'rola' => $this->input->post('modal_rola'),
            'aktywnosc' => ($this->input->post('modal_aktywnosc') ? "1" : "2"),
            'edytujacy' => $this->session->userdata('login')['user']);

        $this->db->where('id', $id);
        $this->db->update('uzytkownicy', $data);
    }

//    wyswietlanie statsusu

    public function workStatus() {

        $sql = 'SELECT * FROM statusy';
        $query = $this->db->query($sql);
        return $query->result();
    }

//    insert statusu


    public function addStatus() {

        $data = array('status' => $this->input->post('status'),
            'edytujacy' => $this->session->userdata('login')['user']);

        $this->db->insert('statusy', $data);
    }

//    delete status


    public function deleteStatus($id) {

        $sql = 'SELECT * FROM zlecenia WHERE status="' . $id . '"';
        $query = $this->db->query($sql);

        if ($query->num_rows() < 1 || $query->num_rows() == NULL):

            $this->db->delete('statusy', array('id' => $id));

        endif;
    }

//    edytowanie statusu

    public function editStatus($id) {

        $data = array('status' => $this->input->post('nazwa_statusu'),
            'edytujacy' => $this->session->userdata('login')['user']);
        $this->db->where('id', $id);
        $this->db->update('statusy', $data);
    }

//    wyświetlanie sposobów dostarcznia nośnika

    public function workSposob() {

        $sql = 'SELECT * FROM sposoby_przekazania';
        $query = $this->db->query($sql);
        return $query->result();
    }

//    dodawanie nowego sposobu dostarczenia nośnika

    public function addSposob() {

        $data = array('sposob_przekazania' => $this->input->post('sposob'),
            'edytujacy' => $this->session->userdata('login')['user']);
        $this->db->insert('sposoby_przekazania', $data);
    }

//    usuwanie nowego sposobu dostarczenia nośnika

    public function deleteSposob($id) {

        $sql = 'SELECT * FROM zlecenia WHERE sposob_przekazania="' . $id . '"';
        $query = $this->db->query($sql);

        if ($query->num_rows() < 1 || $query->num_rows() == NULL):

            $this->db->delete('sposoby_przekazania', array('id' => $id));

        endif;
    }

//    edytowanie sposobu dostarczenia

    public function editSposob($id) {

        $data = array('sposob_przekazania' => $this->input->post('nazwa_sposobu'),
            'edytujacy' => $this->session->userdata('login')['user']);
        $this->db->where('id', $id);
        $this->db->update('sposoby_przekazania', $data);
    }

//    wyświetlanie partnerow

    public function workPartner() {

        $sql = 'SELECT * FROM partnerzy';
        $query = $this->db->query($sql);
        return $query->result();
    }

//    dodawanie partnerow

    public function addPartner() {

        $data = array('partner' => $this->input->post('partner'),
            'edytujacy' => $this->session->userdata('login')['user']);
        $this->db->insert('partnerzy', $data);
    }

//    usuwanie partnerów

    public function deletePartner($id) {

        $sql = 'SELECT * FROM zlecenia WHERE partner="' . $id . '"';
        $query = $this->db->query($sql);

        if ($query->num_rows() < 1 || $query->num_rows() == NULL):

            $this->db->delete('partnerzy', array('id' => $id));

        endif;
    }

//    edytownie parnerow

    public function editPartner($id) {

        $data = array('partner' => $this->input->post('nazwa_partnera'),
            'edytujacy' => $this->session->userdata('login')['user']);
        $this->db->where('id', $id);
        $this->db->update('partnerzy', $data);
    }

//    wyświetlanie rodzjów nośnika

    public function workNosnik() {

        $sql = 'SELECT * FROM rodzaje_nosnika';
        $query = $this->db->query($sql);
        return $query->result();
    }

//    dodawanie rodzajów nośnika


    public function addNosnik() {

        $data = array('rodzaj' => $this->input->post('nosnik'),
            'edytujacy' => $this->session->userdata('login')['user']);
        $this->db->insert('rodzaje_nosnika', $data);
    }

//    usuwanie nośnika

    public function deleteNosnik($id) {

        $sql = 'SELECT * FROM zlecenia WHERE nosnik="' . $id . '"';
        $query = $this->db->query($sql);

        if ($query->num_rows() < 1 || $query->num_rows() == NULL):

            $this->db->delete('rodzaje_nosnika', array('id' => $id));

        endif;
    }

//    edytowanie nosnika

    public function editNosnik($id) {

        $data = array('rodzaj' => $this->input->post('nazwa_nosnika'),
            'edytujacy' => $this->session->userdata('login')['user']);
        $this->db->where('id', $id);
        $this->db->update('rodzaje_nosnika', $data);
    }

//    wyświetlanie rodzajów awarii

    public function workAwaria() {

        $sql = 'SELECT * FROM przyczyny_awarii';
        $query = $this->db->query($sql);
        return $query->result();
    }

//    dodawanie przyczyn awarii

    public function addAwaria() {

        $data = array('przyczyna_awarii' => $this->input->post('awaria'),
            'edytujacy' => $this->session->userdata('login')['user']);
        $this->db->insert('przyczyny_awarii', $data);
    }

//    usuwanie przyczyn awarii

    public function deleteAwaria($id) {

        $sql = 'SELECT * FROM zlecenia WHERE przyczyna_awarii="' . $id . '"';
        $query = $this->db->query($sql);

        if ($query->num_rows() < 1 || $query->num_rows() == NULL):

            $this->db->delete('przyczyny_awarii', array('id' => $id));

        endif;
    }

//    edytowanie przyczyn awarii

    public function editAwaria($id) {

        $data = array('przyczyna_awarii' => $this->input->post('nazwa_awarii'),
            'edytujacy' => $this->session->userdata('login')['user']);
        $this->db->where('id', $id);
        $this->db->update('przyczyny_awarii', $data);
    }

//    wyswietlanie diagnoz


    public function workDiagnoza() {

        $sql = 'SELECT * FROM diagnozy';
        $query = $this->db->query($sql);
        return $query->result();
    }

//    dodawanie diagnoz

    public function addDiagnoza() {

        $dane = array('diagnoza' => $this->input->post('diagnoza'),
            'edytujacy' => $this->session->userdata('login')['user']);
        $this->db->insert('diagnozy', $dane);
    }

//    usuwanie diagnoz

    public function deleteDiagnoza($id) {

        $sql = 'SELECT * FROM zlecenia WHERE diagnoza="' . $id . '"';
        $query = $this->db->query($sql);

        if ($query->num_rows() < 1 || $query->num_rows() == NULL):

            $this->db->delete('diagnozy', array('id' => $id));

        endif;
    }

//    edytowanie diagnoz

    public function editDiagnozy($id) {

        $dane = array('diagnoza' => $this->input->post('nazwa_diagnozy'),
            'edytujacy' => $this->session->userdata('login')['user']);
        $this->db->where('id', $id);
        $this->db->update('diagnozy', $dane);
    }

//     wyświetlanie roli użytkownika

    public function workRola() {

        $sql = 'SELECT * FROM role';
        $query = $this->db->query($sql);
        return $query->result();
    }

    // sprawdzenia hasła czy md5

    private function isValidMd5($md5) {
        return preg_match('/^[a-f0-9]{32}$/', $md5);
    }

}
