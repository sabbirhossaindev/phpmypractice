<?php
// php variable example;
echo('<h3>PHP variable Example</h3> <hr>');

echo "হ্যালো বাংলাদেশ!";
echo "হ্যালো পিএইচপি!<br>";
// একাধিক প্যারামিটার ব্যবহার করে
echo "I'm code lover <br>";
$textPartOne = "আমরা সবাই ";
$textPartTwo = "Code প্রেমী";

print "$textPartOne $textPartTwo <br>";
print "আমরা সবাই $textPartTwo <br>";

define("number", "01888559287");
echo number;
echo "<br>";

// php date tipe;
echo('<h3>PHP data type Example</h3> <hr>');
/*
ভ্যারিয়েবলের মধ্যে বিভিন্ন টাইপের ডেটা রাখা যায় এবং ভিন্ন ভিন্ন ডেটার মাধ্যমে ভিন্ন ভিন্ন কাজ করা যায়।
পিএইচপিতে নিম্নোক্ত ডেটা টাইপ সাপোর্ট করেঃ

Boolean - true অথবা false
Integer - পূর্ণসংখ্যা
String - অক্ষর সেট
Float - দশমিক সংখ্যা
Array - একাধিক ভ্যালু জমা রাখার জন্য ভ্যারিয়েবল
Object - ইউজার ডিফাইন্ড ডেটা টাইপ
NULL - ফাঁকা ভ্যারিয়েবল
Resource - বাহ্যিক ফাংশন বা রিসোর্সকে সনাক্ত বা রেফার করে
*/

#PHP Boolean Example
$t = true;
$f = false;
echo('<br>');

//Integer example
$year = 2015;
var_dump($year); // var_damp holo value type daka jabe.
echo "<br>";
//String example
$stringOne = "Hello i am ";
$stringTwo = "Sabbir Hossain";
$output = "$stringOne '.'$stringTwo";
// echo $output;
var_dump($output);
echo "<br>";

// Float example
$number = 9.999;
var_dump($number);
echo "<br>";

//Array example
$myArray = array("এইচটিএমএল","সিএসএস","জাভাস্ক্রিপ্ট");
var_dump($myArray);
echo "<br>";

// Object example
// ক্লাস তৈরি
class Subject{
    public $course = "PHP";
}

// একটি অবজেক্ট তৈরি
$learn = new Subject();
// অবজেক্টের প্রোপার্টিসমূহ প্রদর্শন
echo $learn->course;
echo "<br>";

// null example
$variable = null;
var_dump($variable);
echo "<br>";

//Resource example
/*
পিএইচপি বিশেষ ধরণের ডেটা টাইপ Resource প্রকৃত ডেটা টাইপ নয়। এটি প্রকৃতপক্ষে ফাংশন বা বাহ্যিক পিএইচপি রিসোর্স এর রেফারেন্স জমা রাখে।

রিসোর্স ডেটা টাইপ এর সাধারণ উদাহরণ হলো ডেটাবেজ কল করা।
*/

echo('<h3>PHP কনস্ট্যান্ট তৈরি Example</h3> <hr>');

//case-sensitive কনস্ট্যান্ট ডিফাইন
define("GREETING", "case-sensitive কনস্ট্যান্ট ডিফাইন");
echo GREETING . "<br>" . "<br>";
echo GREETING;
echo "<br>";

//case-insensitive কনস্ট্যান্ট ডিফাইন
define("START", "case-insensitive কনস্ট্যান্ট ডিফাইন",);
echo START . "<br>" . "<br>";
echo START;

//কনস্ট্যান্ট এর স্কোপ স্বয়ংক্রিয়ভাবেই গ্লোবাল এবং সমগ্র স্ক্রিপ্ট জুড়েই এটিকে ব্যবহার করা যায়।
define("CONCATE", "কনস্ট্যান্ট সর্বদাই গ্লোবাল!");
function localScope(){
    echo CONCATE;
}
localScope();

echo "<br>";

echo('<h3>PHP Operators Example</h3> <hr>');
/*
	Arithmetic অপারেটরঃ গানিতিক হিসাব-নিকাশ করে।
    Assignment অপারেটরঃ ভ্যারিয়েবলে ভ্যালু এসাইন/জমা করে।
    Comparison অপারেটরঃ দুই বা ততোধিক ভ্যালুর তুলনা করে।
    Increment/Decrement অপারেটরঃ ভ্যালু এক বৃদ্ধি/হ্রাস করে।
    Logical অপারেটরঃ সিন্ধান্ত গ্রহণে সহায়তা করে।
    String অপারেটরঃ স্ট্রিং এসাইন এবং দুটি স্ট্রিং একত্রিত করে।
    array অপারেটরঃ array এর মধ্যে তুলনা করে।
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

//Function Example
echo('<h3>PHP Function Example</h3> <hr>');
// function functionName() {
//     সম্পাদিত কোড ; // syntax
// }
function welcomeMsg(){
    echo "Welcome Guest";
}
welcomeMsg(); // ফাংশন কল 
echo "<br>";

// parameter Example;
function familyMember($name) {
    echo "Family member name:-  $name<br>";
}

familyMember("Sabbir");
familyMember("Nadim");
familyMember("Baba");
familyMember("Mama");
familyMember("Azmin");



?>

<!-- <?php
$user_name = "codemanbd";
$user_email = "sodemanbd@gail.com";

echo $user_name. "<br>" .$user_email;

?> -->