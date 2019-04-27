<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
<style type="text/css">
    a:hover{
        text-decoration: underline;
    }

    .white_1{
        background-color: rgb(255,255,255);
        color:black;
    }
    .yellow_1{
        background-color: rgb(255,255,153);
        color: black;
    }
    .lightGren_1{
        background-color: rgb(196,253,157);
        color: black;
    }
    .green_1{
        background-color: rgb(89,214,152);
        color: white;
    }
    .danger_1{
        background-color: rgb(242,128,125);
        color: white;
    }
    .lightBlue_1{
        background-color: rgb(186,232,242);
        color: black;
    }
    .blue_1{
        background-color: rgb(141,180,227);
        color: black;
    }
    .grey_1{
        background-color: rgb(200,200,200);
        color: black;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <h3 class="text-muted" >Zlecenia sortuj według: 
<?php if($this->input->post('stan')== "1"):
    echo "  numerów Bielsko";
elseif($this->input->post('stan')== "2"):
    echo " numerów Warszawa";
elseif($this->input->post('stan')== "3"):
    echo " statusu Nowe";
elseif($this->input->post('stan')== "4"):
    echo " statusu Otwarte";
elseif($this->input->post('stan')== "5"):
    echo " statusu Zamknięte";
else:
    echo " wszystkie";
endif;
?></h3>
        <a class="text-danger" onclick="$('#warszawa').submit()"> Warszawa</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="text-danger" onclick="$('#bielsko').submit()"> Bielsko</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="text-danger" onclick="$('#nowe').submit()">Nowe</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="text-danger" onclick="$('#otwarte').submit()">Otwarte</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="text-danger" onclick="$('#zamkniete').submit()">Zamknięte</a>&nbsp;&nbsp;&nbsp;&nbsp;
      
        <select id="rok" class="btn btn-mini" name="lata">
            <option value="<?=date('Y')?>" selected="on"><?= date('Y')?></option>
            <?php foreach (range(date('Y')-1, 2016, -1) as $value): ?>
                <option value="<?php echo $value ?>"><?php echo $value ?></option>
            <?php endforeach; ?>
            <option value="0">Wszystkie</option>
        </select>
        
        


        <form id="bielsko" method="POST">
            <input type="hidden" name="stan" value="1">
            <input type="hidden" name="rok"  >
        </form>
        <form id="warszawa" method="POST">
            <input type="hidden" name="stan" value="2">
             <input type="hidden" name="rok" >
        </form>
        <form id="nowe" method="POST">
            <input type="hidden" name="stan" value="3">
             <input type="hidden" name="rok" >
        </form>
        <form id="otwarte" method="POST">
            <input type="hidden" name="stan" value="4">
             <input type="hidden" name="rok" >
        </form>
        <form id="zamkniete" method="POST">
            <input type="hidden" name="stan" value="5">
             <input type="hidden" name="rok" >
        </form>

    </div>

</div>
<br><br>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <table class="table table-bordered table-striped" id="example1" >
            <thead>
            <th>Id</th>    
            <th>L.p</th>
            <th>Data_W</th>
            <th>Data_B</th>
            <th>Nr_W</th>
            <th>Nr_B</th>
            <th>Partner</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Telefon</th>
            <th>Email</th>
            <th>Nośnik</th>
            <th>Opis</th>
            <th>Przyczyna</th>
            <th>Status</th>
            <th>Nr Partnera</th>
            <th>Nr Wykonawcy</th>
            <th>Informacje dodatkowe</th>
            </thead>
            <tbody>

                <?php $i=1;
                
                foreach ($zlecenia as $zlecenie):
                    ?>
                    <tr ondblclick="window.location.href = '<?php echo base_url('index.php/Work/edit/' . $zlecenie->id) ?>'">
                        <td><?= $zlecenie->id?></td>
                        <td><?= $i?></td>
                        <td><?= $zlecenie->dataW ?></td>
                        <td><?= $zlecenie->dataB ?></td>
                        <td><?= $zlecenie->nrW ?></td>
                        <td><?= $zlecenie->nrB ?></td>
                        <td><?= $zlecenie->partner_1 ?></td>
                        <td><?= $zlecenie->imie ?></td>
                        <td><?= $zlecenie->nazwisko ?></td>
                        <td><?= $zlecenie->telefon ?></td>
                        <td><?= $zlecenie->email ?></td>
                        <td><?= $zlecenie->rodzaj_1 ?></td>
                        <td><?= $zlecenie->opis_nosnika ?></td>
                        <td><?= $zlecenie->przyczyna_awarii_1 ?></td>
                        <td><?= $zlecenie->status_1 ?></td>
                        <td><?=$zlecenie->nr_partnera?></td>
                        <td><?=$zlecenie->nr_wykonawcy;?></td>
                        <td><?=$zlecenie->dodatkowe_informacje?></td>

                    </tr>
                    <?php $i++;
                    
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(function () {

        $('#example1').DataTable({

            "language": {
                "url": "../../json/pl.json"
            },
            "columnDefs": [

                {"targets": [0], "visible": false},
                {"targets": [10], "visible": false},
                {"targets": [15], "visible": false},
                {"targets": [16], "visible": false},
                {"targets": [17], "visible": false},
                {"width": "4%", "targets": 2},
                {"width": "3%", "targets": 6},
                {"width": "35%", "targets": 12}
            ],
            "order": [[ 1, "desc" ]]

        });
        var table = $('#example1').DataTable();
<?php
$i = 0;
foreach ($zlecenia as $zlecenie):
    ?>
            if ('<?= $zlecenie->status ?>' == "1") {

                $(table.column(14).nodes()['<?= $i ?>']).addClass('white_1');

            } else if ('<?= $zlecenie->status ?>' == "2" || '<?= $zlecenie->status ?>' == "3" || '<?= $zlecenie->status ?>' == "4") {

                $(table.column(14).nodes()['<?= $i ?>']).addClass('yellow_1');

            } else if ('<?= $zlecenie->status ?>' == "5" || '<?= $zlecenie->status ?>' == "6") {

                $(table.column(14).nodes()['<?= $i ?>']).addClass('lightGren_1');

            } else if ('<?= $zlecenie->status ?>' == "7") {

                $(table.column(14).nodes()['<?= $i ?>']).addClass('green_1');

            } else if ('<?= $zlecenie->status ?>' == "8") {

                $(table.column(14).nodes()['<?= $i ?>']).addClass('danger_1');

            } else if ('<?= $zlecenie->status ?>' == "9" || '<?= $zlecenie->status ?>' == "10") {

                $(table.column(14).nodes()['<?= $i ?>']).addClass('lightBlue_1');

            } else if ('<?= $zlecenie->status ?>' == "11" || '<?= $zlecenie->status ?>' == "12" || '<?= $zlecenie->status ?>' == "13" || '<?= $zlecenie->status ?>' == "14") {

                $(table.column(14).nodes()['<?= $i ?>']).addClass('blue_1');

            }else if('<?= $zlecenie->status ?>' == "15" ){
                
                $(table.column(14).nodes()['<?= $i ?>']).addClass('grey_1');
                
                }

    <?php
    $i++;
endforeach;
?>
        $('#rok').val('<?= date('Y');?>').change();
        $('input[name="rok"]').attr('value',$('#rok').val());
        console.log($('#rok').val());
        console.log($('input[name="stan"]').val());
        $('#rok').change(function(){
            
            $('input[name="rok"]').attr('value',$('#rok').val());
            
            
        });
        
        if('<?=$this->input->post('stan')?>'==="1"){
        
            $('#rok').val('<?=$this->input->post('rok')?>').change();
            
        }else  if('<?=$this->input->post('stan')?>'==="2"){
        
            $('#rok').val('<?=$this->input->post('rok')?>').change();
            
        }else  if('<?=$this->input->post('stan')?>'==="3"){
        
            $('#rok').val('<?=$this->input->post('rok')?>').change();
            
        }else  if('<?=$this->input->post('stan')?>'==="4"){
        
            $('#rok').val('<?=$this->input->post('rok')?>').change();
            
        }else  if('<?=$this->input->post('stan')?>'==="5"){
        
            $('#rok').val('<?=$this->input->post('rok')?>').change();
        }
    });




</script>
