<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
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
      <?=anchor('logout','Logout',array('class'=>'nav-link active'));?>
      </li>
      <?php
    }
    ?>
    </ul>
    <?php
    if($this->session->userdata('is_logged_in')==TRUE)
    {
      ?>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <?php
    }
    ?>
  </div>
</nav>