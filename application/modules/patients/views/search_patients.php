<?php
if(empty($patient_name))
{
  echo 'No Patient with the given name exists';
}
else
{
  
  foreach($patient_name as $patient):
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
