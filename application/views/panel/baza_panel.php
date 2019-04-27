<?php
//
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">
    .czarny{
        background-color: rgba(0,0,0,0.2);
    }
</style>

<div class="row">
    <div class="col-sm-6">

        <!--formularz statusów-->
<?php echo form_open('index.php/Baza/addStatus', array('class' => 'form-horizontal')) ?>
        <div class="box box-success">
            <div class="box-header">
                <h3 class="text-muted">Status sprawy</h3>
            </div>
            <div class="box-body">

                <table class="table table-striped table-bordered" id="example1">
                    <thead style="background-color: rgba(21,145,21,0.2)">
                    <th style="display: none">Id</th>
                    <th>L.p</th>
                    <th>Nazwa</th>
                    </thead>
                    <tbody>
<?php $i = 1;
foreach ($statusy as $status): ?>
                            <tr>
                                <td style="display: none;"><?= $status->id ?></td>
                                <td><?= $i ?></td>
                                <td><?= $status->status ?></td>
                            </tr>
    <?php $i++;
endforeach; ?>
                    </tbody>
                </table>

            </div>
            <br><br><hr><br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <label for="status">Nazwa statusu</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="nazwa" name="status" class="form-control">
                    </div>
                </div>
            </div><br><br>
            <div class="box-footer">
                <input type="submit" value="Dodaj" class="btn btn-success">


            </div>
        </div>
        <?php echo form_close(); ?>

        <!--formularz sposobu przekazania-->
<?php echo form_open('index.php/Baza/addSposob', array('class' => 'form-horizontal')); ?>
        <div class="box box-default">
            <div class="box-header">
                <h3 class="text-muted">Sposób przekazania sprawy</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="example2">
                    <thead style="background-color: rgba(0,0,0,0.1)">
                    <th style="display: none">Id</th>
                    <th>L.p</th>
                    <th>Nazwa</th>
                    </thead>
                    <tbody>
<?php $i = 1;
foreach ($sposoby as $sposob): ?>
                            <tr>
                                <td style="display: none;"><?= $sposob->id ?></td>
                                <td><?= $i ?></td>
                                <td><?= $sposob->sposob_przekazania ?></td>

                            </tr>
    <?php $i++;
endforeach; ?>
                    </tbody>
                </table>
            </div>
            <br><br><hr><br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <label for="sposob">Nazwa sposobu</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="sposob" name="sposob" class="form-control">
                    </div>
                </div>
            </div><br><br>
            <div class="box-footer">
                <input type="submit" value="Dodaj" class="btn btn-success">


            </div>
        </div>
<?php echo form_close(); ?>

        <!--formularz partnerów-->
<?php echo form_open('index.php/Baza/addPartner', array('class' => 'form-horizontal')); ?>
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="text-muted">Partner</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="example3">
                    <thead style="background-color: rgba(11,64,237,0.2)">
                    <th style="display: none">Id</th>
                    <th>L.p</th>
                    <th>Nazwa</th>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($partnerzy as $partner): ?>
                            <tr>
                                <td style="display: none;"><?= $partner->id ?></td>
                                <td><?= $i; ?></td>
                                <td><?= $partner->partner ?></td>
                            </tr>
    <?php $i++;
endforeach; ?>
                    </tbody>
                </table>
            </div>
            <br><br><hr><br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <label for="partner">Nazwa partnera</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="rodzaj" name="partner" class="form-control">
                    </div>
                </div>
            </div><br><br>
            <div class="box-footer">
                <input type="submit" value="Dodaj" class="btn btn-success">


            </div>
        </div>
<?php echo form_close(); ?>
    </div>
    <div class="col-sm-6">

        <!--formularz rodzaju nośnika-->
