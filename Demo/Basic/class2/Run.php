<?php
include_once("./class/User.php");
include_once("./class/Product.php");
include_once("./class/ProductSettle.php");
$number = 10;
$book = new BookOnline("Design Model");
$user = new NormalUser("Tom");
$price = ProductSettle::finalPrice($user, $book, $number);
$str =  "Hello, " . $user->getName() ." <br>";
$str .= "Your Level ". $user->getGrade() .", <br>";
$str .= "Your Discount " . $user->getDiscount() ."<br>";
$str .= "Bought $number books << ". $book->getProductName() ;
$str .=  ">> Price: $price <br><br>";
echo $str;
$user = new vipUser("Tom");
$price = ProductSettle::finalPrice($user,$book,$number);
$str =  "Hello, " . $user->getName() ." <br>";
$str .= "Your Level ". $user->getGrade() .", <br>";
$str .= "Your Discount " . $user->getDiscount() ."<br>";
$str .= "Bought $number books << ". $book->getProductName() ;
$str .=  ">> Price: $price <br><br>";
echo $str;
$user = new InnerUser("Tom");
$price = ProductSettle::finalPrice($user,$book,$number);
$str =  "Hello, " . $user->getName() ." <br>";
$str .= "Your Level ". $user->getGrade() .", <br>";
$str .= "Your Discount " . $user->getDiscount() ."<br>";
$str .= "Bought $number books << ". $book->getProductName() ;
$str .=  ">> Price: $price <br><br>";
echo $str;
?>
