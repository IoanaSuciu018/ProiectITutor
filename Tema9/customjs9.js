//Homework9
//RandomNumber- not working
document.getElementById('randomN').innerHTML = getRndInteger(0,100)
function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}
//Boolean
function myBooleanFunction() {
document.getElementById("boolean").innerHTML = Boolean(10 > 9);
}
//Comparison and Logical Operators 
function allowtobuydrink() {
var age, buydrinks;
age = Number(document.getElementById("age").value);
  if (isNaN(age)) {
    buydrinks = "Input is not a number";
  } 
  else {
    buydrinks = (age < 21) ? "Too young" : "Old enough";
  }
document.getElementById("drinks").innerHTML = buydrinks;
}
//Conditional Statements
function weekFunction() {
var daysoftheweek;
var days = new Date().getDay();
  if (days = 0) {
    daysoftheweek = "First day of the week!";
  } 
  else if (days < 3) {
    daysoftheweek = "Is the middle of the week!";
  } 
  else {
    daysoftheweek = "End of the week!";
  }
document.getElementById("example").innerHTML = daysoftheweek;
}
//Switch
var text;
switch (new Date().getDay()) {
  case 4:
  case 5:
    text = "Soon it is Weekend";
    break;
  case 0:
  case 6:
    text = "It is Weekend";
    break;
  default:
    text = "Looking forward to the Weekend";
}
document.getElementById("switch").innerHTML = text;
