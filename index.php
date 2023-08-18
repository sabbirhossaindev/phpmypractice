<?php
// php variable example;
//php Advance topic Example
echo('<h1>PHP Basic topic Example</h1> <hr>');


// ai 4 ta diya ak file hote onno file a dta adan prodan kore jay
// include('');
// include_once('');
// require('');
// require_once('');

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

echo "<br>";
function setNumber($number = 5){
    echo "Number is $number <br>";
}
setNumber(15);
setNumber(10);
setNumber(); // এটি ডিফল্ট মানটি নিবে

// function number Of Sum and concate
function numberOfSum(){
    $courseFeeOne = 6000;
    $courseFeeTwo = 3000;
    $Interning = 1500;
    echo "Total Need Amount: " .$courseFeeOne + $courseFeeTwo + $Interning;
}
numberOfSum();

echo "<br>";

// global variable for function
$age = 21;
function myAge(){
    global $age;
    echo "My Age: ". $age;
}
myAge();
echo "<br>";
//Super globle scope Example
echo('<h3>PHP Super globle scope Example</h3> <hr>');

$numberOne = 55;
$numberTwo = 44;

function sum(){
	$GLOBALS['total'] = $GLOBALS['numberOne'] + $GLOBALS['numberTwo'];
}

sum();
echo "GLOBLE:- The sum of ".$total;
echo "<br>";


echo $_SERVER['PHP_SELF']. "<br>";
echo $_SERVER['SERVER_NAME']. "<br>";
echo $_SERVER['HTTP_HOST']. "<br>";
echo $_SERVER['HTTP_USER_AGENT']. "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

//php array Example
echo('<h3>PHP Array Example</h3> <hr>');

echo"<b>Index array</b> <br>";
$subject = array("এইচটিএমএল", "সিএসএস", "জাভাস্ক্রিপ্ট", "পিএইচপি");
echo $subject['0'].'<br>';
echo $subject['1'].'<br>';
echo $subject['2'].'<br>';
echo $subject['3'].'<br>';

echo "<br>";

$subject = array("এইচটিএমএল","সিএসএস","জাভাস্ক্রিপ্ট","পিএইচপি");
	echo "আমি ". $subject[0]. ", " . $subject[1] . ", " . $subject[2] . ", " . $subject[3] . " ইত্যাদি" . " শিখতে চাই।";
echo "<br>";

$subject = array("এইচটিএমএল","সিএসএস","জাভাস্ক্রিপ্ট","পিএইচপি");
echo count($subject);
echo "<br>";

$subject = array("এইচটিএমএল","সিএসএস","জাভাস্ক্রিপ্ট","পিএইচপি");
	$arraylength = count($subject);

for($i = 0; $i < $arraylength; $i++) {
    echo $subject[$i];
    echo "<br>";
}

echo "<b>পিএইচপি Associative Array</b> <br>";

$age = array("Aziz"=>"32", "Saleh"=>"23", "Zehad"=>"22");
	echo "সালেহর বয়স " . $age['Saleh'] . " বছর।";
echo "<br>";

$age = array("Aziz"=>"32", "Saleh"=>"23", "Zehad"=>"22");
	foreach($age as $name => $years) {
    echo "Key=" . $name . ", Value=" . $years . "<br>";
    }

//পিএইচপি Array সর্টিং Example
echo('<h3>PHP Array সর্টিং Example</h3> <hr>');

echo "<b>পিএইচপি sort() example</b> <br>";
$subject = array("HTML", "CSS", "JAVASCRIPT", "PHP");
	sort($subject);
	$arraylength = count($subject);

	for($i = 0; $i < $arraylength; $i++){
		echo $subject[$i] . "<br>";
	}
    
echo "<br>";
$age = array("Zehad"=>"22", "Saleh"=>"23", "Aziz"=>"32");
	asort($age);

	foreach($age as $name => $age) {
		echo "Key=" . $name . ", Value=" . $age . "<br>";
	}

