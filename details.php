<!DOCTYPE html>
<html>
<head>
	<title>My PHP Preactis</title>
</head>
	<body>
			<header>
				<h4>PHP Explore</h4>
				<hr>
			</header>
		<?php
			echo "welcome to my php code.";
		?>
		<br>

		<?php
			// This is a php Syntax.

			// comment using
			# This is also a single-line comment
			/*
			This is a multiple-lines comment block
			that spans over multiple
			lines
			*/
			/* + 15 */
			?>

		<?php
			echo "<h2>php Syntax!</h2><hr>";
			$color = "red";
			echo "My car color is " . $color. "<br>";
			$language = "php, html, css, js, node, mongoDB, react.";
			echo "I am expert in " . $language. "<br>";
		?>

		<?php 
			#This is php variable example.
			echo "<h2>php variable example!</h2><hr>";
			$myBalance = 5 +10 +10;
			echo "my balance is total " .$myBalance . "<br>";
			$tex = "this is text variable.";
			echo "Hey ". $tex ."<br>"; 
			# the sum of two variables
			$x = 5;
			$y = 4.5;
			echo $x + $y;
		?>

		<?php
			echo "<h2>print Statements & echo Statement example!</h2><hr>";
			#PHP echo and print Statements
			#1.The PHP echo Statement
			echo "<h2>PHP is Fun echo first!</h2>"; //first
			print "<h2>PHP is Fun print than slow!</h2>"; // slow

			echo('Learn PHP <br>');
			print('Learn PHP <br>');
		?>

		<?php 
			echo "<h2>Data Type example!</h2><hr>";
			#PHP Data Types
			#var_dump diya data type chack kora hoy
			/*
			Variables can store data of different types, and different data types can do different things.
			PHP supports the following data types:

			1.String
			2.Integer
			3.Float (floating point numbers - also called double)
			4.Boolean
			5.Array
			6.Object
			7.NULL
			8.Resource
			*/
			#PHP String Example
			$stringExample = "I hava 10 and 5 +10 tk"; //String
			echo "$stringExample <br>";

			#PHP Integer Example
			$ages=20; //Integer
			echo "$ages <br>";

			#PHP Float Example
			$x = 10.365;
			var_dump($x);

			#PHP Boolean Example
			$t = true;
			$f = false;
			echo('<br>');
			#PHP Array Example
			$cars = array("Volvo","BMW","Toyota"); // array
			echo($cars['0']);
			#PHP Object Example
			#PHP NULL Example
			$n = "Hello world!";
			$n = null;
			echo '<br>';
			var_dump($n);
			#PHP Resource Example
			echo '<br>';
		?>

		<?php 
			#PHP Strings Example
			echo "<h2>php Strings Example</h2><hr>";
			echo strlen("Hello world!"); // outputs 12
			echo '<br>';
			echo str_word_count("Hello world!"); // outputs 2
			echo '<br>';
			echo strrev("Hello world!"); // outputs !dlrow olleH
			echo '<br>';
			echo strpos("Hello world!", "world"); // outputs 6
			echo '<br>';
			echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
			echo '<br>';
		?>

		<?php 
			echo('<h3>PHP Numbers Example</h3> <hr>'); 

			echo('<h4>PHP Integers</h4>'); // purno sonka ki na ta janer jonno Integer use kore hoy.
			#var_dump with is_int()
			$x = 5985;
			var_dump(is_int($x));
			echo '<br>';
			$y = 59.85;
			var_dump(is_int($y));
			echo '<br>';

			#var_dump with is_integer()
			$intg = 5000;
			var_dump(is_integer($intg));
			echo '<br>';

			#var_dump with is_long();
			$xyz = 4000.5;
			var_dump(is_long($xyz));
			echo '<br>';
			
			echo('<h4>PHP Floats</h4>'); // dosimik ki na cheack korer jonno;
			# is_float();
			$flo = 10.365;
			var_dump(is_float($flo));
			echo '<br>';

			#is_double();
			$dub = 1000;
			var_dump(is_float($dub));

			echo('<h4>PHP Infinity</h4>'); // infinite number chack korer er jonno
			#is_finite()
			$inf = 1.9e411;
			var_dump($inf);

			#is_infinite()
			$inft = 1e411;
			var_dump($inft);

			echo('<h4>PHP NaN</h4>'); // not a number chack korer jonno.
			#is_nan();

			$x = sqrt(-1);
			var_dump(is_nan($x));

			echo('<h4>PHP numeric</h4>'); // number ki  na ta cheack koreta is_numeric use hoy.
			$x = 5985;
			var_dump(is_numeric($x)); // bool(true)

			echo "<br>";

			$x = "5985";
			var_dump(is_numeric($x)); // bool(true)

			echo "<br>";

			$x = "59.85" + 100;
			var_dump(is_numeric($x)); // bool(true)

			echo "<br>";

			$x = "Hello";
			var_dump(is_numeric($x)); // bool(false)
			echo "<br>";

			echo('<h4>PHP Casting Strings and Floats to Integers</h4>');
			// Cast float to int
			$x = 23465.768;
			$int_cast = (int)$x;
			echo $int_cast;

			echo "<br>";

			// Cast string to int
			$x = "23465.768";
			$int_cast = (int)$x;
			echo $int_cast;
		?>

		<?php 
			echo('<h3>PHP Math Example</h3> <hr>');
			#php()
			echo(pi());
			echo "<br>";
			#min()
			echo(min(0, 150, 30, 20, -8, -200));  // returns -200
			echo "<br>";
			#max()
			echo(max(0, 150, 30, 20, -8, -200));  // returns 150
			echo "<br>";
			#abs
			echo(abs(-6.7));  // returns 6.7
			echo "<br>";
			#sqrt
			echo(sqrt(64));  // returns 8
			echo "<br>";
			#round
			echo(round(0.60));  // returns 1
			echo(round(0.49));  // returns 0
			echo "<br>";
			#rand
			echo(rand(1, 6)); // random ii 
			echo "<br>";
		?>

		<?php 
			#To create a constant, use the define() function.
			echo('<h3>PHP Constants Example</h3> <hr>');

			define("SABBIR", "hey, i am simple."); // first a constant er 'name', tarpor value
			echo SABBIR; // name diya call korta hoba
			echo "<br>";

			define('HPI', 'I reade in diploma in 7th semester in computer subject.');
			echo HPI;
			echo "<br>";

			echo('<h5>PHP Constant Arrays</h5>');

			define("cars", [
			"Alfa Romeo",
			"BMW",
			"Toyota"
			]);
			echo cars[0]; // Alfa Romeo
			echo "<br>";

			define("func", "Welcome to my php preactis");

			function myTest() {
			echo func;
			}
			
			myTest();
		?>

		<?php 
			echo('<h3>PHP Operators Example</h3> <hr>');
			/*
			Arithmetic operators
			Assignment operators
			Comparison operators
			Increment/Decrement operators
			Logical operators
			String operators
			Array operators
			Conditional assignment operators
			*/

			echo('<p>PHP Arithmetic Operators</p>');
			echo ('+, - , *, /, %, ** <br>');

			echo('<p>PHP Assignment Operators</p>');
			echo ('=, += , -=, *=, /=, %=');

			echo('<p>PHP Comparison Operators</p>');
			echo ('==, === , !=, <>, !==, >, <, >=, <=, <=>');

			echo('<p>PHP Increment / Decrement Operators</p>');
			echo ('++$x, $x++, --$x, $x--');

			echo('<p>PHP Logical Operators</p>');
			echo ('and, or, xor, &&, ||, !');

			echo('<p>PHP String Operators</p>');
			echo ('., .='); 

			echo('<p>PHP Array Operators</p>');
			echo ('+, ==, ===, !=, <>, !=='); 

			echo('<p>PHP Conditional Assignment Operators</p>');
			echo ('?:, ??');
		?>

		<?php 
			echo('<h3>PHP if...else...elseif Statements</h3> <hr>');

			$a = 50;
			$b = 10;
			if($a > $b){
			echo "Hello World";
			}

			echo "<br>";

			$a = 50;
			$b = 10;
			if($a!=$b){
			echo "Hello PHP";
			}

			echo "<br>";

			$a = 50;
			$b = 10;
			if($a == $b) {
			echo "1";
			} 
			elseif
			($a > $b) {
			echo "2";
			} 
			else
			{
			echo "3";
			}

			echo "<br>";

			$pass = '0808';
			if($pass == '0808'){
				echo "Your password is Right";
			}else{
				echo "Your password is wrong";
			}
		?>

		<?php 
			echo('<h3>PHP switch Statement</h3> <hr>');

			$color = "green";
			switch ($color) {
			case "red":
				echo "Your favorite color is red!";
				break;
			case "blue":
				echo "Your favorite color is blue!";
				break;
			case "green":
				echo "Your favorite color is green!";
				break;
			default:
				echo "Your favorite color is neither red, blue, nor green!";
			}
			echo "<br>";
		?>

		<?php 
			echo('<h3>PHP Loops Example</h3> <hr>');
			/*
				1. while - loops through a block of code as long as the specified condition is true
				2. do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
				3. for - loops through a block of code a specified number of times
				4. foreach - loops through a block of code for each element in an array
			*/

			echo('<p>PHP while Loops Example <br>
				_______________________</p>');
			/*
				Syntax
				__________
				while (condition is true) {
				code to be executed;
				}
			*/
			$x = 1;
			while($x <= 10) {
			echo "The number is: $x <br>";
			$x++;
			}

			echo('<p>PHP do while Loops Example <br>
				_______________________</p>');
			/* 
				Syntax
				___________
				do {
				code to be executed;
				} while (condition is true);
			*/
			$x = 1;
			do {
			echo "The number is: $x <br>";
			$x++;
			} while ($x <= 5);

			echo "<br>";
			echo('<p>PHP for Loop Example <br>
				_______________________</p>');

			/* 
			Syntax
			____________
			for (init counter; test counter; increment counter) {
			code to be executed for each iteration;
			}		
			*/

			for ($x = 1; $x <= 10; $x++) {
			echo "The number is: $x <br>";
			}

			for ($x = 0; $x <= 100; $x+=10) {
			echo "The number is: $x <br>";
			}


			echo "<br>";
			echo('<p>PHP foreach Loop Example <br>
				_______________________</p>');

			/* 
			Syntax
			foreach ($array as $value) {
				code to be executed;
			}		
			*/

			$colors = array("red", "green", "blue", "yellow");

			foreach ($colors as $value) {
			echo "$value <br>";
			}

			echo "<br>";
			echo('<p>PHP Break and Continue <br>
				_______________________</p>');

			$x = 1;

			while($x <= 10) {
			if ($x == 6) {
				break;
			}
			echo "The number is: $x <br>";
			$x++;
			}

			$x = 0;

			while($x <= 10) {
			if ($x == 4) {
				$x++;
				continue;
			}
			echo "The number is: $x <br>";
			$x++;
			}
		?>

		<?php 
			echo "<br>";
			echo('<h4>PHP Functions Example <hr></h4>');

			/*
			Syntax
			function functionName() {
			code to be executed;
			}
			*/

			function laptop() {
				echo 'I have a Dell laptop.';
			}
			laptop();

			echo "<br>";
			echo('<p>PHP Function Arguments Example <br>
				_______________________</p>');
			function familyName($fname, $year, $age) {
			echo "$fname Refsnes. Born in $year and age is $age.<br>";
			}

			familyName("Sabbir Hossain", "2003", "19");
			familyName("Nadim Joy", "2006", "15");
			familyName("Muhib Nihon", "2013", "11");

			echo "<br>";
			echo('<p>PHP is a Loosely Typed Language Example <br>
				_______________________</p>');
				
			function addNumbers(int $a, int $b) {
			return $a + $b;
			}
			echo addNumbers(5, 5);


			/*
			<?php declare(strict_types=1); // strict requirement

				function addNumbers(int $a, int $b) {
				return $a + $b;
				}
				echo addNumbers(5, "5 days");
				// since strict is enabled and "5 days" is not an integer, an error will be thrown
			?>
			*/

			echo "<br>";
			echo('<p>PHP Default Argument Value Example <br>
				_______________________</p>');
			
			function setHeight(int $minheight = 50) {
			echo "The height is : $minheight <br>";
			}

			setHeight(350);
			setHeight(); // will use the default value of 50
			setHeight(135);
			setHeight(80);


			echo "<br>";
			echo('<p>PHP Functions - Returning values Example <br>
				_______________________</p>');

			function sum(int $x, int $y) {
			$z = $x + $y;
			return $z;
			}

			echo "5 + 10 = " . sum(5, 10) . "<br>";
			echo "7 + 13 = " . sum(7, 13) . "<br>";
			echo "2 + 4 = " . sum(2, 4);
			
		?>

		<?php 
			echo "<br>";
			echo('<h4>PHP Arrays Example <hr></h4>');

			echo "<br>";
			echo('<p>PHP Functions - Returning values Example <br>
				_______________________</p>');

			$cars = array("Volvo", "BMW", "Toyota");
			echo count($cars);


			echo "<br>";
			echo('<p>PHP Indexed Array Example For loop or foreach<br>
				_______________________</p>');

			$cars = array("Volvo", "BMW", "Toyota");
			$arrlength = count($cars);
			for($x = 0; $x < $arrlength; $x++) {
				echo $cars[$x];
				echo "<br>";
			}

			//OR 

			$brother = array("Sabbir", "Nadim", "Nihon", "Abdullah", "Sujon", "Arsh", "Yesh");
			foreach ($brother as $bro) {
				echo "$bro <br>";
			}

			echo "<br>";
			echo('<p>PHP Associative Arrays<br>
				_______________________</p>');

			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			echo "Peter is " . $age['Peter'] . " years old. <br>";

			// or example

			$ages = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			foreach($ages as $key => $value) {
			echo "Key=" . $key . ", Value=" . $value;
			echo "<br>";
			}

			echo "<br>";
			echo('<p>PHP Multidimensional Arrays<br>
				_______________________</p>');

			$cars = array (
			array("Volvo",22,18),
			array("BMW",15,13),
			array("Saab",5,2),
			array("Land Rover",17,15)
			);

			echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
			echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
			echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
			echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


			$cars = array (
			array("Volvo",22,18),
			array("BMW",15,13),
			array("Saab",5,2),
			array("Land Rover",17,15)
			);

			for ($row = 0; $row < 4; $row++) {
			echo "<p><b>Row number $row</b></p>";
			echo "<ul>";
			for ($col = 0; $col < 3; $col++) {
				echo "<li>".$cars[$row][$col]."</li>";
			}
			echo "</ul>";
			}

			echo "<br>";
			echo('<p>PHP Sorting Arrays<br>
				_______________________</p>');

			$cars = array("Volvo", "BMW", "Toyota");
			sort($cars);

			foreach($age as $row){
				echo "$row <br>";
			}

			echo "<br>";
			echo('<p>PHP rsort Arrays<br>
				_______________________</p>');

			$cars = array("Volvo", "BMW", "Toyota");
			rsort($cars);

			foreach($age as $row){
				echo "$row <br>";
			}
			

			echo "<br>";
			echo('<p>PHP asort Arrays<br>
				_______________________</p>');
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			asort($age);

			foreach($age as $row){
				echo "$row <br>";
			}

			echo "<br>";
			echo('<p>PHP ksort Arrays<br>
				_______________________</p>');
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			ksort($age);

			foreach($age as $row){
				echo "$row <br>";
			}

			echo "<br>";
			echo('<p>PHP arsort Arrays<br>
				_______________________</p>');
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			arsort($age);

			foreach($age as $row){
				echo "$row <br>";
			}

			echo "<br>";
			echo('<p>PHP krsort Arrays<br>
				_______________________</p>');
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			krsort($age);

			foreach($age as $row){
				echo "$row <br>";
			}
		?>

		<?php 
			echo "<br>";
			echo('<h4>PHP Global Variables - Superglobals Example <hr></h4>');
			/*
				The PHP superglobal variables are:
				$GLOBALS
				$_SERVER
				$_REQUEST
				$_POST
				$_GET
				$_FILES
				$_ENV
				$_COOKIE
				$_SESSION
			*/ 
		?>

		<?php 
			echo "<br>";
			echo('<p>PHP $GLOBALS<br>
				_______________________</p>');
			
			$x = 75;
			$y = 25;
			 
			function addition() {
				$GLOBALS['g'] = $GLOBALS['x'] + $GLOBALS['y'];
			}
			 
			addition();
			echo $g;
		?>

		<?php
			echo "<br>";
			echo('<p>PHP $_SERVER <br>
				_______________________</p>');

			echo $_SERVER['PHP_SELF'];
			echo "<br>";
			echo $_SERVER['SERVER_NAME'];
			echo "<br>";
			echo $_SERVER['HTTP_HOST'];
			echo "<br>";
			echo $_SERVER['HTTP_REFERER'];
			echo "<br>";
			echo $_SERVER['HTTP_USER_AGENT'];
			echo "<br>";
			echo $_SERVER['SCRIPT_NAME'];
			echo "<br>";
			echo "<br>";
			echo "<br>";
		?>

		<?php 
			echo "<br>";
			echo('<p>PHP $_REQUEST<br>
				_______________________</p>');
		 ?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Name: <input type="text" name="first_name" placeholder="Enter your name">
			<br>
			Password: <input type="password" name="password" placeholder="Enter your password">
			<br>
			<input type="submit" style="background-color: red; color: white;">
		</form>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  // collect value of input field
		  $name = $_REQUEST['first_name'];
		  $pass = $_REQUEST['password'];
		  if (empty($name)) {
		    echo "Name is empty";
		  }
		  elseif(empty($pass)) {
		  	echo "password is empty";
		  }
		   else {
		    echo $name;
		    echo "<br>";
		    echo $pass;

		  }
		}
		?>

		<?php 
			echo "<br>";
			echo('<p>PHP $_POST<br>
				_______________________</p>');
		 ?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		  Name: <input type="text" name="fname">
		  <br>
		  <input type="submit">
		</form>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  // collect value of input field
		  $name = $_POST['fname'];
		  if (empty($name)) {
		    echo "Name is empty";
		  } else {
		    echo $name;
		  }
		}
		echo "<br>";
		?>

		<?php 
			echo "<h2>php Reg Exapresion</h2><hr>";
			/* 
			preg_match()	Returns 1 if the pattern was found in the string and 0 if not
			preg_match_all()	Returns the number of times the pattern was found in the string, which may also be 0
			preg_replace()	Returns a new string where matched patterns have been replaced with another string
			*/
			echo "<br>";
			echo('<p>Using preg_match() <br>
				_______________________</p>');

			$str = "Visit W3Schools";
			$pattern = "/w3schools/i";
			echo preg_match($pattern, $str); // Outputs 1

			echo "<br>";
			echo('<p>Using preg_match_all() <br>
				_______________________</p>');
			$str = "The rain in SPAIN falls mainly on the plains.";
			$pattern = "/ain/i";
			echo preg_match_all($pattern, $str); // Outputs 4

			echo "<br>";
			echo('<p>Using preg_match_all() <br>
				_______________________</p>');
				
			$str = "Visit Microsoft!";
			$pattern = "/microsoft/i";
			echo preg_replace($pattern, "my php website", $str); // Visit my php website!"
		?>
		<?php 
			echo "<br>";
			echo "<h4>PHP Form Handling</h4> <hr>";
		 ?>
			<form action="welcome.php" method="post">
				Name: <input type="text" name="name"><br>
				E-mail: <input type="text" name="email"><br>
				Phone: <input type="text" name="phone"><br>
				<input type="submit">
			</form>

		<?php 
			echo "<br>";
			echo "<h4>PHP Form Validation</h4> <hr>";
		?>

		<?php
		// define variables and set to empty values
		$nameErr = $emailErr = $genderErr = $websiteErr = "";
		$name = $email = $gender = $comment = $website = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])) {
				$nameErr = "Name is required";
			} else {
				$name = test_input($_POST["name"]);
			}
			
			if (empty($_POST["email"])) {
				$emailErr = "Email is required";
			} else {
				$email = test_input($_POST["email"]);
			}
				
			if (empty($_POST["website"])) {
				$website = "";
			} else {
				$website = test_input($_POST["website"]);
			}

			if (empty($_POST["comment"])) {
				$comment = "";
			} else {
				$comment = test_input($_POST["comment"]);
			}

			if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
			} else {
				$gender = test_input($_POST["gender"]);
			}
		}

		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
		?>

		<h2>PHP Form Validation Example</h2>
		<p><span class="error">* required field</span></p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			Name: <input type="text" name="name">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>
			E-mail: <input type="text" name="email">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>
			Website: <input type="text" name="website">
			<span class="error"><?php echo $websiteErr;?></span>
			<br><br>
			Comment: <textarea name="comment" rows="5" cols="40"></textarea>
			<br><br>
			Gender:
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="other">Other
			<span class="error">* <?php echo $genderErr;?></span>
			<br><br>
			<input type="submit" name="submit" value="Submit">  
		</form>

		<?php
			echo "<h2>Your Input:</h2>";
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $website;
			echo "<br>";
			echo $comment;
			echo "<br>";
			echo $gender;
		?>
		

	</body>
</html>