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



</style>
</head>
<body > 
<div id='bg'> <img  src='h.jpg' height='100%' width='100%'></div> 
<div id='screen'>   </div>


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

<div id='reg'>


<fieldset style="width:50%" ><legend>LOGIN HERE</legend>
<form method="POST" action="loginc.php">
<table>
<font size
<tr>
	<td>Enter User Name </td>
	<td><input type="text" name ="un" size="20"></td>
</tr>
<tr>

	<td>Enter Password</td>
	<td><input type="password" name="p" size="20"></td>
</tr>

</table>
<input type="submit" name="s1" value="login">



</fieldset>
</div>


<div id='cur1'> <img src='curtain.jpg' height='100%' width='100%'></div>
<div id='cur2'> <img src='curtain.jpg' height='100%' width='100%'></div>

<?php

	echo "Logged out scuccessfully";
    
    session_start();
	session_destroy();
	
	

?>

</body>
</html>