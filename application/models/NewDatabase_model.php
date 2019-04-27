<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewDatabase_model
 *
 * @author www.emsoft.net.pl
 */
class NewDatabase_model extends CI_Model{
   
    public function __construct() {
        parent::__construct();
        $this->newDataBase();
    }
    
    public function newDataBase(){
        
        
        
//        utworzenie bazy statusy
        
        $sql='CREATE TABLE IF NOT EXISTS statusy '
                . '( id INT(6) NOT NULL AUTO_INCREMENT COMMENT "id",'
                . 'status VARCHAR(250) COMMENT "nazwa statusu",'
                . 'data_utworzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP, '
                . 'data_edycji TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,'
                . 'edytujacy VARCHAR(100) COMMENT "login edytujacego",'
                . 'PRIMARY KEY (id))';
        
        $query=$this->db->query($sql);
        
//        utworzenie bazy rodzaje_nośnika
        
        $sql='CREATE TABLE IF NOT EXISTS rodzaje_nosnika '
                . '( id INT(6) NOT NULL AUTO_INCREMENT COMMENT "id",'
                . 'rodzaj VARCHAR(250) COMMENT "rodzaj nośnika",'
                . 'data_utworzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP, '
                . 'data_edycji TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,'
                . 'edytujacy VARCHAR(100) COMMENT "login edytujacego",'
                . 'PRIMARY KEY (id))';
        
        $query=$this->db->query($sql);
        
//        utworzenie bazy sposoby_przekazania
        
        
        $sql='CREATE TABLE IF NOT EXISTS sposoby_przekazania '
                . '( id INT(6) NOT NULL AUTO_INCREMENT COMMENT "id",'
                . 'sposob_przekazania VARCHAR(250) COMMENT "sposob przekazania",'
                . 'data_utworzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP, '
                . 'data_edycji TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,'
                . 'edytujacy VARCHAR(100) COMMENT "login edytujacego",'
                . 'PRIMARY KEY (id))';
        
        $query=$this->db->query($sql);
        
        
//        utworzenie bazy przyczyny_awarii
        
        
        $sql='CREATE TABLE IF NOT EXISTS przyczyny_awarii '
                . '( id INT(6) NOT NULL AUTO_INCREMENT COMMENT "id",'
                . 'przyczyna_awarii VARCHAR(250) COMMENT "przyczyna awarii",'
                . 'data_utworzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP, '
                . 'data_edycji TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,'
                . 'edytujacy VARCHAR(100) COMMENT "login edytujacego",'
                . 'PRIMARY KEY (id))';
        
        $query=$this->db->query($sql);
        
        
//        utworzenie bazy partnerzy
        
        
        $sql='CREATE TABLE IF NOT EXISTS partnerzy '
                . '( id INT(6) NOT NULL AUTO_INCREMENT COMMENT "id",'
                . 'partner VARCHAR(250) COMMENT "partner",'
                . 'data_utworzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP, '
                . 'data_edycji TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,'
                . 'edytujacy VARCHAR(100) COMMENT "login edytujacego",'
                . 'PRIMARY KEY (id))';
        
        $query=$this->db->query($sql);
        
     
        
//        utworzenie bazy diagnozy
        
        
        $sql='CREATE TABLE IF NOT EXISTS diagnozy '
                . '( id INT(6) NOT NULL AUTO_INCREMENT COMMENT "id",'
                . 'diagnoza VARCHAR(250) COMMENT "diagnoza",'
                . 'data_utworzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP, '
                . 'data_edycji TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,'
                . 'edytujacy VARCHAR(100) COMMENT "login edytujacego",'
                . 'PRIMARY KEY (id))';
        
        $query=$this->db->query($sql);
        
        
//        utworzenie bazy role
        
        $sql='CREATE TABLE IF NOT EXISTS role '
                . '( id INT(6) NOT NULL AUTO_INCREMENT COMMENT "id",'
                . 'rola VARCHAR(250) COMMENT "rola uzytkownika",'
                . 'data_utworzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP, '
                . 'data_edycji TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,'
                . 'edytujacy VARCHAR(100) COMMENT "login edytujacego",'
                . 'PRIMARY KEY (id))';
        
        $query=$this->db->query($sql);
        
        
        
//        insert do bazy role
        
        $sql='SELECT * FROM role';
        $dane=array(array('rola'=>'Administracja','edytujacy'=>'admin'),array('rola'=>'Obsługa','edytujacy'=>'admin'));
        $query=$this->db->query($sql);
        
        if($query->num_rows()==0 || $query->num_rows()==NULL):
            $this->db->insert_batch('role',$dane);
        endif;


//          utworzenie bazy atkywnosc

        $sql='CREATE TABLE IF NOT EXISTS aktywnosc '
                . '( id INT(6) NOT NULL AUTO_INCREMENT COMMENT "id",'
                . 'nazwa VARCHAR(250) COMMENT "rola uzytkownika",'
                . 'data_utworzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP, '
                . 'data_edycji TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,'
                . 'edytujacy VARCHAR(100) COMMENT "login edytujacego",'
                . 'PRIMARY KEY (id))';
        
        $query=$this->db->query($sql);
        
//        insert do bazy aktywnosc
        
        $sql="SELECT * FROM aktywnosc";
        
        $query=$this->db->query($sql);
        if($query->num_rows()==NULL || $query->num_rows()==0):
            
            $data=array(array('nazwa'=>'aktywna/y','edytujacy'=>'admin'),array('nazwa'=>'nieaktywna/y','edytujacy'=>'admin'));
            
            $this->db->insert_batch('aktywnosc',$data);
        endif;
        
        
        
//        utworzenie bazy uzytkownicy
        
        
        $sql='CREATE TABLE IF NOT EXISTS uzytkownicy '
                . '( id INT(6) NOT NULL AUTO_INCREMENT COMMENT "id",'
                . 'imie VARCHAR(45) COMMENT "imie uzytkownika",'
                . 'nazwisko VARCHAR(45) COMMENT "nazwisko uzytkownika",'
                . 'miejscowosc VARCHAR(45) COMMENT "miejscowosc uzytkownika",'
                . 'kod_pocztowy VARCHAR(45) COMMENT "kod pocztowy",'
                . 'ulica VARCHAR(45) COMMENT "ulica",'
                . 'nr_lokalu VARCHAR(45) COMMENT "numer lokalu",'
                . 'email VARCHAR(45) COMMENT "email",'
                . 'telefon VARCHAR(45) COMMENT "telefon",'
                . 'login VARCHAR(45) COMMENT "login",'
                . 'haslo VARCHAR(45) COMMENT "haslo",'
                . 'rola INT(6) COMMENT "id roli",'
                . 'aktywnosc INT(6) COMMENT "id aktywnosci",'
                . 'data_utworzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP, '
                . 'data_edycji TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,'
                . 'edytujacy VARCHAR(100) COMMENT "login edytujacego",'
                . 'PRIMARY KEY (id))';
        
        $query=$this->db->query($sql);
        
        
//        insert do bazy użytkownicy
        
        $sql='SELECT * FROM uzytkownicy';
        $dane=array('imie'=>'admin',
            'nazwisko'=>'admin',
            'miejscowosc'=>'',
            'kod_pocztowy'=>'',
            'ulica'=>'',
            'nr_lokalu'=>'',
            'email'=>'admin@emsoft.net.pl',
            'telefon'=>'',
            'login'=>'emsoft',
            'haslo'=> md5('piotr123'),
            'rola'=>'1',
            'aktywnosc'=>'1');
        $query= $this->db->query($sql);
        
        if($query->num_rows()==0 || $query->num_rows()==NULL):
            $this->db->insert('uzytkownicy',$dane);
        endif;
        
        
        
        
//        utworzenie bazy zlecenia
        
        $sql='CREATE TABLE IF NOT EXISTS zlecenia '
                . '( id INT(6) NOT NULL AUTO_INCREMENT COMMENT "id",'
                . 'imie VARCHAR(45) COMMENT "imie zlecajacego",'
                . 'nazwisko VARCHAR(45) COMMENT "nazwisko zlecajacego",'
                . 'adres VARCHAR(250) COMMENT "adres zlecajacego",'
                . 'telefon VARCHAR(45) COMMENT "telefon zlecajacego",'
                . 'email VARCHAR(45) COMMENT "email zlecajacego",'
                . 'nazwa_firmy VARCHAR(45) COMMENT "nazwa firmy",'
                . 'adres_firmy VARCHAR(250) COMMENT "adres firmy",'
                . 'nip VARCHAR(45) COMMENT "nip firmy",'
                . 'telefon_firmy VARCHAR(45) COMMENT "telefon firmy",'
                . 'email_firmy VARCHAR(45) COMMENT "email firmy",'
                . 'dataW VARCHAR(45) COMMENT "data warszawa",'
                . 'dataB VARCHAR(45) COMMENT "data bielsko",'
                . 'status INT(6) COMMENT "id statusu",'
                . 'nrW VARCHAR(45) COMMENT "numer warszawa",'
                . 'nrB VARCHAR(45) COMMENT "numer bielsko",'
                . 'nr_partnera VARCHAR(45) COMMENT "numer partnera",'
                . 'partner INT(6) COMMENT "id partnera",'
                . 'sposob_przekazania INT(6) COMMENT "id sposobu przekazania",'
                . 'nr_wykonawcy VARCHAR(45) COMMENT "numer wykonawcy",'
                . 'diagnoza INT(6) COMMENT "id diagnozy",'
                . 'nosnik INT(6) COMMENT "id nosnika",'
                . 'opis_nosnika TEXT COMMENT "opis nosnika",'
                . 'haslo VARCHAR(45) COMMENT "haslo nosnika",'
                . 'akcesoria TEXT COMMENT "akcesoria",'
                . 'przyczyna_awarii INT(6) COMMENT "id przyczyny",'
                . 'dane_do_odzyskania TEXT COMMENT "dane do odzyskania",'
                . 'dysk_serwisowany VARCHAR(45) COMMENT "nosnik serwisowany",'
                . 'zgoda_na_otwarcie VARCHAR(45) COMMENT "zgoda na otwarcie nosnika",'
                . 'zgoda_na_utylizacje VARCHAR(45) COMMENT "zgoda na utylizacje nosnika",'
                . 'zaswiadczenie VARCHAR(45) COMMENT "wystawienie zaswiadczenia",'
                . 'skad_dowiedzial VARCHAR(45) COMMENT "skąd klient sie dowiedzial",'
                . 'nosnik_na_dane VARCHAR(45) COMMENT "nosnik na dane",'
                . 'opis_diagnozy TEXT COMMENT "opis diagnozy",'
                . 'koszt_diagnozy VARCHAR(45) COMMENT "koszt diagnozy",'
                . 'diagnoza_oplacona VARCHAR(45) COMMENT "diagnoza oplacona",'
                . 'link_klienta VARCHAR(45) COMMENT "link dla klienta",'
                . 'koszt_odzyskania VARCHAR(45) COMMENT "koszt odzyskania",'
                . 'odzysk_oplacony VARCHAR(45) COMMENT "odzysk oplacony",'
                . 'klient_otrzymal VARCHAR(45) COMMENT "klient otrzymal dane",'
                . 'dodatkowe_informacje TEXT COMMENT "dodatkowe informacje",'
                . 'data_utworzenia TIMESTAMP DEFAULT CURRENT_TIMESTAMP, '
                . 'data_edycji TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,'
                . 'edytujacy VARCHAR(100) COMMENT "login edytujacego",'
                . 'PRIMARY KEY (id))';
        
        $query=$this->db->query($sql);
        
        
    }
}
