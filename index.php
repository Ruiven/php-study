
<?php
require_once __DIR__.'/lib/Medoo.php';


$database_config = require __DIR__.'/config/database.php';
$medoo = @new Medoo($database_config);
$medoo->query('set names utf8');

$count = $medoo->count('guestInfo', ['id[>]'=>0]);

?>

 <head>

  <meta charset="utf-8">
<style type="text/css">
 h1{
  -webkit-animation-duration: 2s;
  -moz-animation-duration: 2s;
  -webkit-animation-name: slidein;
  -moz-animation-name: slidein;
}
@-webkit-keyframes slidein {
  from {
    padding-left: 100%;
    width: 300%;
  }

  to {
    padding-left: 0%;
    width: 100%;
  }
}

@-moz-keyframes slidein {
  from {
    padding-left: 100%;
    width: 300%;
  }

  to {
    padding-left: 0%;
    width: 100%;
  }
}
</style>

  <title>欢迎来到并没有什么用的网站！</title>
 </head>
 <body>
 	<h1 align = "center">欢迎来到并没有什么用的网站！</h1>
 	<hr />
 	<p align = "center"><em>请登记一下姓名和邮箱吧，我们会悄悄地记录下来（并不会，因为我还没学到这个功能）</em></p>
	<form align = "center" action="action.php" method="post">
	 <p>姓名: <input type="text" name="name" /></p>
	 <p>邮箱: <input type="text" name="mail" /></p>
	 <p><input type="submit" value="提交"/></p>

   <p><?php echo "现在已经有" .$count. "位小伙伴加入了我们！"; ?></p>



	</form> </body>

