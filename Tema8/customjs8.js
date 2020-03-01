//Define function    
function test() {
    alert ('Welcome on my page by Ioana S.');
}
//Call function
    test ();
//Homework8
//Date Get Methods
var d = new Date();
document.getElementById("date").innerHTML = d;
var d = new Date();
var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
document.getElementById("dayName").innerHTML = days[d.getDay()];
var d = new Date();
document.getElementById("dayDate").innerHTML = d.getDate();
var d = new Date();
var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
document.getElementById("dayMonth").innerHTML = months[d.getMonth()];
var d = new Date();
document.getElementById("dayYear").innerHTML = d.getFullYear();
//Date Seth Metod
var d = new Date();
d.setFullYear(2020, 11, 3);
document.getElementById("setFullYear").innerHTML = d;
//Compare
var today, someday, text;
today = new Date();
someday = new Date();
someday.setFullYear(2222, 0, 30);
if (someday > today) {
  text = "The year 2222 is so far away.";
} else {
  text = "Today is after 30/JAN/2222.";
}
document.getElementById("compare").innerHTML = text;
//Math object
document.getElementById("maxNumber").innerHTML =
Math.max(0, 150, 30, 20, -8, -200);
document.getElementById("minNumber").innerHTML =
Math.min(0, 150, 30, 20, -8, -200);
document.getElementById("randomNumber").innerHTML = Math.random();