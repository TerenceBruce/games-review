</head>
Dark mode

<div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch1" ><!--Bootstrap toggle box -->
  <label class="custom-control-label" for="customSwitch1"></label>
</div>


<script>
$(function(){// this function changes the background coulour of the body depending wether the check box is "checked" or not
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $("body").css("background-color","DimGrey");



                          }
            else if($(this).prop("checked") == false){
                $("body").css("background-color","white");


            }
        });
    });


    </script>


</body>


    </div>
</div>
</body>
