<html>
 <head>
  <title>PHP 测试</title>
 </head>
 <body>

<?php
$con = mysql_connect("localhost","ruiwen","password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("firstDB", $con);

$sql="INSERT INTO guestInfo (name, email)
VALUES
('$_POST[name]','$_POST[mail]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>

<p>你好，<?php echo htmlspecialchars($_POST['name']); ?>。</p>
<p>你的邮箱是 <?php echo htmlspecialchars($_POST['mail']); ?>。</p>
</form> </body>
</html>
