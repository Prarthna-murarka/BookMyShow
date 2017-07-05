<html>
<head>
<script>




</script>
<style>
#cur1
{
height:100%;
width:5%;
left:0%;
top:0%;
position:absolute;

}


#cur2
{
height:100%;
width:5%;
right:0%;
top:0%;
position:absolute;

}



#curtop
{
height:10%;
width:100%;
right:0%;
top:0%;
position:absolute;
animation-name: curopentop;
animation-duration: 5s;
background-color:black;
opacity:0.7;

}
#menu
{
width:60%;
height:100%;
left:200%;

}
@keyframes curopentop
{
    0%{ height:0%;}
 
	 100%{height:10%;}
}

#bg
{
height:100%;
width:100%;
right:0%;
top:0%;
position:absolute;
opacity:0.6;
}


#screen
{
height:37%;
width:57%;
left:21%;
top:17%;
position:absolute;
background-color:white;
opacity:0.5;


}


a{
text-decoration:none;
}


#movie{
height:50%;
width:100%;
background-color:yellow;
position:absolute;
}

#book{
height:19%;
width:13%;
left:82.5%;
top:25%;
position:absolute;
}

#book:hover
{
transition-duration: 6s;
transform: rotate(360deg);
}
#rope{
height:65%;
width:10%;
position:absolute;
left:85%;
}
#reg
{height:70%;
width:80%;
top:21%;

position:absolute;
left:25%;
}

#m1{height:50%;
width:29%;
top:25%;
border-radius:10%;
position:absolute;
left:20%;
border-style: solid;
border-color: red;
overflow:hidden;
}

#m1b
{
	
height:10%;
width:20%;
top:87%;
border-left-radius:25%;
position:absolute;
left:54%;	
		
}

#wel
{
	top:0%;
height:20%;
width:20%;
position:absolute;
left:70%;
	
}

#ds
{
height:10%;
top:57%;
left:35%;
width:20%;
position:absolute;

	
}

#tic
{
width:50%;
height:35%;
top:33%;
position:absolute;
left:24%;
	
border:solid black 10px;	
border-radius:0%;
overflow:hidden;	
	
}

#out{
left:80%;
top:85%;	
position:absolute;
	
}

</style>
</head>
<body > 
<div id='bg'> <img  src='h.jpg' height='100%' width='100%'></div> 



<div id='rope'><img src="rope.png" height='100%' width="100%"> </div>
<div id='book'><img src="book.png" height='100%' width="100%" onclick="menuvisible()"> </div>
<div id='curtop'> 
<div id='menu'>
<center>
<table height="20%" width="60%">
<tr>
      <td>     </td>
     <td> 
          <a href="index.html"><font style='forte' size='4' color='white'>HOME</font></a> 
     </td>
        
	   </tr>
	   </table>
	   </center>
	   </div>
</div>



<div id='tic'> <img src='tic.jpg' height='100%' width='100%'></div>
<div id='cur1'> <img src='curtain.jpg' height='100%' width='100%'></div>
<div id='cur2'> <img src='curtain.jpg' height='100%' width='100%'></div>
<div id='out'> <a href='logout.php'> <font color='red' size='6'>LOGOUT </font> </a></div>
<?php
	session_start();
	$name=$_SESSION['name'];
	$bal=$_SESSION['money'];
	
	
echo "<div id='wel'><font color='white' size='5'>";	
echo"welcome ".$name."<br>";
echo "<font color='blue' size='3'>bk cash you have</font>".($bal-200);
echo "</font></div>";


	
	
	
			
		
		$seatno=$_GET['s'];
		echo "<div id='ds'><font color='yellow' size='10'>";
		echo "seat no.".$seatno;
		echo "</font></div>";
		
		$cn=mysql_connect('localhost:3306','root','argus');
	mysql_select_db('project');
	$r=mysql_query("update bookn set status=1 where seat='$_GET[s]'");
		$t=mysql_query("update reg1 set bal=bal-200 where name='$name'");
	



  echo   "<center><input type='text' value='$name' ></center>";
  
  


$to = "chahat.murarka@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);


?>

</body>
</html>