<?php echo form_open('index.php/Baza/addNosnik', array('class' => 'form-horizontal')); ?>
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="text-muted">Rodzaj nośnika danych.</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="example4">
                    <thead style="background-color: rgba(237,169,11,0.2)">
                    <th style="display: none">Id</th>
                    <th>L.p</th>
                    <th>Nazwa</th>
                    
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($nosniki as $nosnik):?>
                        <tr>
                            <td style="display: none;"><?= $nosnik->id?></td>
                            <td><?= $i?></td>
                            <td><?= $nosnik->rodzaj?></td>
                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </div>
            <br><br><hr><br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <label for="nosnik">Rodzaj</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="rodzaj" name="nosnik" class="form-control">
                    </div>
                </div>
            </div><br><br>
            <div class="box-footer">
                <input type="submit" value="Dodaj" class="btn btn-success">
               

            </div>
        </div>
<?php echo form_close(); ?>

        <!--formularz rodzaju awrii-->
<?php echo form_open('index.php/Baza/addAwaria', array('class' => 'form-horizontal')); ?>
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="text-muted">Przyczyna awarii.</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="example5">
                    <thead style="background-color: rgba(11,64,237,0.2)">
                    <th style="display: none">Id</th>
                    <th>L.p</th>
                    <th>Nazwa</th>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($awarie as $awaria):?>
                        <tr>
                            <td style="display: none;"><?=$awaria->id?></td>
                            <td><?= $i?></td>
                            <td><?= $awaria->przyczyna_awarii?></td>
                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </div>
            <br><br><hr><br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <label for="awaria">Rodzaj</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="rodzaj" name="awaria" class="form-control">
                    </div>
                </div>
            </div><br><br>
            <div class="box-footer">
                <input type="submit" value="Dodaj" class="btn btn-success">
                

            </div>
        </div>
<?php echo form_close(); ?>

        <!--formularz diagnozy-->
<?php echo form_open('index.php/Baza/addDiagnoza', array('class' => 'form-horizontal')); ?>
        <div class="box box-default">
            <div class="box-header">
                <h3 class="text-muted">Diagnoza.</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="example6">
                    <thead style="background-color: rgba(0,0,0,0.1)">
                    <th style="display: none">Id</th>
                    <th>L.p</th>
                    <th>Nazwa</th>
                    </thead>
                    <tbody>
                        <?php $i=1;foreach($diagnozy as $diagnoza):?>
                        <tr>
                            <td style="display: none;"><?=$diagnoza->id?></td>
                            <td><?= $i?></td>
                            <td><?=$diagnoza->diagnoza?></td>
                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </div>
            <br><br><hr><br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <label for="diagnoza">Rodzaj</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="rodzaj" name="diagnoza" class="form-control">
                    </div>
                </div>
            </div><br><br>
            <div class="box-footer">
                <input type="submit" value="Dodaj" class="btn btn-success">
               

            </div>
        </div>
<?php echo form_close(); ?>
    </div>
</div>

<!--modal status-->



<div class="modal" id="myModal" data-backdrop="static">
    <div class="modal-dialog ">
