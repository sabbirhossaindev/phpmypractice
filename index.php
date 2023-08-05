<?php
// php variable example;

echo "হ্যালো বাংলাদেশ!";
echo "হ্যালো পিএইচপি!<br>";
// একাধিক প্যারামিটার ব্যবহার করে
echo "স্যাট একাডেমী " , "বাংলাদেশের " , "বৃহত্তম " , "অনলাইন/অফলাইন " , "ফ্রী " , "আইটি " , "একাডেমী। <br>";
$textPartOne = "আমরা সবাই ";
$textPartTwo = "আইটি প্রেমী";

print "$textPartOne $textPartTwo <br>";
print "আমরা সবাই $textPartTwo <br>";

define("number", "01888559287");
echo number;

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
//Integer example
$year = 2015;
var_dump($year);



?>