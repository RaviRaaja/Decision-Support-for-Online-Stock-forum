<?php
$server="localhost";
$username="root";
$passwd="";
$db="rr";
$connect=mysql_connect($server,$username,$passwd) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db($db,$connect) or die("Failed to connect to database: " . mysql_error());
$query="SELECT avg(ge) as cmpny_review  FROM (SELECT garc_value as ge FROM garc_entry ORDER BY gid  DESC LIMIT 3) As new;";
$result=mysql_query($query) or die ("no query please check");
while($row=mysql_fetch_array($result))
{
	$review_result1=$row['cmpny_review'];
}

$query1="SELECT positivepercent as user_review from reviewpercent order by positivepercent desc limit 1;";
$result1=mysql_query($query1) or die ("no query please check");
while($row=mysql_fetch_array($result1))
{
	$review_result2=$row['user_review'];
}
$review_result=(review_result1+review_result2)/2;
echo"REVIEW BASED ON People and Recent Company Market value generated by G_ARCH SAY'S ".$review_result."% you can go for the investment"; 
?>