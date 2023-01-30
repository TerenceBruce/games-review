$(document).ready(function(){
  var socket = io.connect("http://localhost:8080");

  $(document.getElementById("myForm")).submit(function(e){
    e.preventDefault();
    socket.emit("client message",$("#message").get(0).value);
    $("#message").get(0).value="";
  });
  socket.on("server message",function(data){
    $("#chatspace").append(data + "<br>");
  });
});
