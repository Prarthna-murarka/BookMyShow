<html>
<head>
<script>
var k=0;
	
	var t=new Array();
function book(r)
{
	t[k]=r;
	
k++;
}

function bk()
{
	alert(" no of seat booked "+k);
}

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

#m1{height:70%;
width:50%;
top:20%;
background-color:black;
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
top:95%;
border-left-radius:25%;
position:absolute;
left:54%;	
	
	
	
}

#st{height:70%;
width:50%;
top:21%;
border-radius:10%;
position:absolute;
left:20%;
border-style: solid;
border-color: red;
overflow:hidden;

}

#wel
{
	top:0%;
height:20%;
width:20%;
position:absolute;
left:70%;
	
}

td
{
	text-shadow: 2px 2px pink;
	
}

#s1h
{
height:3.5%;
position:absolute;
width:4%;
left:32.5%;
background-color:black;
top:47%;
opacity:0.9;

}




#s2h
{
height:3.5%;
position:absolute;
width:2.2%;
left:38%;
background-color:black;
top:47%;
opacity:0.9;
}

}
#s3h
{
height:3.5%;
position:absolute;
width:4%;
left:43%;
background-color:black;
top:47%;
opacity:0.9;

}
#s4h
{
height:3.5%;
position:absolute;
width:4%;
left:48%;
background-color:black;
top:47%;
opacity:0.9;

}
#s5h
{
height:3.5%;
position:absolute;
width:4%;
left:52%;
background-color:black;
top:47%;
opacity:0.9;

}

#s6h
{
height:3.5%;
position:absolute;
width:4%;
left:32%;
background-color:black;
top:55%;
opacity:0.9;

}

#s7h
{
height:3.5%;
position:absolute;
width:4%;
left:37%;
background-color:black;
top:55%;
opacity:0.9;

}

#s8h
{
height:3.5%;
position:absolute;
width:4%;
left:43%;
background-color:black;
top:55%;
opacity:0.9;

}

#s9h
{
height:3.5%;
position:absolute;
width:4%;
left:48%;
background-color:black;
top:55%;
opacity:0.9;

}

#s10h
{
height:3.5%;
position:absolute;
width:4%;
left:52%;
background-color:black;
top:55%;
opacity:0.9;

}

#s11h
{
height:3.5%;
position:absolute;
width:4%;
left:32%;
background-color:black;
top:64%;
opacity:0.9;

}

#s12h
{
height:3.5%;
position:absolute;
width:4%;
left:37%;
background-color:black;
top:64%;
opacity:0.9;

}

#s13h
{
height:3.5%;
position:absolute;
width:4%;
left:43%;
background-color:black;
top:64%;
opacity:0.9;

}

#s14h
{
height:3.5%;
position:absolute;
width:4%;
left:48%;
background-color:black;
top:64%;
opacity:0.9;

}

#s15h
{
height:3.5%;
position:absolute;
width:4%;
left:52%;
background-color:black;
top:64%;
opacity:0.9;

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



<div id='m1'>   </div>
<div id='st'>
<center>
<form type="GET" action="booked.php">
<font color='red' size='5'> ------screen------</font>
<table height="50%" width="50%">
<font color="white">
<br><br><br><br>
<tr>

<td>s1<input type='radio'' name='s' id='s1' value='s1' > </td>
<td>s2<input type='radio'' name='s' id='s2' value='s2'>               </td>
<td>s3<input type='radio'' name='s' id='s3' value='s3'>               </td>
<td>s4<input type='radio'' name='s' id='s4' value='s4'>               </td>
<td>s5<input type='radio'' name='s' id='s5' value='s5'>               </td>

</tr>
<br><br>
<tr>

<td>s6<input type='radio''  name='s' value='s6'> </td>
<td>s7<input type='radio''  name='s' value='s7'>               </td>
<td>s8<input type='radio''  name='s' value='s8'>               </td>
<td>s9<input type='radio''  name='s' value='s9'>               </td>
<td>s10<input type='radio''  name='s' value='s10'>               </td>

</tr>
<br><br>
<tr>

<td>s11<input type='radio''  name='s' value='s11'>               </td>
<td>s12<input type='radio''  name='s' value='s12'>               </td>
<td>s13<input type='radio''  name='s' value='s13'>               </td>
<td>s14<input type='radio''  name='s' value='s14'>               </td>
<td>s15<input type='radio''  name='s' value='s15'>               </td>

</tr>

<tr>
<td><input type="submit" id="sb" value="book"></td>
</tr>
</font>
</table>
</form>
<font color='white' size='3'>seats which you are not able to select are already booked</font><br> 
<font color='red' size='5'>Each ticket cost only Rs.200 which will be deducted from your<font color='white' size='5'> account</font></font>
</center>

</div>

<div id='cur1'> <img src='curtain.jpg' height='100%' width='100%'></div>
<div id='cur2'> <img src='curtain.jpg' height='100%' width='100%'>

</div>

<?php
	session_start();
	$name=$_SESSION['name'];
	
	$bal=$_SESSION['money'];
	
	

	
	
	
	
echo "<div id='wel'><font color='white' size='5'>";
echo"welcome ".$name."<br>";
echo "<font color='blue' size='3'>bk cash you have</font>".$bal;
echo "</font></div>";




	$cn=mysql_connect('localhost:3306','root','argus');
	mysql_select_db('project');
	$s=mysql_query("select *from bookn where status=1");


if(!$s)
	{
		echo $mysql_error();
	}
	else
	{
				
		while($row=mysql_fetch_row($s))
		{
		  
		   $g=$row[0];
            
			if($g=='s1')
			{
				echo "<div id='s1h'></div>";
			}	
			if($g=='s2')
			{
				echo "<div id='s2h'></div>";
			}	
			if($g=='s3')
			{
				echo "<div id='s3h'></div>";
			}	
			if($g=='s4')
			{
				echo "<div id='s4h'></div>";
			}	
			if($g=='s5')
			{
				echo "<div id='s5h'></div>";
			}	
			
						if($g=='s6')
			{
				echo "<div id='s6h'></div>";
			}
						if($g=='s7')
			{
				echo "<div id='s7h'></div>";
			}
						if($g=='s8')
			{
				echo "<div id='s8h'></div>";
			}
						if($g=='s9')
			{
				echo "<div id='s9h'></div>";
			}
						if($g=='s10')
			{
				echo "<div id='s10h'></div>";
			}
			
				
			
				if($g=='s11')
			{
				echo "<div id='s11h'></div>";
			}
			
				if($g=='s12')
			{
				echo "<div id='s12h'></div>";
			}
			
				if($g=='s13')
			{
				echo "<div id='s13h'></div>";
			}
			
				if($g=='s14')
			{
				echo "<div id='s14h'></div>";
			}
			if($g=='s15')
			{
				echo "<div id='s15h'></div>";
			}
			
  
			
		}
	}


?>

</body>
</html>