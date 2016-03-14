/*const greetings.js = require('./greetings.js');
console.log( `The area of a circle of radius 4 is ${greetings.area(4)}`);*/

/*Events in node.js
const EventEmitter = require('events');
const util = require('util');

function MyEmitter() {
  EventEmitter.call(this);
}
util.inherits(MyEmitter, EventEmitter);

const myEmitter = new MyEmitter();
myEmitter.on('event', function() {
  console.log('an event occurred!');
});
myEmitter.emit('event');

const myEmitter = new MyEmitter();
myEmitter.on('event', function(a, b) {
  console.log(a, b, this);
    // Prints:
    //   a b MyEmitter {
    //     domain: null,
    //     _events: { event: [Function] },
    //     _eventsCount: 1,
    //     _maxListeners: undefined }
});
myEmitter.emit('event', 'a', 'b');
MyEmitter();
const myEmitter = new MyEmitter();
myEmitter.on('event', (a, b) => {
  setImmediate(() => {
    console.log('this happens asynchronously');
  });
});
myEmitter.emit('event', 'a', 'b');*/



exports.index = function index(req, res){
  res.render('index');
};

module.exports.index = index;
try using

module.exports.index = index;

var index = function(req,res) {
  res.render('index');
}