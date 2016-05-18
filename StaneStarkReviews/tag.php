<?php
session_start();// Starting Session
//if( isset($_SESSION["userName"]) )
{
echo"Review say's		";
$hostname="localhost";
$username="root";
$password="";

$dbhandle=mysql_connect($hostname,$username,$password);
$selectdb=mysql_select_db("rr",$dbhandle);
$tfback=0;
$pfback=0;
$nfback=0;
$positivepercent=0;
$negativepercent=0;
$sqlQry		=	"SELECT count(*) as tfback FROM comment";
$res_qry	=	mysql_query($sqlQry);
while($row = mysql_fetch_array( $res_qry )) 
{
         $tfback=$row['tfback'];	 
	 
}
$sqlQry1    =	"SELECT count(*) as pfback FROM comment where fback='positive'";
$res_qry1	=	mysql_query($sqlQry1);
while($row = mysql_fetch_array( $res_qry1 )) 
{
         $pfback=$row['pfback'];	 
	 
}	 

$sqlQry2		=	"SELECT count(*) as nfback FROM comment where fback='negative'";
$res_qry2	=	mysql_query($sqlQry2);
while($row = mysql_fetch_array( $res_qry2 )) 
{
         $nfback=$row['nfback'];	 
	 
}	 
$positivepercent=($pfback*100)/$tfback;
$negativepercent=($nfback*100)/$tfback;

$sqlQry3		=	"INSERT INTO reviewpercent (positivepercent,negativepercent)values('$positivepercent','$negativepercent')";
$res_qry3	=	mysql_query($sqlQry3);



echo$positivepercent."%";

echo"	";
echo"people suggest you to invest";
session_destroy();
//header('Location: mypage.html');
}
?>