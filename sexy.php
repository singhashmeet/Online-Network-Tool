<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
error_reporting(0);
{
if (($_GET["b"])!=0&&$_GET["b"]!=4)
$ashmeet="ping" . " " . $_GET["a"] . " -n " . $_GET["b"];
else
$ashmeet="ping" . " " . $_GET["a"];
}
if(isset($_GET["a"])){
$output =shell_exec($ashmeet);
echo "<pre> $output </pre><br>";
}

?>
</body>
</html>
