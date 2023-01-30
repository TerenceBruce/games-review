<body>
  <br>
  <h1 class="text-center">List of Games</h1>
  <br>
<div class="container">
    <div class="card-columns">

        <?php


        foreach ($result as $row)//return the results from the get games function by row
        {


          //echos the image for the games, the game name and a button which takes you to the game page for the specific page
        echo '<div class="card border-secondary p-1" style="width: 20rem height: 40rem">
          <img class="card-img-top" src="'.base_url(),'application/images/',$row->ReviewImage.'" style=" width:10rem height:18rem ">
          <div class="card-body text-center">
            <h5 class="card-title">'.$row->gameName.'</h5>
           <p class="card-text"></p>
           <a href="'.base_url(),'index.php/reviews/',$row->slug.'" class="btn btn-primary">Check out our review</a>
           </div>
        </div>';


      }
        ?>
    </div>
</div>
</body>
<button class="open-button" onclick="openForm()">Chat</button><!--A button which triggers ChatForm.js-->

<div class="chat-popup" id="myForm">
<form name="chatBox" class="form-container">
  <h1>Chat</h1>

                <div id="chatspace"></div><!--this is where the chat messages go-->

                  <form>
                    <label for="msg"><b>Message</b></label><!--title for the messages-->
                    <textarea id="message"autocomplete="off" placeholder="Type message.." name="msg" required></textarea><!--area for the user to type a message-->
                    <button id="sendbutton"class="btn">Send</button><!--sends the message-->
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button><!--runs the ChatForm.js-->

                  </form>
 </form>
  </div>

<!--ref to pop up window https://www.w3schools.com/howto/howto_js_popup_chat.asp-->


</html>
