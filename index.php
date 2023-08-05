<?php
// php variable example;

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


?>