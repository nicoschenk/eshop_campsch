<!doctype html>
<!--
 * Created by PhpStorm.
 * User: nico.schenk
 * Date: 18.12.2015
 * Time: 10:56
-->

<html>
<head>
    <title>Campsch Webshop Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="wrapper1">
    <h1>Webshop Login</h1>
	

    <p>Please login to use our webshop. <br> If you don't have an account, please register.</p>
    <!--wenn dem URL err=37 mitgegeben wird(also fehler bei login) wird ein Error Text ausgegeben-->
	<?php if(@$_GET['err'] == 37) {?>
		<div class="error-text">Login incorrect. Please try again</div>
	<?php } ?>	
	
	<form class="form" method="post" action="../index.php">
        <input type="text" class="name" name="username" id="username" placeholder="Name">
        <div>
            <p class="name-help">Please enter your username:</p>
        </div>
        <input type="password" class="password" name="password" id="password" placeholder="Password">
        <div>
            <p class="password-help">Please enter your password:</p>
        </div>
        <br>
        <input type="submit" class="submit" name="op"  value="Login">
    </form>
    <br>
    <form action="../index.php" method="get">
        <input type="submit" class="submit" name="op" value="Register">
    </form>

</div>
    <p class="optimize">
        Optimized for Firefox!
    </p>
    <div id="footer">
        <p>Copyright &copy; Company Campsch 2015. All Rights Reserved. Design by: Nico Schenk & Thomas Campbell</p>
    </div>
</body>
</html>