<?php echo form_open('index.php/Baza/editStatus'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edycja statusu sprawy</h4>
            </div>
            <div class="modal-body">
                <div class="box box-default">
                    <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="nazwa_statusu">Nazwa statusu</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="nazwa_statusu" name="nazwa_statusu" class="form-control">
                            </div>
                        </div>
                    </div> 
                    <br>
                    <input type="hidden" name="id_status1" id="id_status1">

                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Edytuj" id="modal_status">
                <input type="button" value="Usuń" class="btn btn-danger" id="usunS">
            </div>
        </div>
<?php echo form_close(); ?>
<?= form_open('index.php/Baza/deleteStatus', array('id' => 'formS', 'class' => 'form-horizontal')) ?>
        <input type="hidden" name="id_status" id="id_status">
<?= form_close(); ?>
    </div>
</div>



<!--modal sposób przekazania sprawy-->


<div class="modal" id="myModal1" data-backdrop="static">
    <div class="modal-dialog ">
<?php echo form_open('index.php/Baza/editSposob'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edycja sposobu przekazania sprawy</h4>
            </div>
            <div class="modal-body">
                <div class="box box-default">
                    <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="nazwa_sposobu">Nazwa sposobu przekazania</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="nazwa_sposobu" name="nazwa_sposobu" class="form-control">
                            </div>
                        </div>
                    </div> 
                    <br>
                    <input type="hidden" name="id_sposobu1" id="id_sposobu1">

                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Edytuj" id="modal_sposob">
                <input type="button" value="Usuń" class="btn btn-danger" id="usunSposob">
            </div>
        </div>
<?php echo form_close(); ?>
<?= form_open('index.php/Baza/deleteSposob', array('id' => 'formSposob')) ?>
        <input type="hidden" name="id_sposobu" id="id_sposobu">
<?= form_close(); ?>
    </div>
</div>



<!--modal partner-->



<div class="modal" id="myModal2" data-backdrop="static">
    <div class="modal-dialog ">
<?php echo form_open('index.php/Baza/editPartner'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edycja partnera</h4>
            </div>
            <div class="modal-body">
                <div class="box box-default">
                    <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="nazwa_partnera">Nazwa partnera</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="nazwa_partnera" name="nazwa_partnera" class="form-control">
                            </div>
                        </div>
                    </div> 
                    <br>
                    <input type="hidden" name="id_partnera1" id="id_partnera1">

                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Edytuj" id="modal_partner">
                <input type="button" value="Usuń" class="btn btn-danger" id="usunPartner">
            </div>
        </div>
<?php echo form_close(); ?>
<?= form_open('index.php/Baza/deletePartner',array('id'=>'formPartner')); ?>
        <input type="hidden" name="id_partnera" id="id_partnera">
<?= form_close(); ?>
    </div>
</div>




<!--modal rodzaje nośników-->




<div class="modal" id="myModal3" data-backdrop="static">
    <div class="modal-dialog ">
<?php echo form_open('index.php/Baza/editNosnik'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edycja rodzaju nośnika</h4>
            </div>
            <div class="modal-body">
                <div class="box box-default">
                    <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="nazwa_nosnika">Nazwa nośnika</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="nazwa_nosnika" name="nazwa_nosnika" class="form-control">
                            </div>
                        </div>
                    </div> 
                    <br>
                    <input type="hidden" name="id_nosnika1" id="id_nosnika1">

                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Edytuj" id="modal_nosnik">
                <input type="button" value="Usuń" class="btn btn-danger"id="usunNosnik">
            </div>
        </div>
<?php echo form_close(); ?>
        <?= form_open('index.php/Baza/deleteNosnik',array('id'=>'formNosnik'))?>
        <input type="hidden" name="id_nosnika" id="id_nosnika">
        <?= form_close();?>
    </div>
</div>




<!--modal przyczyna awarii-->



<div class="modal" id="myModal4" data-backdrop="static">
    <div class="modal-dialog ">
<?php echo form_open('index.php/Baza/editAwaria'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edycja przyczyny awarii</h4>
            </div>
            <div class="modal-body">
                <div class="box box-default">
                    <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="nazwa_awarii">Nazwa przyczyny</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="nazwa_awarii" name="nazwa_awarii" class="form-control">
                            </div>
                        </div>
                    </div> 
                    <br>
                    <input type="hidden" name="id_awarii1" id="id_awarii1">

                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Edytuj" id="modal_awaria">
                 <input type="button" value="Usuń" class="btn btn-danger" id="usunAwaria">
            </div>
        </div>
<?php echo form_close(); ?>
        <?= form_open('index.php/Baza/deleteAwaria',array('id'=>'formAwaria'));?>
       <input type="hidden" name="id_awarii" id="id_awarii">
        <?= form_close();?>
    </div>
</div>



<!--modal diagnoza-->


<div class="modal" id="myModal5" data-backdrop="static">
    <div class="modal-dialog ">
<?php echo form_open('index.php/Baza/editDiagnoza'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edycja diagnozy</h4>
            </div>
            <div class="modal-body">
                <div class="box box-default">
                    <br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="nazwa_diagnozy">Diagnoza</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="nazwa_diagnozy" name="nazwa_diagnozy" class="form-control">
                            </div>
                        </div>
                    </div> 
                    <br>
                    <input type="hidden" name="id_diagnozy1" id="id_diagnozy1">

                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Edytuj" id="modal_diagnoza">
                <input type="button" value="Usuń" class="btn btn-danger" id="usunDiagnoza">
            </div>
        </div>
<?php echo form_close(); ?>
        <?= form_open('index.php/Baza/deleteDiagnoza',array('id'=>'formDiagnoza'));?>
        <input type="hidden" name="id_diagnozy" id="id_diagnozy">
        <?= form_close();?>
    </div>
</div>



<script type="text/javascript">

    $(function () {

//          status

        $('#example1 tbody').on('dblclick', 'tr', function () {
            var row = $(this).find('td').eq(2).text(),
                    id = $(this).find('td').eq(0).text();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                $('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#myModal').modal();
                $('#nazwa_statusu').val(row);
                $('#id_status').val(id);
                $('#id_status1').val(id);

            }
        });

//       sposób przkazania sprawy

        $('#example2 tbody').on('dblclick', 'tr', function () {
            var row = $(this).find('td').eq(2).text(),
                    id = $(this).find('td').eq(0).text();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                $('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#myModal1').modal();
                $('#nazwa_sposobu').val(row);
                $('#id_sposobu').val(id);
                $('#id_sposobu1').val(id);
            }
        });


//        partner


        $('#example3 tbody').on('dblclick', 'tr', function () {
            var row = $(this).find('td').eq(2).text(),
                id = $(this).find('td').eq(0).text();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                $('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#myModal2').modal();
                $('#nazwa_partnera').val(row);
                $('#id_partnera').val(id);
                $('#id_partnera1').val(id);
            }
        });



//      rodzaj nośnika


        $('#example4 tbody').on('dblclick', 'tr', function () {
            var row = $(this).find('td').eq(2).text(),
                id = $(this).find('td').eq(0).text();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                $('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#myModal3').modal();
                $('#nazwa_nosnika').val(row);
                $('#id_nosnika').val(id);
                $('#id_nosnika1').val(id);

            }
        });

//        rodzaj awarii

        $('#example5 tbody').on('dblclick', 'tr', function () {
            var row = $(this).find('td').eq(2).text(),
                id = $(this).find('td').eq(0).text();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                $('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#myModal4').modal();
                $('#nazwa_awarii').val(row);
                $('#id_awarii').val(id);
                $('#id_awarii1').val(id);

            }
        });

//     rodzaj diagnozy

        $('#example6 tbody').on('dblclick', 'tr', function () {
            var row = $(this).find('td').eq(2).text(),
                id = $(this).find('td').eq(0).text();
            if ($(this).hasClass('success')) {
                $(this).removeClass('success');

            } else {
                $('tr.success').removeClass('success');
                $(this).addClass('success');
                $('#myModal5').modal();
                $('#nazwa_diagnozy').val(row);
                $('#id_diagnozy').val(id);
                $('#id_diagnozy1').val(id);

            }
        });

        $('#usunS').click(function () {
            $('#formSposob').submit();
        });
        $('#usunSposob').click(function () {
            $('#formSposob').submit();
        });
        $('#usunPartner').click(function () {
            $('#formPartner').submit();
        });
        $('#usunNosnik').click(function () {
            $('#formNosnik').submit();
        });
        $('#usunAwaria').click(function () {
            $('#formAwaria').submit();
        });
        $('#usunDiagnoza').click(function () {
            $('#formDiagnoza').submit();
        });
    });

</script>