echo "<br>";
echo "<b>পিএইচপি ksort() example</b> <br>";
$age = array("Zehad"=>"22", "Saleh"=>"23", "Aziz"=>"32");
	ksort($age);

	foreach($age as $name => $age) {
	 echo "Key=" . $name . ", Value=" . $age . "<br>";
	}

echo "<br>";
echo "<b>পিএইচপি rsort() example</b> <br>";
$subject = array("HTML", "CSS", "JAVASCRIPT", "PHP");
	rsort($subject);
	$arraylength = count($subject);

	for($i = 0; $i < $arraylength; $i++){
		echo $subject[$i] . "<br>";
	}

echo "<br>";
echo "<b>পিএইচপি arsort() example</b> <br>";
$age = array("Zehad"=>"23", "Saleh"=>"22", "Aziz"=>"32");
	arsort($age);

	foreach($age as $name => $age) {
	 echo "Key=" . $name . ", Value=" . $age . "<br>";
	}

echo "<br>";
echo "<b>পিএইচপি krsort() example</b> <br>";
$age = array("Zehad"=>"23", "Saleh"=>"22", "Aziz"=>"32");
	krsort($age);

	foreach($age as $name => $age) {
	 echo "Key=" . $name . ", Value=" . $age . "<br>";
	}

echo "<br>";

//php form Example
echo('<h3>PHP Form Example</h3> <hr>');

//php Advance topic Example
echo('<h1>PHP Advance topic Example</h1> <hr>');
/*
 d - মাসের মধ্যে একটি দিনকে রিপ্রেজেন্ট করে (১ থেকে ৩১)।
m - মাসকে রিপ্রেজেন্ট করে (১ থেকে ১২)।
Y - একটি বৎসরকে রিপ্রেজেন্ট করে (চার ডিজিটে)।
l(ছোট অক্ষরের 'L') - সপ্তাহের একটি দিনকে রিপ্রেজেন্ট করে।
*/
//php date Example
echo('<h3>PHP Date and Time Example</h3> <hr>');
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";
echo "Today is " . date('d F Y, l'). "<br>"; // date month year and day

// time exam ple
/*
h - 12-hour ফরম্যাটের ঘন্টাকে নির্দেশ করে যা শুন্য(০) থেকে শুরু হয়(00 থেকে 12)
i - মিনিটকে নির্দেশ করে যা শুন্য(০) থেকে শুরু হয়(00 থেকে 59)
s - সেকেন্ডকে নির্দেশ করে যা শুন্য(০) থেকে শুরু হয়(00 থেকে 59)
a - ছোট অক্ষরের Ante meridiem(am) এবং Post meridiem(pm)
*/
date_default_timezone_set("Asia/Dhaka");
echo "The time is " . date("h:i:sa")."<br>";

$date= date('2023-08-25 10:27: 09');
echo date('d F Y, h:i:s a', strtotime($date))."<br>";


// $startdate = strtotime("Saturday");
// $enddate = strtotime("+6 weeks", $startdate);
// while ($startdate < $enddate) {
//   echo date("M d", $startdate) . "<br>";
//   $startdate = strtotime("+1 week", $startdate)."<br>";
// }

//php date Example
echo('<h3>PHP include এবং require Example</h3> <hr>');
/*
include স্টেটমেন্ট শুধুমাত্র একটি warning দেখাবে (E_WARNING) কিন্তু স্ক্রিপ্টের এক্সিকিউশন বন্ধ করবে না।
require স্টেটমেন্ট fatal error তৈরি করবে (E_COMPILE_ERROR) এবং স্ক্রিপ্টের এক্সিকিউশন বন্ধ করে দিবে।

*/

//PHP File Handling
echo('<h3>PHP PHP File Handling Example</h3> <hr>');
echo readfile("webdictionary.txt")."<br>";

echo('<h3>PHP File Open/Read/Close Example</h3> <hr>');
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile)."<br>";

$myfile = fopen("webdictionary.txt", "r");
// some code to be executed....
fclose($myfile)."<br>";

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile)."<br>";

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile)."<br>";


?>