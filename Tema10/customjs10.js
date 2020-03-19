var d = new Date();
document.getElementById("date").innerHTML = d;
//for loop
var juiceBrands = ["Coca Cola", "Fanta", "Mirinda", "Pepsi", "Adria" ]
var text = "";
var i;
for (i = 0; i < juiceBrands.length; i++) {
  text += "The juice brand is " + juiceBrands[i] + "<br>";
}
document.getElementById("juice").innerHTML = text;
// for/In Loop
var txt = "";
var pet = {fname:"ARY", lname:"MyDog", age:8}; 
var x;
for (x in pet) {
  txt += pet[x] + " ";
}
document.getElementById("mypet").innerHTML = txt;
// for/Of Loop
var flowers = ['Tulip', 'Rose', 'Daisy'];
var x;
for (x of flowers) {
  document.write(x + "<br >");
}
//While Loop
var text = "";
var i = 0;
while (i < 3) {
  text += "<br>The number is " + i;
  i++;
}
document.getElementById("numbers").innerHTML = text;
//Break and Continue
var text = "";
var i;
for (i = 0; i < 5; i++) {
  if (i === 3) { continue; }
  text += "The number is " + i + "<br>";
}
document.getElementById("break").innerHTML = text;
//Regular expression
var str = "Ary is my dog"; 
var n = str.search("dog");
document.getElementById("search").innerHTML = n;
function myFunction() {
  var str = document.getElementById("replace").innerHTML; 
  var txt = str.replace(/cat/g,"dog");
  document.getElementById("replace").innerHTML = txt;
}
var obj = /e/.exec("Ary is the best dog!");
document.getElementById("findingletter").innerHTML =
"Found " + obj[0] + " in position " + obj.index + " in the text: " + obj.input;
try {
  adddlert("Welcome to my page!");
}
catch(err) {
  document.getElementById("trycatch").innerHTML = err.message;
}
