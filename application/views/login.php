<body>
  <div class="container">
      <div class="row-fluid">
          <div class="span12">
              <div class="span6">
                  <div class="area">

                    <form method="post" name="login" class="form-horizontal" action="<?php echo base_url(),'index.php/home/login_validation'?>"><!--loads the login_validation function from controller-->

                      <div class="heading">
                        <br>
                            <h4 class="form-heading">Sign In</h4>
                        </div>

                        <div class"form-group">
                            <label>Enter Username</label>
                            <input type="text" name="username" class="form-control" />
                        <span class="text-danger"><?php echo form_error('username');?></span><!--loads the the form error for username -->
                      </div>

                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" name="password" class="form-control"/>
                            <span class="text-danger"><?php echo form_error('password');?></span><!--loads the the form error for password -->

                        </div>
                        <div class="form-group">
                            <input type="submit" name="insert" value="Login" class="btn btn-info"/><!--submits the form -->
                            <?php
                            echo $this->session->flashdata("error");//loads error message
                            ?>
                        </div>
                        <a href="<?php echo base_url(),'index.php/signUp'?>" class="btn btn-primary">Not got an account? Click here to sign up</a><!--button to access the login page -->
                    </form>
                  </div>
                </div>
              </div>
    </div>
    </div>

</body>

    </html>
<!---https://bootsnipp.com/snippets/v2A used for sign up page and login
