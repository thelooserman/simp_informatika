<?php
  if($this->session->userdata('HAKAKSES_USER') != "3"){echo 'get out';
  }
  else{ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Jam Praktikum</title>
    <!--link the bootstrap css file-->
    <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- link jquery ui css-->
    <link href="<?php echo base_url('assets/jquery/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!--include jquery library-->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
    <!--load jquery ui js file-->
    <script src="<?php echo base_url('assets/jquery/jquery-ui.min.js'); ?>"></script>
    <style type="text/css">
    .colbox {
        margin-left: 0px;
        margin-right: 0px;
    }
    </style>
    <script type="text/javascript">
    //load datepicker control onfocus
    $(function(){
        $("#hireddate").datepicker();
    });
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
        <legend>Form Jam Praktikum</legend>


        <?php
        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
        echo form_open("depan/simp_formpkelompok", $attributes);?>
        <fieldset>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>Jam Praktikum</th>
              </tr>
            </thead>
            <tbody>
            <?php if(empty($qbarang)){ ?>
            <tr>
              <td colspan="6">Data tidak ditemukan</td>
            </tr>
            <?php }else{
              foreach($qbarang as $rowbarang){ ?>
            <tr>
              <td><?php echo $rowbarang->id_jam_praktikum?></td>
              <td><?php echo $rowbarang->jam_praktikum?></td>

            </td><td><a href="<?=base_url()?>depan/hapusjampraktikum/<?=$rowbarang->id_jam_praktikum?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>

            </tr>


          <?php }}?>
          </tbody>
          </table>
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="idjampraktikum" class="control-label">No</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="idjampraktikum" name="idjampraktikum" placeholder="No Urut jam_praktikum" type="text" class="form-control"  value="<?php echo set_value('idjampraktikum'); ?>" />
                <span class="text-danger"><?php echo form_error('idjampraktikum'); ?></span>
            </div>
            </div>
            </div>
            <div class="form-group">
            <div class="row colbox">
            <div class="col-lg-4 col-sm-4">
                <label for="jampraktikum" class="control-label">Jam Praktikum</label>
            </div>
            <div class="col-lg-8 col-sm-8">
                <input id="jampraktikum" name="jampraktikum" placeholder="Jam Praktikum" type="text" class="form-control"  value="<?php echo set_value('jampraktikum'); ?>" />
                <span class="text-danger"><?php echo form_error('jampraktikum'); ?></span>
            </div>
            </div>
          </div>
            <div class="form-group">
            <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
                <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
                <input id="btn_upt" name="btn_upt" type="submit" class="btn btn-primary" value="Update" />
                <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancel" />
            </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>
</body>
</html>
<?php }?>
