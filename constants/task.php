<!-- 1.	What is a constant in PHP, and how do you define one? -->
<?php
  const userName = "Moomal DevX";
  echo userName;
  echo "<hr/>";
?>

<!-- Question: 2.	What is the difference between a variable and a constant in PHP? -->

<!-- Ans:: A variable in PHP can change value during execution ($name = "John";), while a constant holds a fixed value that cannot be changed (define("SITE_NAME", "Moomal DevX");). 🚀 -->

<?php 
  $name = "var";
  // $name = "Hello world";
  echo $name ;
  echo "<br/>";
  const name = "Constant value";
  // const name = "Moomal";
  echo name;
  echo "<br/>";
  echo "<hr/>";
  
?>

<!-- Question: 4.	Write a PHP script that defines a constant SITE_NAME with the value "My Website" and prints it. -->
<?php
  const SITE_NAME = "My Website";
  echo SITE_NAME;
  echo "<hr/>";

?>

