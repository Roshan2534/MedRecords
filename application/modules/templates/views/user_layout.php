<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css"
      href="<?php echo base_url();?>assets/css/spacing.css" />

      <link rel="stylesheet" type="text/css"
        href="<?php echo base_url();?>assets/css/custom.css" />
      
        <link href="https://fonts.googleapis.com/css?family=Bitter|Sunflower:300&display=swap" rel="stylesheet">  

</head>
<body>
    <?php $this->load->view('elements/navigation'); ?>
    <div class="container m-top-10">


  <?php $this->load->view($module.'/'.$view_file);?>
  
  
  </div>
  <?php $this->load->view('elements/footer'); ?>
    


  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
   <script src="js/index.js"></script>
</body>
</html>