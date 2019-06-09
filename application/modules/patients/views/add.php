<div class="col-8 center-block m-top-50 add-page grey-bg">
<h2>Add New Patient</h2>
<?php
$firstname=array(
    'name'=>'firstname',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'firstname',
    'placeholder' => 'Enter First Name',
    'value'=> set_value('firstname')
);

$lastname=array(
    'name'=>'lastname',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'lastname',
    'placeholder' => 'Enter Last Name',
    'value'=> set_value('lastname')
);

$email=array(
    'name'=>'email',
    'class' => 'form-control m-top-10',
    'type' => 'email',
    'id' => 'email',
    'placeholder' => 'Enter Email',
    'value'=> set_value('email')
);

$age=array(
    'name'=>'age',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'age',
    'placeholder' => 'Enter Age',
    'value'=> set_value('age')
);

$gender=array(
    'name'=>'gender',
    'class' => 'form-control m-top-10',
    'id'=>'gender',
    'value'=>set_value('gender')
);
$gender_option=array(
    ''=>'Select Gender',
    'male'=>'Male',
    'female'=>'Female',
    'others'=>'Others'
);

$address=array(
    'name' => 'address',
    'class' => 'form-control m-top-10',
    'rows'=> '5',
    'cols'=>'10',
    'id'=>'address',
    'placeholder' => 'Enter Address',
    'value'=>set_value('address')
);

$contact=array(
    'name'=>'contact',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'contact',
    'placeholder' => 'Enter Contact',
    'value'=> set_value('contact')
);

$bloodgrp=array(
    'name'=>'bloodgrp',
    'class' => 'form-control m-top-10',
    'id'=>'bloodgrp',
    'value'=>set_value('bloodgrp')
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
    'value'=> set_value('Allergy')
);

$significant_history=array(
    'name' => 'significant_history',
    'class' => 'form-control m-top-10',
    'rows'=> '5',
    'cols'=>'10',
    'id'=>'significant_history',
    'placeholder' => 'Enter significant history',
    'value'=>set_value('significant_history')

);

$patient_submit=array(
    'name'=>'patient_submit',
    'class' => 'btn btn-primary m-top-10',
    'value'=>'Add'
);
echo form_open('add', array('class'=>'form-horizontal m-top-20'));

echo form_input($firstname);
echo '<div class="error">'.form_error('firstname').'</div>';

echo form_input($lastname);
echo '<div class="error">'.form_error('lastname').'</div>';

echo form_input($email);
echo '<div class="error">'.form_error('email').'</div>';

echo form_input($age);
echo '<div class="error">'.form_error('age').'</div>';

echo form_dropdown($gender,$gender_option);
echo '<div class="error">'.form_error('gender').'</div>';

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