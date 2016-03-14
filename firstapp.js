/*var http = require("http");
http.createServer(function (request,response)  {
	response.writeHead(200,{'Content-Type':'text/plain'});

response.end('hello world');
}).listen(8081);
console.log('server running at http://127.0.0.1:8081/');

/*var prompt = require('prompt');

  prompt.start();

  prompt.get(['username', 'email'], function (err, result) {
    if (err) { return onErr(err); }
    console.log('Command-line input received:');
    console.log('  Username: ' + result.username);
    console.log('  Email: ' + result.email);
  });

  function onErr(err) {
    console.log(err);
    return 1;
  }

  var prompt = require('prompt');

  var properties = [
    {
      name: 'username', 
      validator: /^[a-zA-Z\s\-]+$/,
      warning: 'Username must be only letters, spaces, or dashes'
    },
    {
      name: 'password',
      hidden: true
    }
  ];

  prompt.start();

  prompt.get(properties, function (err, result) {
    if (err) { return onErr(err); }
    console.log('Command-line input received:');
    console.log('  Username: ' + result.username);
    console.log('  Password: ' + result.password);
  });

  function onErr(err) {
    console.log(err);
    return 1;
  }*/

var http = require("http");
var fs = require("fs");
   http.createServer(function (request,response)  {
	    response.writeHead(200,{'Content-Type':'text/html'});
        var html = fs.readfilesync  (nipun'/example.html');

response.end('html');
}).listen(8081);
console.log('server running at http://127.0.0.1:8081/');


