var http = require("http");
http.createServer(function (request,response)  {
	response.writeHead(200,{'Content-Type':'text/plain'});

response.end('hello world');
}).listen(8081);
console.log('server running at http://127.0.0.1:8081/');
}




var passport = require('passport')
  , OpenIDStrategy = require('passport-openid').Strategy;

passport.use(new OpenIDStrategy({
    returnURL: 'http://www.example.com/auth/openid/return',
    realm: 'http://www.example.com/'
  },
  function(identifier, done) {
    User.findOrCreate({ openId: identifier }, function(err, user) {
      done(err, user);
    });
  }
));

