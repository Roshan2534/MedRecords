<div class="col-10 center-block m-top-50 add-page grey-bg">
<h2>Search Patients</h2>
<?php
$firstname=array(
    'name'=>'firstname',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'firstname',
    'placeholder' => 'Enter First Name',
    'value'=> set_value('firstname')
);

$search_submit=array(
    'name'=>'patient_submit',
    'class' => 'btn btn-primary m-top-10',
    'value'=>'Search'
);

echo form_open('searchpatients', array('class'=>'form-horizontal m-top-20'));

echo form_input($firstname);
echo '<div class="error">'.form_error('firstname').'</div>';

echo form_submit($search_submit);
echo form_close();
echo '<br>';
echo '<br>';

?>

</div>
