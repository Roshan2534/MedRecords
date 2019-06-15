<div class="profile-holder">

  <div class="row grey-bg">
  
    
      
    
    <div class="col-4 text-center">
    <img src="<?= base_url();?>assets/images/users/<?= $view_patient['profile_pic'];?>"
                class="img-fluid" alt="" />
    
    </div>

    <div class="col-5 m-top-15">
    <p><h3>ID : <?= $view_patient['id']; ?></h3> </p>
      <p><h3>Name : <?= $view_patient['firstname'] .'&nbsp;'.
                                  $view_patient['lastname']; ?></h3> </p>
     <p><h3>Contact : <?= $view_patient['Contact_no']; ?></h3> </p>
     <p><h3>Email : <?= $view_patient['email']; ?></h3> </p>
    </div>
    <div class="col-10 m-top-15">
    <p><h3>Significant History :</h3><h4> <?= $view_patient['Significant_history']; ?></h4> </p><br>
    <p><h3>Gender,Bloodgroup & Age  :</h3><h4> <?= $view_patient['gender'].'&nbsp;'.$view_patient['Bloodgrp'].'&nbsp;'.$view_patient['age']; ?></h4> </p><br>
    <p><h3>Allergic to :</h3><h4> <?= $view_patient['AllergicTo']; ?></h4> </p><br>
    <p><h3>Address :</h3><h4> <?= $view_patient['address']; ?></h4> </p><br>
    </div>
  
  </div>
	<hr>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p><h3>Prescriptions :</h3>
  <div class="container">
  <div class="row">
  <?php
  foreach($view_prescriptions as $view_prescription):
  ?>
  <div class="col-sm-4">
      <div class="card" style="width: 18rem; margin-top:20px">
        <img class="card-img-top" src="<?= base_url();?>assets/images/users/<?= $view_prescription['profile_pic'];?>" alt="Card image cap">
       
      </div>
    </div>
    <br>
		<br>
    <?php
endforeach;
    ?>
		</div>
		</div>
		

</div>
