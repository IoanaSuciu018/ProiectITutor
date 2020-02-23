//Define function    
function test() {
    alert ('Welcome on my page by Ioana S.');
}
//Call function
    test ();
// Create an object:
var person = {
  firstName: "Ary",
  lastName : "My Dog",
  age     :  8
}
// Display data from the object:
document.getElementById("dog").innerHTML =
person.firstName + " " + person.lastName;
function displayDate() {
document.getElementById("date").innerHTML = Date();
}
//Homework7
//Array.forEach() function - question in "Intrebari7"
var contries, text;
cotries = ["Romania", "Grecia", "Ungaria", "Italia", "Franta","Germania"];
text = "<ul>";
contires.forEach(myFunction);
text += "</ul>";
document.getElementById("contries").innerHTML = text;
//Question #4
function myFunction(value) {
  text += "<li>" + value + "</li>";
} 
var points = [18, 12, 2020, 15, 400];
document.getElementById("numbers").innerHTML = points[2]; 
function myPoints() {
    points.sort(function(a, b){return a - b});
    document.getElementById("points").innerHTML = points;
}
var fruits = ["Banana", "Orange", "Apple", "Mango"];
document.getElementById("fruits").innerHTML = fruits.join(" * ");
//unshift() method- Question 5
var pets = ["Cat", "Dog", "Mouse", "Parrot"];
document.getElementById("pets").innerHTML = pets;
function myAnimals() {
  animals.unshift("Monkey");
  document.getElementById("pets").innerHTML = pets;
}

