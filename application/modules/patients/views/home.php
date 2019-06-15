
<div class="profile-holder">
<h1>Logged In As: <?= $this->session->userdata('username')  ?></h1>
  <div class="row grey-bg">
  
  <?php
if($this->session->flashdata('UpdateProfilePicError')){
 ?>
<div class="col-10 m-top-50">
  <div class="alert alert-dismissible alert-danger">
    <div class="flash-data">
      <button type="button" class="close" data-dismiss="alert">X</button>
      <strong>Danger !</strong><?= $this->session->flashdata('UpdateProfilePicError');?>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
 <?php
}
  ?>


  <?php
  if($this->session->flashdata('ProfileImageUpdated')){
   ?>
  <div class="col-10 m-top-50">
    <div class="alert alert-dismissible alert-success">
      <div class="flash-data">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <?= $this->session->flashdata('ProfileImageUpdated');?>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
   <?php
  }
    ?>
		<?php
  if($this->session->flashdata('UpdatePrescriptionPicError')){
   ?>
  <div class="col-10 m-top-50">
    <div class="alert alert-dismissible alert-success">
      <div class="flash-data">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <?= $this->session->flashdata('UpdatePrescriptionPicError');?>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
   <?php
  }
    ?>

<?php
  if($this->session->flashdata('PrescriptionPicadded')){
   ?>
  <div class="col-10 m-top-50">
    <div class="alert alert-dismissible alert-success">
      <div class="flash-data">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <?= $this->session->flashdata('PrescriptionPicadded');?>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
   <?php
  }
    ?>


    <?php
    if($this->session->flashdata('PatientRegistered')){
     ?>
    <div class="col-10 m-top-50">
      <div class="alert alert-dismissible alert-success">
        <div class="flash-data">
          <button type="button" class="close" data-dismiss="alert">X</button>
          <?= $this->session->flashdata('PatientRegistered');?>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
     <?php
    }
      ?>
    <?php
    if($this->session->flashdata('Patientupdated')){
     ?>
    <div class="col-10 m-top-50">
      <div class="alert alert-dismissible alert-success">
        <div class="flash-data">
          <button type="button" class="close" data-dismiss="alert">X</button>
          <?= $this->session->flashdata('Patientupdated');?>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
     <?php
    }
      ?>  
      
    <?php
if(empty($patients))
{
  echo '<h3>You have not added any Patients yet..!</h3>';
}
else
{
  
  foreach($patients as $patient):
  ?>
    <br>
    <br>
    <div class="col-4 text-center">
    <img src="<?= base_url();?>assets/images/users/<?= $patient['profile_pic'];?>"
                class="img-fluid" alt="" />
    
    </div>

    <div class="col-8 m-top-15">
      <p><strong>Name</strong>:- <?= $patient['firstname'] .'&nbsp;'.
                                  $patient['lastname']; ?></p>
     <p><strong>Contact</strong>:- <?= $patient['Contact_no']; ?></p>
     <p><strong>Blood grp</strong>:- <?= $patient['Bloodgrp']; ?></p>
     <p><strong>Age</strong>:- <?= $patient['age']; ?></p>
     <?= anchor('view_patient/'.$patient['id'], 'View Patient Info', array('class'=> 'btn btn-primary')); ?>
     <?= anchor('add_prescription/'.$patient['id'], 'Add Prescription', array('class'=> 'btn btn-primary')); ?>
     <?= anchor('edit_patient/'.$patient['id'], 'Edit Patient Info', array('class'=> 'btn btn-primary')); ?>
     <?= anchor('edit_patient_pic/'.$patient['id'], 'Edit Patient Pic', array('class'=> 'btn btn-primary')); ?>
     <br>
    <br>
    <hr>
    </div>
    <?php
endforeach;
}
    ?>
  </div>

</div>
