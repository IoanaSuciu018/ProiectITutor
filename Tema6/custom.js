function aboutHTML() {
    document.getElementById("HTML").innerHTML = "Fun Facts About HTML";
    }
function aboutCSS() {
    document.getElementById("CSS").innerHTML = 10 + 10;
    }
function texte() {
    document.getElementById("JS").innerHTML = "It's aliveeeeee!";
    document.getElementById("CSS").innerHTML = "All good here?";  
    document.getElementById("example").innerHTML = "By" + " " + "IoanaS.";
    }   
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
};
// Display data from the object:
document.getElementById("dog").innerHTML =
person.firstName + " " + person.lastName;
function displayDate() {
    document.getElementById("date").innerHTML = Date();
  }
function Replace() {
    var str = document.getElementById("PHP").innerHTML; 
    var txt = str.replace("PHP","Hypertext Preprocessor");
    document.getElementById("PHP").innerHTML = txt;
  }

