<?php include "basemember.php" ?>
<?php startblock('title') ?>
	Eazy Banking
<?php endblock() ?>

<?php startblock('head') ?>
  <style type="text/css">
    .column {
      float: left;
    }
    .summary {
      width: 30%;
    }
    .activity {
      width: 70%;
    }
  </style>
<?php endblock() ?>

<?php startblock('body') ?>
<div class="container">
  <div class="page-header">
      <h1>Activity</h1>
  </div>

  <div class="column activity">
    <div class="row well">
      <div class="col-md-7">
        <h2>Coba<br>
        <small>hahahaha</small></h2>
      </div>
      <div class="col-md-3">
        <h3 style="padding-top: 15px;"><span class="label label-default">Transferred</span></h3>
      </div>
      <div class="col-md-2">
        <h2 style="color: green; padding-top: 15px; text-align: center;">1200</h2>
      </div>
    </div>

    <div class="row well">
      <div class="col-md-7">
        <h2>Coba<br>
        <small>hahahaha</small></h2>
      </div>
      <div class="col-md-3">
        <h3 style="padding-top: 15px;"><span class="label label-default">Transferred</span></h3>
      </div>
      <div class="col-md-2">
        <h2 style="color: red; padding-top: 15px; text-align: center;">1200</h2>
      </div>
    </div>

    <div class="row well">
      <div class="col-md-7">
        <h2>Coba<br>
        <small>hahahaha</small></h2>
      </div>
      <div class="col-md-3">
        <h3 style="padding-top: 15px;"><span class="label label-default">Transferred</span></h3>
      </div>
      <div class="col-md-2">
        <h2 style="color: green; padding-top: 15px; text-align: center;">1200</h2>
      </div>
    </div>

    <div class="row well">
      <div class="col-md-7">
        <h2>Coba<br>
        <small>hahahaha</small></h2>
      </div>
      <div class="col-md-3">
        <h3 style="padding-top: 15px;"><span class="label label-default">Transferred</span></h3>
      </div>
      <div class="col-md-2">
        <h2 style="color: red; padding-top: 15px; text-align: center;">1200</h2>
      </div>
    </div>

  </div>
  <div class="column summary" style="padding-left: 20px">
    <h3 style="text-align: center;">Total</h3>
    <hr>
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <h3 style="color: green;">Debit</h3>
      </div>
      <div class="col-md-4">
        <h3 style="color: green;">5000</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <h3 style="color: red;">Credit</h3>
      </div>
      <div class="col-md-4">
        <h3 style="color: red;">700</h3>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <h3 style="color: blue;">Total</h3>
      </div>
      <div class="col-md-4">
        <h3 style="color: blue;">4300</h3>
      </div>
    </div>
  </div>
</div>
<br><br>
<?php endblock() ?>