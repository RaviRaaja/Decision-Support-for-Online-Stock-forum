
<?php

session_start();
// Starting Session

//if( isset($_SESSION["userName"]) )

{
echo"hi";
$hostname="localhost";

$username="root";

$password="";

$dbhandle=mysql_connect($hostname,$username,$password);

$selectdb=mysql_select_db("rr",$dbhandle);

$name=$_POST['name'];
echo $name;
$mailid=$_POST['email'];
echo $mailid;
$site=$_POST['web'];
echo $site;
$comment=$_POST['message'];
echo $comment;
//$qtn=$_GET['question'];

$resul=mysql_query("INSERT INTO comment(name,mailid,website,cmnt) VALUES('$name','$mailid','$site','$comment');");

$sqlQry	="SELECT max(cid) AS latest FROM comment";

$res_qry=mysql_query($sqlQry);

while($row = mysql_fetch_array( $res_qry )) 

{
	
//print_r( $row);
	
$user_id = $row['latest'];

//$userans= $row['qtn'];
    
$_SESSION['id']=$user_id;

}	

if(1)

{

header('Location: cmntfeedback.php'); // Redirecting To Home Page

}

else

{
  
  echo"Validation doesn't match!!!Unable to post your comment";

}

}

/*else

{
   
header('Location: index.html');

}*/

?>



<!--?php
session_destroy();
?-->
