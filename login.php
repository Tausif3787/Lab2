<?php
echo "registration successful<br>";
$usr=$_POST['un'];
$ful=$_POST['fn'];
$eml=$_POST['email'];
$phn=$_POST['phn'];
$pass=$_POST['pw'];
$Gen=$_POST['Rad1'];
$Edu1=$_POST['edu1'];
$Edu2=$_POST['edu2'];
$Edu3=$_POST['edu3'];
$Edu4=$_POST['edu4'];


echo "User name:".$usr."<br>";
echo "Full name:".$ful."<br>";
echo "Email:".$eml."<br>";
echo "Phone:".$phn."<br>";
echo "Password:".$pass."<br>";
echo "Gender:".$Gen."<br>";
echo "education".<ul>
		<li>$Edu1</li>
	</ul>;
?>