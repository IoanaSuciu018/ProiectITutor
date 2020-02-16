<?php
// Greeting created with echo statement
echo "Hello class!<br/>";
echo "I'm about to learn PHP!<br/>";
echo "This ", "is ", "way ", "to hard ", "for me.";
echo "<br/>";
// Data types (question : why x is definded with double " and y with only one', this is applyed per general?)
$x = "Ioana";
$y = 'Suciu';
echo $x;
echo "<br/>"; 
echo $y;
echo "<br/>";
// Strings - all this are easy
echo str_word_count("Care este asemanarea dintre un Windows si un submarin?");
    echo "<br/>";
echo strlen("Cum deschizi o fereastra, cum ai o problema!");
    echo "<br/>";
echo str_replace("world", "peoples", "Hello world!");
    echo "<br/>";
//Constants- so many questions (in the following ex I did not understood what is the difference)
define("GREETING", "Welcome to my page!");// case-sensitive constant name
    echo GREETING;
    echo "<br/>";
define("GREETING", "Welcome to my page!", true); // case-insensitive constant name
    echo greeting;
//Here is the begining of Homework6
$t = date("H");
    echo "<p>The hour is: " . $t; 
if ($t < "8") {
    echo "I am still sleepy!";
} 
elseif ($t < "20") {
    echo "Just had my 3rd coffee!";
} 
else {
    echo "Go home and sleep!";
}
echo "<br/>";
// PHP switch Statement
$favpet = "dog";
switch ($favpet) {
    case "dog":
        echo "My favorite pet is dog!";
        break;
    case "cat":
        echo "My favorite pet is cat!";
        break;
    case "parrot":
        echo "My favorite pet is mouse!";
        break;
    default:
        echo "My favorite pet is neither dog, cat nore mouse!";
}
echo "<br/>";
// while Loop
$i = 0;
    while($i <= 15) {
    echo "The number is: $i <br>";
    $i+=5;
}
echo "<br/>";
// do...while Loop
$x = 18;
    do {
    echo "The number is: $x <br>";
    $x++;
}   
    while ($x <= 17);
echo "<br/>";
// Please explain the PHP for Loop and PHP foreach Loop
// PHP for Loop - is refering on counting numbers ?
// PHP foreach Loop - this used for display the whole value of an given array?
?>