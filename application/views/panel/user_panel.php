<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style type="text/css">
    a:hover{
        text-decoration: underline;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <h3 class="text-muted">Sortowanie bazy użytkowników wg:</h3>
        <a class="text-danger" onclick="$('#aktywni').submit()">Aktywni</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="text-danger" onclick="$('#nieaktywni').submit()">Nieaktywni</a>&nbsp;&nbsp;&nbsp;&nbsp;
<!--        <a class="text-danger" onclick="$('#uzytkownicy').submit()">Użytkownicy administracyjni</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="text-danger" onclick="$('#klienci').submit()">Klienci</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="text-danger" onclick="$('#administracja').submit()">Administracja</a>&nbsp;&nbsp;&nbsp;&nbsp;-->
    </div>
</div><br><br>
<form id="aktywni"method="POST">
    <input type="hidden" name="user" value="1">
</form>
<form id="nieaktywni"method="POST">
    <input type="hidden" name="user" value="2">
</form>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <table class="table table-bordered table-striped" id="example1">
            <thead>
            <th>Id</th>    
            <th>L.p</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Miejscowość</th>
            <th>Ulica</th>
            <th>Nr lokalu</th>
            <th>Telefon</th>
            <th>E-mail</th>
            <th>Rola</th>
            <th>Login</th>
            <th>Aktywność</th>
            <th>Id Roli</th>
            <th>Id Aktywności</th>
            <th>Hasło</th>
            <th>Kod pocztowy</th>
            </thead>
            <tbody>
                <?php $i=1; foreach($users as $user):?>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?= $i;?></td>
                    <td><?= $user->imie;?></td>
                    <td><?= $user->nazwisko?></td>
                    <td><?= $user->miejscowosc;?></td>
                    <td><?= $user->ulica?></td>
                    <td><?= $user->nr_lokalu?></td>
                    <td><?= $user->telefon?></td>
                    <td><?= $user->email?></td>
                    <td><?= $user->status?></td>
                    <td><?= $user->login?></td>
                    <td><?= $user->stan?></td>
                    <td><?=$user->rola?></td>
                    <td><?=$user->aktywnosc?></td>
                    <td><?= $user->haslo;?></td>
                    <td><?= $user->kod_pocztowy;?></td>
                </tr>
                <?php $i++; endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


        <!--Modal edytuj użytkownika-->

<div class="modal" id="myModal" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edycja uzytkownika</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open('index.php/User/editUser',array('class'=>'form-horizontal'));?> 
                <div class="box box-info">
                    <div class="box-body">
                        <div class="alert-danger" id="alert_1" style="display: none;">
                            <p class="text-center" id="p_alert"></p>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="imie">Imie:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="imie" name="modal_imie" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="nazwisko">Nazwisko:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="nazwisko" name="modal_nazwisko" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="miejscowosc">Miejscowość:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="miejscowosc" name="modal_miejscowosc" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="kod_pocztowy">Kod pocztowy:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="kod_pocztowy" name="modal_kod_pocztowy" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-sm-3">
                                <label for="ulica">Ulica:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="ulica" name="modal_ulica" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">    
                            <div class="col-sm-3">
                                <label for="nr_lokalu">Numer lokalu:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="nr_lokalu" name="modal_nr_lokalu" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="telefon">Telefon:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="telefon" name="modal_telefon" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="email">E-mail:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="modal_email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="login">Login:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="login" name="modal_login" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="haslo">Hasło:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="haslo" name="modal_haslo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="login">Rola:</label>
                            </div>
                            <div class="col-sm-6">
                                <select name="modal_rola" id="rola" class="form-control">
                                    <?php foreach($role as $rola):?>
                                    <option value="<?= $rola->id?>"><?= $rola->rola?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="aktywnosc">Aktywność:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="checkbox" id="aktywnosc" name="modal_aktywnosc" value="1">
                            </div>
                        </div>
                                <input type="hidden" id="userId"name="userId">
                    </div>
                </div>  
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-4">
                        <input type="submit" value="Edytuj" id="edytuj" class="btn btn-success">
                         <a href="#" id="part_2a" data-dismiss="modal" class="btn btn-primary">Anuluj</a>
                    </div>
                </div>
            </div>
        </div>
       <?php echo form_close(); ?>
    </div>
</div>


<script type="text/javascript">
 $(function () {

        $('#example1').DataTable({

            "language": {
                "url": "../../json/pl.json"
            },
        "columnDefs": [

        {"targets": [ 0 ],"visible": false},
        {"targets": [ 5 ],"visible": false},
        {"targets": [ 6 ],"visible": false},
        {"targets": [ 7 ],"visible": false},
        {"targets": [ 12],"visible": false},
        {"targets": [ 13],"visible": false},
        {"targets": [ 14],"visible": false},
        {"targets": [ 15],"visible": false}
        
        ]

        });

    });
    
    
    $(function () {
        var table = $('#example1').DataTable();

        $('#example1 tbody').on('dblclick', 'tr', function () {
            $('#myModal').modal();
            var data = table.row(this).data();
            
            
            $('#imie').val(data[2]);
            $('#nazwisko').val(data[3]);
            $('#miejscowosc').val(data[4]);
            $('#ulica').val(data[5]);
            $('#nr_lokalu').val(data[6]);
            $('#telefon').val(data[7]);
            $('#email').val(data[8]);
            $('#login').val(data[10]);
            $('#rola').val(data[12]).change();
            $('#haslo').val(data[14]);
            $('#kod_pocztowy').val(data[15]);
            $('#userId').val(data[0]);
            if(data[13]=="1"){
                $('#aktywnosc').prop('checked',true);
            }else{
                $('#aktywnosc').prop('checked',false);
            }
            
                    

        });
        
        
        
    });
</script>