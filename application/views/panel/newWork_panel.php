<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!--jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?= form_open('index.php/Work/addWork');?>
<div class="box box-info">
    <div class="box-body">
        
        <div class="box-header">
            
        </div>
       
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="date">Data Warszawa:</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control input-sm" autocomplete="off" id="dateW" name="dataW"/>
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="date">Data Bielsko:</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control input-sm" autocomplete="off" id="dateB" name="dataB"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="status">Status sprawy:</label>
                    </div>
                    <div class="col-sm-8">
                        <select name="status" id="status" class="form-control input-sm">
                            <?php foreach($statusy as $status):?>
                            <option value="<?= $status->id?>"><?=$status->status?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
       
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h4 class="text-muted text-center">Dane klienta:</h4><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="imie">Imie:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="imie" name="imie" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nazwisko">Nazwisko:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="nazwisko" name="nazwisko" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="adres">Adres:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="adres" name="adres" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="telefon">Telefon:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="telefon" name="telefon" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="email">E-mail:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="email" id="nip" name="email" class="form-control input-sm">
                    </div>
                </div>

            </div>
            <div class="col-sm-4"></div><div class="col-sm-4"></div>
            <div class="col-sm-4" >
              <h4 class="text-center text-muted">Dane do faktury:</h4><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="firma">Nazwa firmy:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="firma" name="nazwa_firmy" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="adres_firmy">Adres:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="adres_firmy" name="adres_firmy" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nip">NIP:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="nip" name="nip" class="form-control input-sm">
                    </div>
                </div>

                <br>
                 <div class="form-group">
                    <div class="col-sm-4">
                        <label for="telefon_firmy">Telefon:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="telefon" name="telefon_firmy" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="email_firmy">E-mail:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="email" id="email" name="email_firmy" class="form-control input-sm">
                    </div>
                </div>
            </div>
           
        </div>


        
        <hr
        
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nrWarszawa">Nr Warszawa:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="nrWarszawa" name="nrW" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nrBielsko">Nr Bielsko:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="nrBielsko" name="nrB" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nrPartnera">Nr Partnera:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="nrPartnera" name="nr_partnera" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="partner">Partner:</label>
                    </div>
                    <div class="col-sm-8">
                        <select name="partner" id="partner" class="form-control input-sm">
                            <option value="0"></option>
                            <?php foreach($partnerzy as $partner):?>
                            <option value="<?=$partner->id?>"><?=$partner->partner?></option>
                           <?php endforeach;?>
                        </select>
                    </div>
                </div><br>
                 <div class="form-group">
                    <div class="col-sm-5">
                        <label for="sposob">Sposób przekazania:</label>
                    </div>
                    <div class="col-sm-7">
                        <select name="sposob_przekazania" id="sposob_przekazania" class="form-control input-sm">
                            <option value="0"></option>
                            <?php foreach($sposoby as $sposob):?>
                            <option value="<?=$sposob->id?>"><?=$sposob->sposob_przekazania?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nr_wykonawcy">Nr Podwykonawcy:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="nrWykonawcy" name="nr_wykonawcy" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="diagnoza">Diagnoza:</label>
                    </div>
                    <div class="col-sm-8">
                        <select name="dignoza" id="diagnoza" class="form-control input-sm">
                            <option value="0"></option>
                            <?php foreach ($diagnozy as $diagnoza):?>                              
                            <option value="<?=$diagnoza->id?>"><?=$diagnoza->diagnoza?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nosnik">Nośnik:</label>
                    </div>
                    <div class="col-sm-8">
                        <select name="nosnik" id="nosnik" class="form-control input-sm">
                            <option value="0"></option>
                            <?php foreach($nosniki as $nosnik):?>
                            <option value="<?= $nosnik->id?>"><?=$nosnik->rodzaj?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="opis_nosnika">Opis nośnika:</label>
                    </div>
                    <div class="col-sm-8">
                        <textarea class="form-control input-sm" id="opis_nosnika"  name="opis_nosnika"rows="4" cols="5" ></textarea>
                    </div>
                </div><br><br><br><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="haslo">Hasło:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="haslo" name="haslo" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="akcesoria">Akcesoria:</label>
                    </div>
                    <div class="col-sm-8">
                        <textarea class="form-control input-sm" id="akcesoria"  name="akcesoria"rows="5" cols="5" ></textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">


                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="przyczyna_awarii">Przyczyna awarii:</label>
                    </div>
                    <div class="col-sm-8">
                        <select name="przyczyna_awarii" id="przyczyna_awarii" class="form-control input-sm">
                            <option value="0"></option>
                            <?php foreach($przyczyny as $przyczyna):?>
                            <option value="<?=$przyczyna->id?>"><?=$przyczyna->przyczyna_awarii?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div><br><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="dane_do_ozyskania">Dane do odzyskania wg priorytetu:</label>
                    </div>
                    <div class="col-sm-8">
                        <textarea class="form-control input-sm" id="dane_do_odzyskania"  name="dane_do_odzyskania"rows="5" cols="5" ></textarea>
                    </div>
                </div><br><br><br><br><br>
                <div class="form-group">
                    <div class="col-sm-8">
                        <label for="dysk_serwisowany">Nośnik był już serwisowany:</label>
                    </div>
                    <div class="col-sm-4">
                        <select name="dysk_serwisowany" id="dysk_serwisowany" class="form-control input-sm">
                            <option value="0"></option>
                            <option value="1">Tak</option>
                            <option value="2">Nie</option>
                        </select>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-8">
                        <label for="zgoda_na_otwarcie">Zgoda na otwarcie nośnika:</label>
                    </div>
                    <div class="col-sm-4">
                        <select name="zgoda_na_otwarcie" id="zgoda_na_otwarcie" class="form-control input-sm">
                            <option value="0"></option>
                            <option value="1">Tak</option>
                            <option value="2">Nie</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-8">
                        <label for="zgoda_na_utylizacje">Zgoda na utylizację:</label>
                    </div>
                    <div class="col-sm-4">
                        <select name="zgoda_na_utylizacje" id="zgoda_na_utylizacje" class="form-control input-sm">
                            <option value="0"></option>
                            <option value="1">Tak</option>
                            <option value="2">Nie</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-8">
                        <label for="zaswiadczenie">Potrzebne zaświadczenie:</label>
                    </div>
                    <div class="col-sm-4">
                        <select name="zaswiadczenie" id="zaswiadczenie" class="form-control input-sm">
                            <option value="0"></option>
                            <option value="1">Tak</option>
                            <option value="2">Nie</option>
                        </select>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="skad_dowiedzial">Skąd klient się dowiedział:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="skad_dowiedzial" name="skad_dowiedzial" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nosnik_na_dane">Nośnik od klienta na dane:</label>
                    </div>
                    <div class="col-sm-8">
                        <br>
                        <input type="text" id="nosnik_na_dane" name="nosnik_na_dane" class="form-control input-sm">

                    </div>
                </div><br><br><br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="opis_diagnozy">Opis diagnozy:</label>
                    </div>
                    <div class="col-sm-8">
                        <textarea class="form-control input-sm" id="opis_diagnozy"  name="opis_diagnozy"rows="5" cols="5" ></textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="koszt_diagnozy">Koszt diagnozy:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="koszt_diagnozy" name="koszt_diagnozy" class="form-control input-sm">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-8">
                        <label for="diagnoza_oplacona">Diagnoza opłacona:</label>
                    </div>
                    <div class="col-sm-4">
                        <select name="diagnoza_oplacona" id="diagnoza_oplacona" class="form-control input-sm">
                            <option value="0"></option>
                            <option value="1">Tak</option>
                            <option value="2">Nie</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="link_klienta">Link dla klienta:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" id="link_klienta" name="link_klienta" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="koszt_odzyskania">Koszt odzyskania danych:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="koszt_odzyskania" name="koszt_ozyskania" class="form-control input-sm">
                    </div>
                </div>
                <br>
                
                
                <div class="form-group">
                    <div class="col-sm-8">
                        <label for="odzysk_oplacony">Odzysk opłacony:</label>
                    </div>
                    <div class="col-sm-4">
                        <select name="odzysk_oplacony" id="odzysk_oplacony" class="form-control input-sm">
                            <option value="0"></option>
                            <option value="1">Tak</option>
                            <option value="2">Nie</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-8">
                        <label for="klient_otrzymal">Klient otrzymał dane:</label>
                    </div>
                    <div class="col-sm-4">
                        <select name="klient_otrzymal" id="klient_otrzymal" class="form-control input-sm">
                            <option value="0"></option>
                            <option value="1">Tak</option>
                            <option value="2">Nie</option>
                        </select>
                    </div>
                </div><br>

                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="dodatkowe_informacje">Dodatkowe informacje:</label>
                    </div>
                    <div class="col-sm-8">
                        <textarea class="form-control input-sm" id="dodatkowe_informacje"  name="dodatkowe_informacje"rows="18" cols="5" ></textarea>
                    </div>
                </div>
            </div>
        </div>
 <div class="box-footer">
     <input type="submit" class="btn btn-success pull-right" value="Dodaj">
        
    </div>
    </div>
  <?= form_close();?> 
<br><br><br>
<script type="text/javascript">
    $(function () {

        $('#dateW, #dateB').datepicker({
            autoclose: true,
            todayHighlight: true,
            language: 'pl-PL',
            format: 'yyyy-mm-dd'
        });
    });
</script>
