<?php 
if($this->session->flashdata('DocRegistered')){
?>
<div class="col-10 m-top-50">
<div class="alert alert-dismissible alert-success">
<div class="flashdata">
<button type="button" class="close" data-dismiss="alert">X</button>
<?= $this->session->flashdata('DocRegistered');?>
</div>
<div class="clearfix"></div>
</div>
</div>
<?php
}
?>
<div class="col-8 center-block m-top-50 add-page grey-bg">
<h2>Please Login</h2>
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
    'placeholder' => 'Enter Password',
    'value'=> set_value('password')
);
$login_submit=array(
    'name'=>'patient_submit',
    'class' => 'btn btn-primary m-top-10',
    'value'=>'Login'
);
echo form_open('login', array('class'=>'form-horizontal m-top-20'));
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
