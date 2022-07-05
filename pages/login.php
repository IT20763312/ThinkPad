<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="../css/loginStyle.css">
	
</head>

<body >
<form action="login.php" method="post">
<table width="908" height="225" align="center">
  <tbody>
    <tr>
      <td colspan="2"><img src="../images/headerImage.png" width="900" height="100" alt=""/></td>
    </tr>
    <tr>
      <td width="429"> </td>
      <td width="471"><ul>
  <li><a href="ThinkPad.html"> Home</a></li>
  <li><a href="myCreations.php">My Creations</a></li>
  <li><a href="viewAll.php">Community</a></li>  
  <li><a href="">About Us</a></li>
   
  
</ul></td>
    </tr>
    <tr>
     <td height="299" colspan="2"><table width="324" height="268" border="0" align="center">
      <tr>
        <td width="294"><p class="imgcontainer">&nbsp;</p>
          <p class="imgcontainer"><img src="../images/add.png" alt="Avatar" width="63%" height="195" class="avatar" />
            
          </p>
          <div class="container">
            <p>
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="txtuname" required>
        
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="txtpassword" required>
            </p>
            <p>
			  <?php
				if(isset($_POST["btnsubmit"]))
				{
			  		$userName = $_POST["txtuname"]; 
			  		$password = $_POST["txtpassword"];
					
					$con = mysqli_connect("localhost","root","","creationdb");
					if(!$con)
					{
						die("Cannot conect to the database server");
					}
					
					$sql = "SELECT * FROM `tbluser` WHERE `email`='".$userName."' AND `password`='".$password."';";
					$results = mysqli_query($con,$sql);
				
					if(mysqli_num_rows($results)>0)
					{
						$_SESSION["userName"] = $userName;
						header('Location:myCreations.php');
					}
					else
					{
						echo"Username Or Password is incorrect";
					}
				}
			  ?>
			  </p>
    
      <button type="submit" name="btnsubmit" >Login</button>
      <label>
        <input type="checkbox" checked="checked" name="cnkremember"> Remember me
      </label>
</div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>&nbsp;</td>
      </tr>
    </table></td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>
