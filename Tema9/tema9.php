<?php
//Today is ..
echo "Today is " . date("d-m-Y") . "<br>";
echo "Today is " . date("l") . "<br>";
//Number of days till 16 March
$d1=strtotime("March 16");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 16 of March." . "<br>";
//Open file/read/close
echo readfile("curs9.txt");
echo "<br>";
$myfile = fopen("curs9.txt", "r+") or die("Unable to open file!");
echo fread($myfile,filesize("curs9.txt"));
fclose($myfile);
echo "<br>";
$myfile = fopen("curs9.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
echo "<br>";
$myfile = fopen("curs9.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);

