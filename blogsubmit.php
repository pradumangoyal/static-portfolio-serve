<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="2; URL=http://localhost/about/">
<meta name="keywords" content="automatic redirection">
	<title>Blog Submitter</title>
</head>
<body>
<?php
$name=$_POST["name"];
$pws=$_POST["psw"];
date_default_timezone_set('Asia/Kolkata');
$abs=date("[d-m-Y, h:i:sa]");
$content=htmlspecialchars($_POST["contents"]);
$info="<div class=all>
<div class=light>$abs  <div class=text>$content</div></div>
<div class=author>By:- $name</div>
</div>";
if($pws=="1666")
{
echo "CONTENT POSTED!";
$myfile = fopen("./blogdata.txt", "a") or die("Unable to open file!");
fwrite($myfile, $info);
fclose($myfile);
}
else
	echo "WRONG PASSWORD CONTENT NOT POSTED!!";
?>
</body>
</html>