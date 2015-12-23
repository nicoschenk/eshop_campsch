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
        <title>Campsch Webshop UserList</title>
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
                        <p><a title="logout" name="op" href="../index.php?op=logout">Logout</a></p>
                    </div>
                    <br>
                </div>
            </div>
            <!-- END Header -->
        <!--Main-->
            <div class="wrapper1">
                <br>
                <h1>These users are registered in our shop:</h1>
            <div>
               <?php
				include_once '../controller/UserController.php';
        		$user_controller = new UserController();
				$user_controller->listUsers();
                ?>
		<br>
            </div>
			    <form action="../index.php" method="post">
					<input type="submit" class="submit" name="op" value="Back">
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
