var http = require('http');
var port = 1337;

http.createServer(function(req, res) {
      res.writeHead(200, {
            'Content-Type': 'text/plain'
      });

      res.end("Hello Mitnick, you've just stumbled on the simplest web server ever");
}).listen(port);

console.log('Our awesome web server running at http://localhost:'+ port);