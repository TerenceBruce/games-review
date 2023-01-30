<body>

<div class="container">
    <div class="row">

        <?php



        foreach ($review as $row)//for each value in the row accosiated with review BELOW load the gamename, image, blurb and review from the game
        {
          echo '
          <h1 class="text-center">'.$row->GameName.'</h1>
          <div class="box">
            <img src="'.base_url(),'application/images/',$row->ReviewImage.'" class="w-25 float-left img-thumbnail " >
            <h3>Game Blurb</h3>
              <text>'.$row->GameBlurb.'</text> <br>
              <h4>Game Review</h4>
              <text>'.$row->GameReview.'</text>

                </div>';

              }
              //this needs to be dynamic for the comments to work properly
              $session_data = array(
                  'ReviewID' => $row->ID,
                  'slug' => $row->slug
              );
              $this->session->set_userdata($session_data);



        ?>
        <form method="post" name="Comment" class="form-horizontal" action="<?php echo base_url(),'index.php/home/Comment'?>"> <!--loads the comment function from controller-->

          <div class="heading">
            <br>
                <h4 class="form-heading">Comment</h4>

                <label>Leave a Comment</label>
                <input type="text" name="Comment" class="form-control" />


                <input type="submit" name="insert" value="Comment" class="btn btn-info"/><!--submits the form-->

            </div>

        </form><br>
        <div class="fixed-bottom">
          <h3>Comment Section</>
        <?php



        foreach ($result as $row)//for each value in the row accosiated with review BELOW load the gamename, image, blurb and review from the game
        {
          echo '
            <div class="box">
          <h5 class="text-center">'.$row->UserName.'</h5><br>
          <text>'.$row->UserComment.'</text> <br>
          </div>';

              }
              ?>
              <br>
    </div>
</div>
</body>
