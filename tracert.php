<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" />
<title>Network Tools :: Trace Route</title>
</head>

<body>
<div id="header"><img src="http://techvisionblog.in/wp-content/uploads/2011/09/reader.png" /> Network Test</div>
<br />
<div id="menu">
<ul>
<li><a href="index.htm">Ping</a></li>
<li><a href="dns.htm">DNS lookup</a></li>
<li><a href="tracert.php">Tracert</a></li>
<li>Whois</li>
</ul>

</div>

<br />
<br />
<br />
<hr />
<div id="form">
	<form action="trace.php" method="post" target="frame">
    <p>
    	<label>
        IP/Domain
        	<input type="text" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
        </label>
        
        <input type="hidden" name="b" />
   </p>
        <input type="submit" value="Submit" onClick="b.value=1"/>
   </form>
<iframe src="trace.php" name="frame" width="600px" frameborder="0" height="500px">
</iframe>
</div>     
</body>
</html>
