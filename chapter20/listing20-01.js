// Load the http module to create an HTTP server
var http = require('http');

// Configure HTTP server to respond with Hello World to all requests
var server = http.createServer(function (request, response) {
    response.writeHead(200, {"Content-Type": "text/plain"});
    response.write("Hello this is our first node.js application\n");
    response.end();
  });

// Listen on port 7000 on localhost
server.listen(7000, "localhost");

// display a message on the terminal
console.log("Server running at http://127.0.0.1:7000/");
