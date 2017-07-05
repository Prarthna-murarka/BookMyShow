<html>
<head>
<script>
function checke()
{
	var em,e;
	e=document.getElementById("e");
	em=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+.[a-zA-z.]{2,6}$/;
	if(!e.value.match(em))
	{
		document.getElementById("cespa").innerHTML="Invalid Email-Id";
		
	}
	else
	{
		document.getElementById("cespa").innerHTML="";

	}
	
}

function checkn()
{
	var pm,p;
	p=document.getElementById("n");
	pm=/^[0-9]{10,10}$/;
	if(!p.value.match(pm))
	{
		document.getElementById("cnspa").innerHTML="Please enter a valid number";
	
	}
	else
	{
		document.getElementById("cnspa").innerHTML="";

	}
	
}


function valid()
{
	var nm,em,pm;
	var n,p,e;
	
	p=document.getElementById("n");
	e=document.getElementById("e");
	
	pm=/^[0-9]{10,10}$/;
	em=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+.[a-zA-z.]{2,6}$/;
	
		if(p.value.match(pm))
		{
			if(e.value.match(em))
			{
			  
               document.getElementById('dn').style.visibility="visible";
			   alert("done");
			}
			else
			{
				alert("Enter Valid Id");
				
			}
		}
			else
			{
				alert("Enter Valid Contact");
			}
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
#dis
{
	height:30%;
	width:20%;
	top:24%;
	left:50%;
	
	position:absolute;
}

#dn{
left:30%;
top:40%;
position:absolute;	
visibility:hidden;	
	
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


<fieldset style="width:50%" ><legend>Register HERE</legend>
<form action="register.php" method="POST">
<table>
<tr>
	<td>Enter User Name </td>
	<td><input type="text" name ="un" size="20"></td>
	
</tr>
<tr>

	<td>Enter Password</td>
	<td><input type="password" name="p" size="20"></td>
</tr>
<tr>
	<td>Email-id  </td>
	<td><input type="text" name="id" size="20" id='e' onblur="checke()" ></td>
	<td><span id="cespa" style="color:red;"></span><td>
</tr>
<tr>
	<td>Contact</td>
	<td><input type="text" name="co" size="20" id='n' onblur="checkn()"></td>
	<td><span id="cnspa" style="color:red;"></span><td>
</tr>


</table>
<input type="button" name="s2" value="create" onclick='valid()'>
<div id='dn'><input type="submit" name="s1" value="done" ></div>


</fieldset>
</div>


<div id='cur1'> <img src='curtain.jpg' height='100%' width='100%'></div>
<div id='cur2'> <img src='curtain.jpg' height='100%' width='100%'></div>
<div id='dis'> </div>
<?php
$c=0;
$name;
$cont;
$id;
$pass;
if(isset($_POST['s1']))
{
	$name=$_POST['un'];
	$pass=$_POST['p'];
	$id=$_POST['id'];
	$cont=$_POST['co'];
	
	if($name=="" || $pass=="" || $cont==""||$id=="")
	{
		echo "<div id='dis'><font color='red' size='4'>";
			echo "fill all the details";
			echo "</font><div id='dis'>";
	}
	else 
	{
		$cn=mysql_connect('localhost:3306','root','argus');
		mysql_select_db('project');
		$r=mysql_query("select *from reg1 where name='$_POST[un]'");
		
		if(!$r)
		{
			echo mysql_error();
		}
		else
		{
	
			while($row=mysql_fetch_row($r))
			{
				$c++;
			}
	
		}
		if($c==0)
		{
			$r=mysql_query("insert into reg1 value('$_POST[un]','$_POST[p]','$_POST[id]','$_POST[co]','500')");
			if(!$r)
			{   echo "<div id='dis'><font color='red' size='4'>";
				echo "account could not be created due to some error"; 
				echo "</font></div>";
				echo mysql_error();
			}
			else
			{   echo "<div id='dis'><font color='red' size='4'>";
				echo "account created "; 
				echo "</font></div>";
			}
		}
		else 
		{   echo "<div id='dis'><font color='red' size='4'>";
			echo "Try another User Name ";
			echo "</font><div id='dis'>";
		}
	}
	

}
?>


</body>
</html>

