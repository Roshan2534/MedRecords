<div class="col-10 center-block m-top-50 add-page grey-bg">
<h2>Edit Patient</h2>
<?php
$id = $edit_patient['id'];
$firstname=array(
    'name'=>'firstname',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'firstname',
    'placeholder' => 'Enter First Name',
    'value'=> $edit_patient['firstname']
);

$lastname=array(
    'name'=>'lastname',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'lastname',
    'placeholder' => 'Enter Last Name',
    'value'=> $edit_patient['lastname']
);

$email=array(
    'name'=>'email',
    'class' => 'form-control m-top-10',
    'type' => 'email',
    'id' => 'email',
    'placeholder' => 'Enter Email',
    'value'=> $edit_patient['email']
);

$age=array(
    'name'=>'age',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'age',
    'placeholder' => 'Enter Age',
    'value'=> $edit_patient['age']
);

$address=array(
    'name' => 'address',
    'class' => 'form-control m-top-10',
    'rows'=> '5',
    'cols'=>'10',
    'id'=>'address',
    'placeholder' => 'Enter Address',
    'value'=>$edit_patient['address']
);

$contact=array(
    'name'=>'contact',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'contact',
    'placeholder' => 'Enter Contact',
    'value'=> $edit_patient['Contact_no']
);

$bloodgrp=array(
    'name'=>'bloodgrp',
    'class' => 'form-control m-top-10',
    'id'=>'bloodgrp',
    'value'=>$edit_patient['Bloodgrp']
);
$bloodgrp_option=array(
    ''=>'Select Blood Group',
    'A+'=>'A+',
    'B+'=>'B+',
    'O+'=>'O+',
    'AB+'=>'AB+',
    'A-'=>'A-',
    'B-'=>'B-',
    'O-'=>'O-',
    'AB-'=>'AB-'
);

$allergy=array(
    'name'=>'allergy',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'allergy',
    'placeholder' => 'Enter Allergy',
    'value'=> $edit_patient['AllergicTo']
);

$id = array(
    'name' => 'id',
    'class' => 'form-control m-top-10',
    'type' => 'varchar',
    'id' => 'id',
    'placeholder' => '',
    'value' => $edit_patient['id'],
    'readonly' => 'true'
  );

$significant_history=array(
    'name' => 'significant_history',
    'class' => 'form-control m-top-10',
    'rows'=> '5',
    'cols'=>'10',
    'id'=>'significant_history',
    'placeholder' => 'Enter significant history',
    'value'=>$edit_patient['Significant_history']

);

$patient_submit=array(
    'name'=>'patient_submit',
    'class' => 'btn btn-primary m-top-10',
    'value'=>'Edit'
);
echo form_open('edit_patientinfo', array('class'=>'form-horizontal m-top-20'));

echo form_input($id);
echo '<div class="error">'.form_error('id').'</div>';


echo form_input($firstname);
echo '<div class="error">'.form_error('firstname').'</div>';

echo form_input($lastname);
echo '<div class="error">'.form_error('lastname').'</div>';

echo form_input($email);
echo '<div class="error">'.form_error('email').'</div>';

echo form_input($age);
echo '<div class="error">'.form_error('age').'</div>';

echo form_textarea($address);
echo '<div class="error">'.form_error('address').'</div>';

echo form_input($contact);
echo '<div class="error">'.form_error('contact').'</div>';

echo form_dropdown($bloodgrp,$bloodgrp_option);
echo '<div class="error">'.form_error('bloodgrp').'</div>';

echo form_input($allergy);
echo '<div class="error">'.form_error('allergy').'</div>';

echo form_textarea($significant_history);
echo '<div class="error">'.form_error('significant_history').'</div>';

echo form_submit($patient_submit);
echo '<br>';
echo '<br>';

?>

</div>