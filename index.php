<!DOCTYPE html>
<html lang="en">
<title>HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="Mens Grooming||Beard Grooming|| Hair care||gentleman">
<meta name="description" content="This store is exclusively for men">
<link rel="stylesheet" href="css/T1.css">

<head>
    <style>
        .vj-whitee{
            color:tomato;
        }
        .vj-lavendar{
            color: smokywhite !important;
            background-color: tomato !important;
        }
        </style>
</head>

<body class="vj-content" style="max-width:1200px">
    <!-- Sidebar/menu -->
    <!-- Top menu on small screens -->
    <!-- Overlay effect when opening sidebar on small screens -->
    <?php { include('scroll.html');
    include('gentleman.html'); } 
    ?>
    <!-- !PAGE CONTENT! -->
    <div class="vj-main" style="margin-left:250px">
        <!-- Push down content on small screens -->
        <div class="vj-hide-large" style="margin-top:83px"></div>
        <!-- Top header -->
        <header class="vj-container vj-padding vj-xlarge ">
            <?php { include('button.html');} ?>
            <!-- Image header -->
            <div class="slideshow-container  ">


                <div class="mySlides fade">
                    <div class="numbertext  vj-tag vj-black ">1 / 4</div>
                    <img src="images/k1.jpg" style="width:100%" alt="A Group photograph with all our associate's">

                </div>

                <div class="mySlides fade">
                    <div class="numbertext vj-tag vj-black">2 / 4</div>
                    <img src="images/k2.jpg" style="width:100%" alt="A Group photograph with all our associate's">

                </div>

                <div class="mySlides fade">
                    <div class="numbertext vj-tag vj-black">3 / 4</div>
                    <img src="images/k3.jpg" style="width:100%" alt="A Group photograph with all our associate's">

                </div>
                <div class="mySlides fade">
                    <div class="numbertext vj-tag vj-black">4 / 4</div>
                    <img src=" images/k4.jpg" style="width:100%" alt="A Group photograph with some of our associate's">

                </div>


                <div class="vj-display-topleft vj-text-white" style="padding:24px 48px">
                    <h1 class="vj-jumbo vj-hide-small ">New arrivals</h1>
                    <h1 class="vj-hide-large vj-hide-medium ">New arrivals</h1>
                    <h1 class="vj-hide-small ">COLLECTION 2021</h1>
                    <p><a href="#sales" class=" vj-tag " style="font-size: 15px;">SHOP NOW</a></p>
                </div>
                <a class="prev vj-tag vj-black" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next vj-tag vj-black" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
            <div id=sales>
                <p class=" vj-black">
                <H4 class="vj-black vj-wide "><b>
                        <center>BEST SELLERS</center>
                    </b></H4>
                </p>
            </div>
            </br>
            <!-- Product grid -->
            <div class="vj-row "><a href="Log in.php">
                    <div class="vj-col l3 s6">
                        <div class="vj-container"><span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Beard oil';
                                         include('rating.php');
                                         ?>
                            </span>
                            <img src="images/Beard_oil.jpg" style="width:100%" alt="A beard oil image">
                            <span class="vj-tag vj-black"><?php
                                         
                                         $Items='Beard oil';
                                         include('Quantity.php');
                                         ?></span>
                            <div class="vj-center vj-lavendar vj-whitee">Beard oil<b><br>&#8377 500
                                </b>
                            </div>
                        </div>
                        </br>
                        <div class="vj-container">
                            <span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Sunglasses';
                                         include('rating.php');
                                        ?></span>
                            <img src="images/Sunglasses.jpg" style="width:100%" alt="A sunglass image">
                            <span class="vj-tag vj-black"><?php
                                         
                                         $Items='Sunglasses';
                                         include('Quantity.php');
                                         ?></span>
                            <div class="vj-center vj-lavendar">Sunglasses<br><b>&#8377 2,500</b></div>
                        </div>
                    </div>
                    <div class="vj-col l3 s6">
                        <div class="vj-container">
                            <div class="vj-display-container"><span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Shoes';
                                         include('rating.php');
                                         ?>
                                </span>
                                <img src="images/Shoes.jpg" style="width:100%" alt="A Shoe image">
                                <span class="vj-tag vj-display-topleft">New</span>
                            </div>
                            <span class="vj-tag vj-black"><?php
                                         
                                         $Items='Shoes';
                                         include('Quantity.php');
                                         ?></span>
                            <div class="vj-center vj-lavendar">Shoes<br><b>&#8377 1,500</b></div>
                        </div>
                        </br>
                        <div class="vj-container"><span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='socks';
                                         include('rating.php');
                                         ?>
                            </span>
                            <img src="images/socks.jpg" style="width:100%" alt="A sock">
                            <span class="vj-tag vj-black"><?php
                                         
                                         $Items='socks';
                                         include('Quantity.php');
                                         ?></span>
                            <div class="vj-center vj-lavendar ">Socks<br><b>&#8377 200</b></div>
                        </div>
                    </div>
                    <div class="vj-col l3 s6">
                        <div class="vj-container">
                            <span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Beard Comb';
                                         include('rating.php');
                                         ?>
                            </span>
                            <img src="images/Comb.jpg" style="width:100%" alt="A hair comb">
                            <span class="vj-tag vj-black"><?php
                                         
                                         $Items='Beard Comb';
                                         include('Quantity.php');
                                         ?></span>
                            <div class="vj-center vj-lavendar">Beard Comb<br><b>&#8377 600</b></div>
                        </div>
                        </br>
                        <div class="vj-container">
                            <div class="vj-display-container">
                                <span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Designer Jeans';
                                         include('rating.php');
                                         ?>
                                </span>
                                <img src="images/Jeans.jpg" alt="This is a pair of jeans" style="width:100%"
                                    alt="A model wearing a jeans pant">
                                <span class="vj-tag vj-display-topleft">Sale</span>
                            </div>
                            <span class="vj-tag vj-black"><?php
                                         
                                         $Items='Designer Jeans';
                                         include('Quantity.php');
                                         ?></span>
                            <div class="vj-center vj-lavendar">Designer Jeans<br><b>&#8377 1,000</b></div><a
                                href="Log in.php"></a>
                        </div>
                    </div>

                    <div class="vj-col l3 s6">
                        <div class="vj-container"><span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Designer shirt';
                                         include('rating.php');
                                         ?>
                            </span>
                            <img src="images/shirts.jpg" style="width:100%" alt="A Designer shirt">
                            <span class="vj-tag vj-black"><?php
                                         
                                         $Items='Designer shirt';
                                         include('Quantity.php');
                                         ?></span>
                            <div class="vj-center vj-lavendar">Designer shirts<br><b>&#8377 700</b></div>
                        </div>
                        </br>
                        <div class="vj-container">
                            <span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Beard Trimmer';
                                         include('rating.php');
                                         ?>
                            </span>
                            <img src="images/Trimmer.jpg" style="width:100%" alt="A Beard trimmer">
                            <span class="vj-tag vj-black"><?php
                                         
                                         $Items='Beard Trimmer';
                                         include('Quantity.php');
                                         ?></span>
                            <div class="vj-center vj-lavendar">Beard Trimmer<br><b>&#8377 1,800</b></div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Footer -->
            <?php { include('footer.php');} ?>
            <!-- End page content -->
    </div>
    <script src="js/Home.js">
    </script>
</body>

</html>