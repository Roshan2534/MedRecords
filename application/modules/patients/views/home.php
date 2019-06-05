<?php 
if($this->session->flashdata('PatientRegistered')){
?>
<div class="col-10 m-top-50">
<div class="alert alert-dismissible alert-success">
<div class="flashdata">
<button type="button" class="close" data-dismiss="alert">X</button>
<?= $this->session->flashdata('PatientRegistered');?>
</div>
<div class="clearfix"></div>
</div>
</div>
<?php
}
?>
<pre>
<?php print_r($patients);?>
</pre>