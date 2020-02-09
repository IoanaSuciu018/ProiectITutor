<?php
// Greeting created with echo statement
echo "Hello class!<br/>";
echo "I'm about to learn PHP!<br/>";
echo "This ", "is ", "way ", "to hard ", "for me.";
// Data types (question : why x is definded with double " and y with only one', this is applyed per general?)
$x = "Ioana";
$y = 'Suciu';
echo $x;
echo "<br/>"; 
echo $y;
// Strings - all this are easy
echo str_word_count("Care este asemanarea dintre un Windows si un submarin?");
echo strlen("Cum deschizi o fereastra, cum ai o problema!");
echo str_replace("world", "peoples", "Hello world!");
//Constants- so many questions (in the following ex I did not understood what is the difference)
define("GREETING", "Welcome to W3Schools.com!");// case-sensitive constant name
echo GREETING;
define("GREETING", "Welcome to W3Schools.com!", true); // case-insensitive constant name
echo greeting;
//One last question regardin PHP - Where do we use operators?
?>