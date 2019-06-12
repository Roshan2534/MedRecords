<div class="col-10 center-block m-top-50 add-page grey-bg">
<h2>Add Doctor</h2>
<?php 
$username=array(
    'name'=>'username',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'username',
    'placeholder' => 'Enter Username',
    'value'=> set_value('username')
);

$password=array(
    'name'=>'password',
    'class' => 'form-control m-top-10',
    'type' => 'password',
    'id' => 'password',
    'placeholder' => 'Enter Passwrd',
    'value'=> set_value('password')
);
$login_submit=array(
    'name'=>'patient_submit',
    'class' => 'btn btn-primary m-top-10',
    'value'=>'Login'
);
echo form_open('docadd', array('class'=>'form-horizontal m-top-20'));
echo form_input($username);
echo '<div class="error">'.form_error('username').'</div>';

echo form_input($password);
echo '<div class="error">'.form_error('password').'</div>';

echo form_submit($login_submit);
echo form_close();
echo '<br>';
echo '<br>';

?>

</div>
