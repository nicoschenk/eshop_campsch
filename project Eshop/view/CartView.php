<!doctype html>
<!--
 * Created by PhpStorm.
 * User: nico.schenk
 * Date: 18.12.2015
 * Time: 11:27
 */
 -->
<html>
    <head>
        <title>Campsch Webshop Cart</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
    <!-- Wrapper -->
    <div id="wrapper">
        <div class="shell">
            <!-- Header -->
            <div id="header">
                <!-- Logo -->
                <h1 id="logo"><a title="home" href="../index.php?op=BacktoShop">Abstract Pictures</a></h1>
                <div id="cart">
                    <p><a title="logout" id="op" href="../index.php?op=logout">Logout</a></p>
                </div>
            </div>
            <br>
        </div>
        <!-- END Header -->
        <!--Main-->
        <div class="wrapper1">
            <br>
            <h1>These products are in your basket:</h1>


            <?php
			session_start();
			//falls session Variable products lehr ist (keine Produkte im Warenkorb)
			if(!isset($_SESSION['products'])){
				echo "No products in Shopping cart"."<br>";
			}
			else{
				/* wenn die $_SESSION['products'] array nicht lehr ist 
				soll sie mit dem Trennzeichen neue Zeile (<br>) ausgegeben werden */
				echo implode("<br>",$_SESSION['products']);
				echo "<br>";
            }
			?>
		<br>
                <form action="../index.php" method="get">
                    <input type="submit" class="submit" name="op"  value="Order">
                </form>
		<br>
				<form action="../index.php" method="post">
					<input type="submit" class="submit" name="op" value="Back to Shop">
				</form>
            </div>
        </div>
        <div id="footer-push"></div>
        <!-- END Wrapper -->
        <!-- Footer -->
            <p class="optimize">
                Optimized for Firefox!
            </p>
            <div id="footer">
                <p>Copyright &copy; Company Campsch 2015. All Rights Reserved. Design by: Nico Schenk & Thomas Campbell</p>
            </div>
        <!-- END Footer -->
    </body>
</html>
