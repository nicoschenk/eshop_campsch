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
        <title>Campsch Webshop</title>
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
                    <p><a title="shopping bag" name="op" href="../index.php?op=view-Item">Shopping Cart:&nbsp;

                            <!-- wenn die session Varible 'prodAmount' (anzahl Produkte) lehr ist soll 0 ausgegeben
                            werden, sonst die gesetzte Anzahl Produkte im Warenkorb-->
                            <?php session_start(); if(!isset($_SESSION['prodAmount'])){echo "0";
                            }else{echo $_SESSION['prodAmount'];} ?> items</a></p>

                 <p><a title="logout" name="op" href="../index.php?op=logout">Logout</a></p>
                </div>
            </div>
        </div>
    </div>
        <!-- END Header -->
        <!-- Main -->
        <div id="main">
            <!-- Products -->
            <div class="products">
                <div class="product-frame">
                    <div class="product">
                        <a title="Add product" class="add-button" href="../index.php?op=add-Item&amp;pr=1">Buy Product</a>
                        <div class="img-holder">
                            <a title="Add product" href="#"><img src="../images/1.jpg" alt="Images of product" /></a>
                        </div>
                        <div class="price-box">
                            <p class="price"><span class="money">Fr.</span> 99<sup>.95</sup></p>
                        </div>
                        <div class="product-entry">
                            <p class="model" id="productName">Abstract<br /> World Card</p>
                            <p class="model"><span>product: 48</span></p>
                            <p class="product-info">
                                Total size: 200x100cm<br>
                                12mm thick wooden slats<br>
                                Smudge-proof & waterproof<br>
                                Fast & secure shipment !<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product-frame">
                    <div class="product">
                        <a title="Add product" class="add-button" href="../index.php?op=add-Item&amp;pr=2">Buy Product</a>
                        <div class="img-holder">
                            <a title="Add product" href="#"><img src="../images/2.jpg" alt="Images of product" /></a>
                        </div>
                        <div class="price-box">
                            <p class="price"><span class="money">Fr.</span> 89<sup>.95</sup></p>
                        </div>
                        <div class="product-entry">
                            <p class="model">Waterfall<br /> Thailand</p>
                            <p class="model"><span>product: 57</span></p>
                            <p class="product-info">
                                Total size: 200x100cm<br>
                                12mm thick wooden slats<br>
                                Smudge-proof & waterproof<br>
                                Fast & secure shipment !<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product-frame">
                    <div class="product">
                        <a title="Add product" class="add-button" href="../index.php?op=add-Item&amp;pr=3">Buy Product</a>
                        <div class="img-holder">
                            <a title="Add product" href="#"><img src="../images/3.jpg" alt="Images of product" /></a>
                        </div>
                        <div class="price-box">
                            <p class="price"><span class="money">Fr.</span> 79<sup>.95</sup></p>
                        </div>
                        <div class="product-entry">
                            <p class="model">Abstract<br /> City</p>
                            <p class="model"><span>product: 99</span></p>
                            <p class="product-info">
                                Total size: 200x100cm<br>
                                12mm thick wooden slats<br>
                                Smudge-proof & waterproof<br>
                                Fast & secure shipment !<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product-frame">
                    <div class="product">
                        <a title="Add product" class="add-button" href="../index.php?op=add-Item&amp;pr=4">Buy Product</a>
                        <div class="img-holder">
                            <a title="Add product" href="#"><img src="../images/4.jpg" alt="Images of product" /></a>
                        </div>
                        <div class="price-box">
                            <p class="price"><span class="money">Fr.</span> 99<sup>.95</sup></p>
                        </div>
                        <div class="product-entry">
                            <p class="model">Abstract<br /> New York</p>
                            <p class="model"><span>product: 66</span></p>
                            <p class="product-info">
                                Total size: 200x100cm<br>
                                12mm thick wooden slats<br>
                                Smudge-proof & waterproof<br>
                                Fast & secure shipment !<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product-frame">
                    <div class="product">
                        <a title="Add product" class="add-button" href="../index.php?op=add-Item&amp;pr=5">Buy Product</a>
                        <div class="img-holder">
                            <a title="Add product" href="#"><img src="../images/5.jpg" alt="Images of product" /></a>
                        </div>
                        <div class="price-box">
                            <p class="price"><span class="money">Fr.</span> 90<sup>.00</sup></p>
                        </div>
                        <div class="product-entry">
                            <p class="model">Abstract<br /> Nature</p>
                            <p class="model"><span>product: 12</span></p>
                            <p class="product-info">
                                Total size: 200x100cm<br>
                                12mm thick wooden slats<br>
                                Smudge-proof & waterproof<br>
                                Fast & secure shipment !<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product-frame">
                    <div class="product">
                        <a title="Add product" class="add-button" href="../index.php?op=add-Item&amp;pr=6">Buy Product</a>
                        <div class="img-holder">
                            <a title="Add product" href="#"><img src="../images/6.jpg" alt="Images of product" /></a>
                        </div>
                        <div class="price-box">
                            <p class="price"><span class="money">Fr.</span> 75<sup>.95</sup></p>
                        </div>
                        <div class="product-entry">
                            <p class="model">Abstract<br /> Lion</p>
                            <p class="model"><span>product: 15</span></p>
                            <p class="product-info">
                                Total size: 200x100cm<br>
                                12mm thick wooden slats<br>
                                Smudge-proof & waterproof<br>
                                Fast & secure shipment !<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product-frame">
                    <div class="product">
                        <a title="Add product" class="add-button" href="../index.php?op=add-Item&amp;pr=7">Buy Product</a>
                        <div class="img-holder">
                            <a title="Add product" href="#"><img src="../images/7.jpg" alt="Images of product" /></a>
                        </div>
                        <div class="price-box">
                            <p class="price"><span class="money">Fr.</span> 69<sup>.00</sup></p>
                        </div>
                        <div class="product-entry">
                            <p class="model">Sea<br /> Sunset</p>
                            <p class="model"><span>product: 62</span></p>
                            <p class="product-info">
                                Total size: 200x100cm<br>
                                12mm thick wooden slats<br>
                                Smudge-proof & waterproof<br>
                                Fast & secure shipment !<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product-frame">
                    <div class="product">
                        <a title="Add product" class="add-button" href="../index.php?op=add-Item&amp;pr=8">Buy Product</a>
                        <div class="img-holder">
                            <a title="Add product" href="#"><img src="../images/8.jpg" alt="Images of product" /></a>
                        </div>
                        <div class="price-box">
                            <p class="price"><span class="money">Fr.</span> 99<sup>.95</sup></p>
                        </div>
                        <div class="product-entry">
                            <p class="model">Nature<br /> Buddha</p>
                            <p class="model"><span>product: 34</span></p>
                            <p class="product-info">
                                Total size: 200x100cm<br>
                                12mm thick wooden slats<br>
                                Smudge-proof & waterproof<br>
                                Fast & secure shipment !<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product-frame">
                    <div class="product">
                        <a title="Add product" class="add-button" href="../index.php?op=add-Item&amp;pr=9">Buy Product</a>
                        <div class="img-holder">
                            <a title="Add product" href="#"><img src="../images/9.jpg" alt="Images of product" /></a>
                        </div>
                        <div class="price-box">
                            <p class="price"><span class="money">Fr.</span> 89<sup>.00</sup></p>
                        </div>
                        <div class="product-entry">
                            <p class="model">New York<br /> Night</p>
                            <p class="model"><span>product: 82</span></p>
                            <p class="product-info">
                                Total size: 200x100cm<br>
                                12mm thick wooden slats<br>
                                Smudge-proof & waterproof<br>
                                Fast & secure shipment !<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- END Products -->
    <div id="footer-push"></div>
    <!-- END Wrapper -->
    <!-- Footer -->
                <p class="optimize">
                    Optimized for Firefox!
                </p>
    <div id="footer">
            <p>
				<img id="html" src="../images/html.png" alt="html5 validated" />
				Copyright &copy; Company Campsch 2015. All Rights Reserved. Design by: Nico Schenk & Thomas Campbell
			</p>
    </div>
    <!-- END Footer -->
    </body>
</html>
