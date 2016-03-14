/*
var english = require ('./english');
var spanish = require ('./spanish');
module.exports = {
   
   english =  english,
   spanish =  spanish 
   
};

exports = function() {
  console.log("hello world");
}
console.log('exports');
console.log('module.exports');


const PI = Math.PI;

exports.area = function (r) {
  return PI * r * r;
};

exports.circumference = function (r) {
  return 2 * PI * r;
}; 


var obj {
     name: 'Nipun'
     greet: function()
console.log('hello $ {this.name}');
}
}
obj.greet();*/

class Point {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }

    static distance(a, b) {
        const dx = a.x - b.x;
        const dy = a.y - b.y;

        return Math.sqrt(dx*dx + dy*dy);
    }
}

const p1 = new Point(5, 5);
const p2 = new Point(10, 10);

console.log(Point.distance(p1, p2));

