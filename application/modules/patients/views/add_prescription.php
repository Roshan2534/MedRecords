<?php
$id = $add_prescription['id'];
$image = array(
  'name' => 'profilefile',
  'class' => 'form-control m-top-10',
  'type' => 'file',
  'id' => 'profilefile',
);

$image_submit = array(
'name' => 'image_submit',
'class' => 'btn btn-primary m-top-10',
'value' => 'Update'

);

$patient_id = array(
  'name' => 'patient_id',
  'class' => 'form-control m-top-10',
  'type' => 'varchar',
  'id' => 'id',
  'placeholder' => '',
  'value' => $add_prescription['id'],
  'readonly' => 'true'
);
 ?>

<div class="profile-holder">

  <div class="row grey-bg">



<div class="col-10">
  <?= form_open_multipart('add_prescription_pic'); ?>

  <?= form_label('*Accepted format are .jpg| .jpeg| .png
                and size of image should not exceed 5MB', 'profilefile'); ?>

  <?= form_input($image); ?>

  <?= form_input($patient_id);?>
  
  <?= form_submit($image_submit); ?>
  <?= form_close(); ?>
</div>


  </div>




</div>
