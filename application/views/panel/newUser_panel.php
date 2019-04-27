<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row">
    <div class="col-sm-12" style="height: 150px;"></div>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <?php echo form_open('index.php/User/addNewUser', array('class' => 'form-horizontal')) ?>
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-male"></i>&nbsp;&nbsp;&nbsp;Nowy użytkownik</b></i></h3>
            </div>
            <div class="box-body">

                
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="imie">Imie:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="imie" name="imie" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="nazwisko">Nazwisko:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="nazwisko" name="nazwisko" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="miejscowosc">Miejscowość:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="miejscowosc" name="miejscowosc" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="kod_pocztowy">Kod pocztowy:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="kod_pocztowy" name="kod_pocztowy" class="form-control">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-3">
                        <label for="ulica">Ulica:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="ulica" name="ulica" class="form-control">
                    </div>
                </div>
                <div class="form-group">    
                    <div class="col-sm-3">
                        <label for="nr_lokalu">Numer lokalu:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="nr_lokalu" name="nr_lokalu" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="email">E-mail:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="telefon">Telefon:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="telefon" name="telefon" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="login">Login:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="login" name="login" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="haslo">Hasło:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="password" id="haslo" name="haslo" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="rola">Rola:</label>
                    </div>
                    <div class="col-sm-6">
                        <select name="rola" id="rola" class="form-control">
                            <?php foreach($role as $rola):?>
                            <option value="<?=$rola->id?>"><?=$rola->rola?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-3">
                        <label for="aktywnosc">Aktywność:</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="checkbox" name="aktywnosc" id="aktywnosc" value="1">
                    </div>
                </div>

            </div>
            <div class="box-footer">
                <input type="submit"value="Dodaj" class="btn btn-success pull-right">
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
