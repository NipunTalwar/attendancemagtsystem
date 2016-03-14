var http = require('http');
var url  = require('url');
var path = require('path');
var fs = require('fs');

var mimetype = {
  
   "html"   : "text/html",
   "css"    : "text/css",
   "js"     : "text/javascript",
   "jpeg"   : "image/jpeg",
   "jpg"    : "image/jpg",
   "png"    : "image/png"
};









/*var hostname = '127.0.0.1';
var port = 1337;

http.createServer((req, res) => {
  res.writeHead(200, { 'Content-Type': 'text/plain' });
  res.end('Hello World\n');
}).listen(port, hostname, () => {
  console.log(`Server running at http://${'127.0.0.1'}:${1337}/`);
});*/