<!doctype html>
<!--
 * Created by PhpStorm.
 * User: nico.schenk
 * Date: 18.12.2015
 * Time: 10:56
-->
<html>
<head>
    <title>Campsch Webshop Customer</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="wrapper1">
    <h1>Webshop Customer</h1>
    <p>Please enter your billing/shipping address and click on "Send":</p>
    <form class="form" method="post" action="../index.php">
        <input type="text" class="name" name="name" placeholder="Name" required>
        <div>
            <p class="name-help">Please enter your name:</p>
        </div>
        <input type="text" class="prename" name="prename" placeholder="Prename" required>
        <div>
            <p class="name-help">Please enter your prename:</p>
        </div>
        <input type="text" class="street" name="street" placeholder="Street" required>
        <div>
            <p class="name-help">Please enter your street:</p>
        </div>
        <input type="text" class="zip" name="zip" placeholder="Zip" required>
        <div>
            <p class="name-help">Please enter your zip:</p>
        </div>
        <input type="text" class="city" name="city" placeholder="City" required>
        <div>
            <p class="name-help">Please enter your city:</p>
        </div>
        <input type="text" class="email" name="email" placeholder="Email" required>
        <div>
            <p class="name-help">Please enter your email:</p>
        </div>
        <br>
        <input type="submit" class="submit" name="op" value="Send">
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