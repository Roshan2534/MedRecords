<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Dr.Shah's Clinic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <?=anchor('home','Home',array('class'=>'nav-link'));?>
      </li>
      <li class="nav-item active">
      <?=anchor('add','Add Patient',array('class'=>'nav-link'));?>
      </li>
      <?php
    if($this->session->userdata('is_logged_in')==TRUE)
    {
      ?>
			<?=anchor('search','Search',array('class'=>'nav-link active'));?>
			<?=anchor('logout','Logout',array('class'=>'nav-link active'));?>
      </li>
      <?php
    }
    ?>
    </ul>
    
    
  </div>
</nav>
