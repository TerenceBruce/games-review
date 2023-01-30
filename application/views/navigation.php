<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title><?php echo $title?></title> <!--loads in the title data for each page  -->



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="navbar-brand">Game Review</a>
        <!--nav button for the home screen -->
      <a href="<?php echo base_url(),'index.php';?>" class="btn btn-outline-primary">Home</a>
    </div>

    <div class="pull-right form-inline">
      <!--if there is no user logged in then show a login buttonn -->
        <?php if($this->session->userdata('username')== ''){?>
      <a href="<?php echo base_url(),'index.php/login';?>" class="btn btn-outline-primary">Login</a><?php
    }
    //if the user logged in is the admin then show a button for the admin page
    elseif ($this->session->userdata('username')== 'admin'){
      //Displays Welcome message to admin
        ?><div class="navbar-brand"><?php echo'Welcome '.$this->session->userdata('username').''?></a>
          <!--nav button for admin page -->
          <a href="<?php echo base_url(),'index.php/admin';?>" class="btn btn-outline-danger">Admin Page</a>


        </div>
        <!--nav button for log out page as there is a user logged in-->
        <a href="<?php echo base_url(),'index.php/logout';?>" class="btn btn-outline-primary">Logout</a><?php

        }
    else{
      //<!--Displays hello,"username" -->
            ?><div class="navbar-brand"><?php echo'Hello '.$this->session->userdata('username').''?></a>


            </div>
          <!--  //nav button for log out page as there is a user logged in-->
        <a href="<?php echo base_url(),'index.php/logout';?>" class="btn btn-outline-primary">Logout</a><?php

        }?>


  </div>


</div>
</nav>
<!--BELOW- LOADS ALL THE SCRIPTS AND CSS NEEDED FOR THE PAGE -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
<script src="<?php echo base_url(); ?>application/scripts/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url(); ?>application/scripts/chat.js"></script>
<script src="<?php echo base_url(); ?>application/scripts/ChatForm.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>application/css/chatBox.css">
<body>
