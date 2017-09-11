var express = require('express');
var app = express();
var http = require('http').Server(app);
var io = require('socket.io')(http);

// because our static HTML file contains references to other
// static files (e.g., CSS), we must tell Express where to find them
app.use(express.static('public'));

// every time we receive a get request, send back the chat client
app.get('/', function(req, res){
    res.sendFile(   dirname + '/chat-client.html');
});

// handles all WebSocket events, each client will be given a // unique socket
io.on('connection', function(socket) {
    
    // client has sent a username message (message names can be any
    // valid string)
    socket.on('username', function(msg) {
	// save username for this socket
	socket.username = msg;
	// broadcast message to all connected clients
	io.emit('chat message', msg + " has joined");
    });
    
    // client has sent a chat message . . . broadcast it
    socket.on('chat message', function(msg) {
	io.emit('chat message', socket.username + ": " + msg);
    });
});

http.listen(7000, function(){
    console.log('listening on *:7000');
});
