<html>
<head>
<style>

#aler{
	top:30%;
	left:45%;
	position:absolute;
	background-color:yellow;
	height:30%;
	width:20%;
	
	
}
</style>
</head>
<body>
<?php
$uname=$_POST['un'];
$passw=$_POST['p'];
$c=0;
$b=0;
try
{
	$c=0;
	$b=0;
	$booked;
	$cn=mysql_connect('localhost:3306','root','argus');
	mysql_select_db('project');
	$r=mysql_query("select *from reg1 where name='$_POST[un]' and pass='$_POST[p]'");
	$s=mysql_query("select *from bookn where status=1");
	if(!$r)
	{
		echo $mysql_error();
	}
	else
	{
		while($row=mysql_fetch_row($r))
		{
			$c++;
			session_start();
			$_SESSION['name']=$row[0];
			
			session_start();
			$_SESSION['money']=$row[4];
			
			session_start();
			$_SESSION['eid']=$row[2];
			
			session_start();
			$_SESSION['pn']=$row[3];
			
			
		}
		
		while($row=mysql_fetch_row($s))
		{
			$b++;
							
			
		}
		
		
		
		
		
	}
	if($c>0)
	{    
      session_start();
	  $_SESSION['booked']=$booked;
	  session_start();
	  $_SESSION['no']=$b;
	  
	  
	  
	  $_SESSION['sec']=session_id();
	  header("location:index.php");
	  
	    
	}
    else
    {
		
			
		header("location:login.html");
        echo  "<script>alert('User Name or Password not Same')</script>";
    }
}
catch(Exception $e)
{
	echo $e;
}	
    
mysql_close();


	?>
	<div id='aler'> </div>
	</body>
</html>	