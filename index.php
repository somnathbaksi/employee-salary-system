<?php 
	require_once("database.php");
	require_once("functions.php");
	$db = new myclass;
?>
<?php 
	$sql="SELECT * FROM office WHERE id <> '0'";
	$data=GetRecords($sql);
?>
<form name="login" method="post" action="checklogin.php">
  <table width="40%" border="1"  align="center">
    <tr>
	<td colspan="2" align="center"><b>Welcome to Employee Management System
	</td>
	</tr>
	<tr> 
      <td colspan="2">Login</td>
    </tr>
    <tr> 
      <td>Username</td>
      <td><select name="username" id="username">

              <?php for($i=0;$i<count($data);$i++){ ?>
              <option value="<?php echo $data[$i]["id"]; ?>"> 
              <?php echo $data[$i]["office_name"];?>
              </option>
              <?php } ?>
	  	  </select></td>
    </tr>
    <tr> 
      <td>Passowrd</td>
      <td><input name="password" type="password" id="password"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Login"></td>
    </tr>
  </table>
</form>

