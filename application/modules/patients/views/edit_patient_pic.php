
<?php
$id = $edit_patient_pic['id'];
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

$id = array(
  'name' => 'id',
  'class' => 'form-control m-top-10',
  'type' => 'varchar',
  'id' => 'id',
  'placeholder' => '',
  'value' => $edit_patient_pic['id'],
  'readonly' => 'true'
);
 ?>

<div class="profile-holder">

  <div class="row grey-bg">

    <div class="col-4 text-center">
      <img src="<?= base_url();?>assets/images/users/<?= $edit_patient_pic['profile_pic'];?>"
                class="img-fluid" alt="" />
    </div>


<div class="col-8">
  <?= form_open_multipart('update_profile_pic'); ?>

  <?= form_label('*Accepted format are .jpg| .jpeg| .png
                and size of image should not exceed 5MB', 'profilefile'); ?>

  <?= form_input($image); ?>

  <?= form_input($id);?>
  
  <?= form_submit($image_submit); ?>
  <?= form_close(); ?>
</div>


  </div>




</div>
