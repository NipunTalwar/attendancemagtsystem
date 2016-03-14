var fs = require('fs');
var contents = fs.readfileSync("./lib/sayings.md","UTF-8");
console.log(contents);
