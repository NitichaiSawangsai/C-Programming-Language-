<?php
	//session_start();
	if($_SESSION['Username'] == ""){
		echo "Please Login!";
		exit();
	}
        	
/*	mysql_connect("localhost","root","root");
	mysql_select_db("mydatabase");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
*/
?>
<html>
<head>
	<title>Banking system</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
	<body>
	<form name="form1" method="post" action="save_profile.php">
	Edit Profile! <br>
  	<table width="400" border="1" style="width: 400px">
    	<tbody>
      		<tr>
        		<td width="125"> &nbsp;UserID</td> <td width="180">
          			<?php echo $_SESSION["Username"];?>
        		</td>
      		</tr>
     		<tr>
        		<td> &nbsp;Username</td>
        			<td>
          				<?php echo $_SESSION["Username"];?>
        			</td>
      		</tr>
      		<tr>
        		<td> &nbsp;Password</td>
        		<td><input name="txtPassword" type="password" id="txtPassword" value="<?php //echo $objResult["Password"];?>">
        		</td>
      		</tr>
      		<tr>
        		<td> &nbsp;Confirm Password</td>
        		<td><input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $_SESSION["Password"];?>">
        		</td>
     		</tr>
      		<tr>
        		<td>&nbsp;Name</td>
        		<td><input name="txtName" type="text" id="txtName" value="<?php //echo $objResult["Name"];?>"></td>
      		</tr>
      		<tr>
        		<td> &nbsp;Status</td>
        			<td> <?php echo $_SESSION['Status'];?>
     			</td>
      		</tr>
    	</tbody>
  	</table> <BR>
  		<input type="submit" name="Submit" value="Save">
	</form>
</body>
</html>
