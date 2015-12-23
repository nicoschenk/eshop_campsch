<!doctype html>
<!--
 * Created by PhpStorm.
 * User: nico.schenk
 * Date: 18.12.2015
 * Time: 10:56
-->
<html>
<head>
    <title>Campsch Webshop Register</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="wrapper1">
    <h1>Webshop Register</h1>
    <p>Please enter a username and a password for your account:</p>

    <?php if(@$_GET['err'] == 12) {?>
        <div class="error-text">Password doesn't match. Please try again</div>
    <?php } ?>

    <form class="form" method="post" action="../index.php">
        <input type="text" class="name" name="username" placeholder="Username" required>
        <div>
            <p class="name-help">Please enter a username:</p>
        </div>
        <input type="password" class="password" name="password1" placeholder="Password" required>
        <div>
            <p class="password-help">Please enter a password:</p>
        </div>
        <input type="password" class="password" name="password2" placeholder="Password" required>

		<div>
            <p class="password-help">Please re-enter your password:</p>
		</div>
        <br>
        <input type="submit" class="submit" name="op" value="Next">
    </form>
    <br>
    <form action="../index.php" method="post">
        <input type="submit" class="submit" name="op" value="Back to Login">
    </form>
</div>
<p class="optimize">
    Optimized for Firefox!
</p>
</body>
</html>
