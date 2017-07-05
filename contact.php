<html>

<head>

<script>

function que2()
{
document.getElementById("q2").style.visibility="visible";	
	
}

function que3()
{
document.getElementById("q3").style.visibility="visible";	
	
}

function que4()
{
document.getElementById("q4").style.visibility="visible";	
	
}

var mon=0;
function mark()
{
document.getElementById("q5").style.visibility="visible";			
if(document.getElementById("a13").checked==true) 
{
document.getElementById("mar").innerHTML+="1st answer correct<br>";
mon=mon+25;	
}

if(document.getElementById("a21").checked==true) 
{
document.getElementById("mar").innerHTML+="2st answer correct<br>";
mon=mon+25;	
}

if(document.getElementById("a32").checked==true) 
{
document.getElementById("mar").innerHTML+="3st answer correct<br>";

mon=mon+25;	
}

if(document.getElementById("a42").checked==true) 
{
document.getElementById("mar").innerHTML+="4st answer correct<br>";
mon=mon+25;	
}

document.getElementById("mar").innerHTML+="bk money you gained="+ mon;
document.getElementById("ma").value=mon;
}




</script>
<style>

#wel
{
	
top:17%;
left:20%;
width:60%;
height:70%;
position:absolute;
background-image: url("mon.jpg");
font-size:15
vw;
text-align:center;
font-family:forte;
text-shadow:1px 1px 1px red;



	
}
#mar{height:100%;
width:100%;

font-size:200%;
text-align:center;
font-family:forte;
text-shadow:1px 1px 1px red;
position:absolute;
  }
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
}
#q1
{
height:37%;
width:57%;
left:21%;
top:17%;
position:absolute;
}

#q2
{
height:37%;
width:57%;
left:21%;
top:17%;
position:absolute;
visibility:hidden;
}
#q3
{
height:37%;
width:57%;
left:21%;
top:17%;
position:absolute;
visibility:hidden;
}
#q4
{
height:37%;
width:57%;
left:21%;
top:17%;
position:absolute;
visibility:hidden;
}
#q5
{
height:37%;
width:57%;
left:21%;
top:17%;
position:absolute;
background-color:white;
visibility:hidden;
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

#out{
left:80%;
top:85%;	
position:absolute;
	
}


</style>
</head>
<body > 
<form method="POST" action ="contact.php">
<div id='bg'> <img  src='h.jpg' height='100%' width='100%'></div> 
<div id='q1'>
<center> 
<table height='90%' width='80%' border='3'>
<tr><td colspan='2' bgcolor='#003333'><center> <font color='white' size='5'>Who is the leading actor in 'Main Hoon Na'?</font> </center> </td>  </tr>
<tr>
<td bgcolor='#008080'><input name="a" id="a11"  type="radio"> Amitabh Bachan </td>
<td bgcolor='#00b3b3'><input name="a" id="a12" type="radio"> Salman Khan </td>
</tr>
<tr>
<td bgcolor='#00b3b3'><input name="a" id="a13"  type="radio"> Shahrukh Khan </td>
<td bgcolor='#008080'><input name="a" id="a14"  type="radio"> Abhishek Bachan </td>
</tr>
<tr><td colspan='2'> <center><input type='button' id='a1' value='next' onclick='que2()' ></center></td></tr>

</table>
  </center>
  </div>
  
  
  
  <div id='q2'>
<center> 
<table height='90%' width='80%' border='3'>
<tr><td colspan='2' bgcolor='#003333'><center> <font color='white' size='5'>In which movie do Saif Ali Khan and Rani Mukherjee star?</font> </center> </td>  </tr>
<tr>
<td bgcolor='#008080'><input name="b" id="a21"  type="radio"> HUM TUM </td>
<td bgcolor='#00b3b3'><input name="b" id="a22" type="radio"> KABHIE KHUSHI KABHI GAHM </td>
</tr>
<tr>
<td bgcolor='#00b3b3'><input name="b" id="a23"  type="radio"> DON </td>
<td bgcolor='#008080'><input name="b" id="a24"  type="radio"> ROCK ON </td>
</tr>
<tr><td colspan='2'> <center><input type='button' id='a2' value='next' onclick='que3()' ></center></td></tr>

</table>
  </center>
  </div>
  
   <div id='q3'>
<center> 
<table height='90%' width='80%' border='3'>
<tr><td colspan='2' bgcolor='#003333'><center> <font color='white' size='5'>Who is the leading actor in 'SULTAN'?</font> </center> </td>  </tr>
<tr>
<td bgcolor='#008080'><input name="q" id="a31"  type="radio"> Amitabh Bachan </td>
<td bgcolor='#00b3b3'><input name="q" id="a32" type="radio"> Salman Khan </td>
</tr>
<tr>
<td bgcolor='#00b3b3'><input name="q" id="a33"  type="radio"> Shahrukh Khan </td>
<td bgcolor='#008080'><input name="q" id="a34"  type="radio"> Abhishek Bachan </td>
</tr>
<tr><td colspan='2'> <center><input type='button' id='a3' value='next' onclick='que4()' ></center></td></tr>

</table>
  </center>
  </div>
  
   <div id='q4'>
<center> 
<table height='90%' width='80%' border='3'>
<tr><td colspan='2' bgcolor='#003333'><center> <font color='white' size='5'>In which movie do Shahrukh Khan and Kareena Kapoor star? </font> </center> </td>  </tr>
<tr>
<td bgcolor='#008080'><input name="d" id="a41"  type="radio"> HUM TUM </td>
<td bgcolor='#00b3b3'><input name="d" id="a42" type="radio"> KABHIE KHUSHI KABHI GAHM </td>
</tr>
<tr>
<td bgcolor='#00b3b3'><input name="d" id="a43"  type="radio"> DON </td>
<td bgcolor='#008080'><input name="d" id="a44"  type="radio"> ROCK ON </td>
</tr>
<tr><td colspan='2'> <center><input type='button' id='a4' value='done :D' onclick='mark()' ></center></td></tr>

</table>
  </center>
  </div>
  
<div id='q5'>
<input type ="text" name="ma" id="ma" size="1">
<input type="submit" name="s1" value="Add">
<span id='mar'>   </span>
</div> 
  
  
  


<div id='rope'><img src="rope.png" height='100%' width="100%"> </div>
<div id='book'><img src="book.png" height='100%' width="100%" onclick="menuvisible()"> </div>
<div id='curtop'> 
<div id='menu'>
<center>
<table height="20%" width="60%">
<tr>
      <td>     </td>
     <td> 
          <a href="index.php"><font style='forte' size='4' color='white'>HOME</font></a> 
     </td>
       
	   
	   </tr>
	   </table>
	   </center>
	   </div>
</div>
<div id='cur1'> <img src='curtain.jpg' height='100%' width='100%'></div>
<div id='cur2'> <img src='curtain.jpg' height='100%' width='100%'></div>


<div id='out'> <a href='logout.php'> <font color='red' size='6'>LOGOUT </font> </a></div>

<?php
if(isset($_POST['s1']))
{
	$am=$_POST['ma'];
	session_start();
	$name=$_SESSION['name'];
	$bal=$_SESSION['money'];
	
	$cn=mysql_connect('localhost:3306','root','argus');
	mysql_select_db('project');
	$r=mysql_query("update reg1 set bal=bal+$am where name='$name'");
	
echo "<div id='wel'><font color='black' size='10'>";	
echo $name."<br>";
echo "<font color='blue' size='8'>cash you have after gain=</font>".($bal+$am);
echo "<br><br>the gained amount will be added when you login the next time...so keep logging in and booking</font></div>";
}
?>
</form>
</body>
</html>