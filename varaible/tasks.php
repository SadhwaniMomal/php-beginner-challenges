<?php

// 1. What is a variable in PHP, and how do you declare one?
// A variable in PHP is a container for storing data values. Variables are declared using the $ symbol, followed by the variable name and an assignment operator (=).
// In PHP, variables can hold different types of data, such as strings, integers, floats, and booleans.

echo "<h3>What is a variable in PHP, and how do you declare one? and What will be the output of the following code</h3>";

// Declaring different types of variables
$coursename = "PHP";  // String variable
$age = 25;            // Integer variable
$price = 99.99;       // Float variable
$isAvailable = true;  // Boolean variable

// 2. What will be the output of the following code?
// Outputting the values of the declared variables using echo
echo "Name: " . $coursename;  // Output the string value of $coursename
echo "<br/>";
echo "Age: " . $age;          // Output the integer value of $age
echo "<br/>";
echo "Price: " . $price;      // Output the float value of $price
echo "<br/>";
echo "Available: " . $isAvailable; // Output the boolean value of $isAvailable (true is displayed as 1)
echo "<br/>";
echo "<hr/>"; // Horizontal line to separate sections

// 3. Assigning a value to the variable $x and outputting it
$x = 10;  // $x is assigned the value 10
echo "X = {$x}<br/>";  // Output the value of $x using curly braces to embed the variable in the string

// 4. Assigning a value to $y based on $x and outputting it
$y = $x + 5;  // $y is assigned the value of $x + 5, so $y = 10 + 5 = 15
echo "Y = X + 5 = {$y} <br/>";  // Output the value of $y, which is 15

// 5. Displaying the value of $y
echo "Y =  {$y}";  // Output the value of $y
echo "<br/>";  // Line break

// 6. Can a variable name start with a number in PHP? Why or why not?
echo "<h4>Can a variable name start with a number in PHP? Why or why not?</h4>";
echo "<p>No, a variable name cannot start with a number in PHP.</p>";
echo "<h1>Reason: </h1> <span>
In PHP, variable names must begin with a letter (A-Z, a-z) or an underscore (_), followed by any number of letters, numbers, or underscores. The reason for this rule is to ensure that variable names are easily distinguishable from numerical values or constants.</span>";

// Example of an invalid variable name
echo "<h2>Example of Invalid Variable Name: </h2> <span> $1variable = Hello This is invalid</span>";

// Examples of valid variable names
echo "<h2>Valid Variable Names:</h2> 
      <span>
        \$variable1 = Hello<br/>
        \$_variable = World<br/>
        \$var_name2 = PHP
      </span>";


// 7.	What is the difference between a local and a global variable in PHP?
// 8.	Write a PHP script that declares a variable $name with your name and prints "Hello, [Your Name]".
echo "<h2>Write a PHP script that declares a variable \$name with your name and prints 'Hello, [Your Name]'  <br/>
<span> \$name  = moomal <br/>
        echo Hello {\$name} <br/>
</span>
</h2>";
$name = "Momal";
echo "Hello" .$name;
?>
