<?php session_start(); 
if(!isset($_SESSION["userName"]))
{
	header('Location:login.php');
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="../css/dashBoardStyle.css"/>
</head>

<body>
<table width="908" height="225" align="center">
  <tbody>
    <tr>
      <td colspan="2"><img src="../images/headerImage.png" width="900" height="100" alt=""/></td>
    </tr>
    <tr>
      <td width="432"></td>
      <td width="468"><ul>
        <li><a href="ThinkPad.html"> Home</a></li>
        <li><a href="myCreations.php">My Creations</a></li>
        <li><a href="viewAll.php">Community</a></li>
        <li><a href="">About Us</a></li>
      </ul></td>
    </tr>
    <tr>
      <td colspan="2"><div class="main-section">
      <div class="dashbord">
        <div class="icon-section"> <br />
          <img src="../images/add.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="#">My Profile </a> </div>
      </div>
      <div class="dashbord dashbord-green">
        <div class="icon-section"> <br />
          <img src="../images/icon3.png"="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="addCreation.php">Add Creations </a> </div>
      </div>
      <div class="dashbord dashbord-blue">
        <div class="icon-section"> <br />
          <img src="../images/icon2.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="viewMine.php">View My Creations</a> </div>
      </div>
      <div class="dashbord dashbord-skyblue">
        <div class="icon-section"> <br />
          <img src="../images/icon4.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="editCreations.php">Publish Creations</a> </div>
      </div>
      <div class="dashbord dashbord-red">
        <div class="icon-section"> <br />
          <img src="../images/edit.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="editCreations.php">Edit Creations </a> </div>
      </div>
      <div class="dashbord dashbord-orange">
        <div class="icon-section"> <br />
          <img src="../images/publish2.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="viewAll.php">View All Creations</a> </div>
      </div>
    </div></td>
    </tr>
  </tbody>
</table>
</body>
</html>
