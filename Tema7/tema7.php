<?php
//Homework7
function fruitName($fname,$kilograms) {
    echo "$fname Fruit. KG $kilograms<br>";
}
fruitName("Banna","2");
fruitName("Apple","7");
fruitName("Peach","3");
fruitName("Pear","9");
fruitName("Plum","1");
echo "<br/>"; 
$dresses = array("Black", "Red", "Yellow", "Grey", "DottedBlack");
echo count($dresses);
echo "<br/>"; 
$animals = array("Monkey", "Dog", "Opposum"); 
echo "I like " . $animals[0] . ", " . $animals[1] . " and " . $animals[2] . ".";
echo "<br/>"; 
$age = array("Ioana"=>"30", "Ary"=>"8", "Adina"=>"20");
asort($age);
foreach($age as $x => $x_value) {
    echo "Person=" . $x . ", Age=" . $x_value;
    echo "<br>";
}
echo "<br>";
$shoes = array
  (
  array("Heels",10,7),
  array("Flats",12,2),
  array("Beach",15,5),
  array("Balerina",20,15)
  );
echo $shoes[0][0].": In stock: ".$shoes[0][1].", sold: ".$shoes[0][2].".<br>";
echo $shoes[1][0].": In stock: ".$shoes[1][1].", sold: ".$shoes[1][2].".<br>";
echo $shoes[2][0].": In stock: ".$shoes[2][1].", sold: ".$shoes[2][2].".<br>";
echo $shoes[3][0].": In stock: ".$shoes[3][1].", sold: ".$shoes[3][2].".<br>";
echo "<br>";
?>
