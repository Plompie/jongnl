<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="http://getbootstrap.com/docs/4.0/examples/sticky-footer/sticky-footer.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="<?php echo URL; ?>public/js/jquery.js" type="text/javascript"></script>
    <?php
		if (isset($this->js))
		{
			foreach ($this->js as $js)
			{
				echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
			}
		}
	?>
</head>
<body>
<?php Session::init(); ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #C8E6C9 !important;color:white !important">
		<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
          <a class="nav-link" href="<?php echo URL; ?>index">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>help">Activiteiten</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Informatie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Over ons</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Trainingen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Webshop</a>
        </li>
			</ul>
		</div>
		<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
            <?php if(Session::get('loggedIn') == true):?>

            <div class="dropdown mx-auto">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="collapse" aria-haspopup="true" aria-expanded="false">
                Admin
              </button>
              <div class="dropdown-menu mr-auto" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo URL; ?>dashboard/logout">Logout</a>
            <div class="dropdown">

            <?php else: ?>

            <a class="nav-link" href="<?php echo URL; ?>login">Login</a>

            <?php endif;?>
				</li>
			</ul>
    </div>
  	<div class="mx-auto order-1">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
  </nav>




