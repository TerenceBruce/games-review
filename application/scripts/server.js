// Create an instance of HTTP ready Node.JS server.
var app = require("http").createServer();
// Create an instance of socket.IO server. Attach it to the node.js server.
var io = require("socket.io")(app);
// create an event handler that monitors new connections.
io.on('connection',function(socket){
  //print a message on the terminal when a new user connects.
  console.log("A user has enterend the server!");

  //when we recive a message from the client...
  socket.on("client message",function(data){
    //print it onto the termianl.
    console.log("Client message recived: "+ data);

    //send the same message back to the client, but with a different namespace.
    io.emit("server message", data);
  });

});

//Run our Node.js/ socket.IO server on port 8080
app.listen(8080,function(){
  //print a message on the terminal when the server starts.
  console.log("Server started")

});
