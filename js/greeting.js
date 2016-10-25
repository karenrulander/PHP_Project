// Add a greeting to the header of the poge
// The greeting will vary depending on the time of day

var today = new Date();
var hourNow = today.getHours();
var greeting;

if (hourNow >= 18) {
  greeting = 'Good evening!';
} else if (hourNow >= 12) {
  greeting = 'Good afternoon!';
} else if (hourNow >= 0) {
  greeting = 'Good morning!'
} else {
  Greeting = 'Welcome!'
}

document.write('<h4>' + greeting + '</h4>');
