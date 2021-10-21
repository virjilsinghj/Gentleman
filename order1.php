<!DOCTYPE html>
<html lang="en">
<title>Order Form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="Order Form">
<meta name="description" content="This is for placing the order">
<link rel="stylesheet" href="css/T1.css">

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
            <div id="Me">
                <form action="order.php" method="POST">

                    <!--PERSONAL INFORMATION -->
                    <fieldset>
                        <legend>Personal Information</legend>
                        <label>Name:<input class="vj-input vj-border" type="text" placeholder="Name" name="fName"
                                required size=25 />

                            <label>Phone Number:<input class="vj-input vj-border" type="number" placeholder="Number"
                                    name="Phone_Number" size=25 />


                    </fieldset>

                    <!--ORDER DETAILS -->
                    <fieldset>
                        <legend>Order Details</legend>
                        <label>Place order:</label>
                        <select id="Item" name="Item" required>
                            <option selected>Select item</option>
                            <option value="Beard oil">Beard oil</option>
                            <option value="Sunglasses">Sunglasses</option>
                            <option value="Shoes">Shoes</option>
                            <option value="socks">socks</option>
                            <option value="Beard Comb">Beard Comb</option>
                            <option value="Designer Jeans">Designer Jeans</option>
                            <option value="Designer shirt">Designer shirt</option>
                            <option value="Beard Trimmer">Beard Trimmer</option>
                        </select>
                        <select name="Quantity" required>
                            <option>Select Quantity</option>

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <br>
                        <label>Place order:</label>
                        <select name="Item1">
                            <option>Select item</option>
                            <option value="Beard oil">Beard oil</option>
                            <option value="Sunglasses">Sunglasses</option>
                            <option value="Shoes">Shoes</option>
                            <option value="socks">socks</option>
                            <option value="Beard Comb">Beard Comb</option>
                            <option value="Designer Jeans">Designer Jeans</option>
                            <option value="Designer shirt">Designer shirt</option>
                            <option value="Beard Trimmer">Beard Trimmer</option>
                        </select>

                        <select name="Quantity1">
                            <option>Select Quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>

                        </select>
                    </fieldset>
                    <fieldset>
                        <legend>Product</legend>
                        <div class="slideshow-container  ">


                            <div class="mySlides fade  ">
                                <span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Beard oil';
                                         include('rating.php');
                                         ?>
                                </span>
                                <div class="numbertext  vj-tag vj-black ">1 / 8</div>
                                <div class="vj-center"><img src="images/Beard_oil.jpg" class="vj-center"
                                        style="width:25%" alt="A beard oil image">
                                    <span class="vj-tag vj-black vj-display-topleft1"><?php
                                         
                                         $Items='Beard oil';
                                         include('Quantity.php');
                                         ?></span>

                                </div>


                            </div>

                            <div class="mySlides fade">
                                <span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Sunglasses';
                                         include('rating.php');
                                         ?>
                                </span>
                                <div class="numbertext vj-tag vj-black ">2 / 8</div>
                                <div class="vj-center"><img src="images/Sunglasses.jpg" style="width:25%"
                                        alt="A sunglass image">
                                    <span class="vj-tag vj-black vj-display-topleft1"><?php
                                         
                                         $Items='Sunglasses';
                                         include('Quantity.php');
                                         ?></span>
                                </div>
                            </div>

                            <div class="mySlides fade">
                                <span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Shoes';
                                         include('rating.php');
                                         ?>
                                </span>
                                <div class="numbertext vj-tag vj-black">3 / 8</div>
                                <div class="vj-center"><img src="images/Shoes.jpg" style="width:25%" alt="A Shoe image">
                                    <span class="vj-tag vj-black vj-display-topleft1"><?php
                                         
                                         $Items='Shoes';
                                         include('Quantity.php');
                                         ?></span>
                                </div>
                            </div>
                            <div class="mySlides fade">
                                <span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='socks';
                                         include('rating.php');
                                         ?>
                                </span>
                                <div class="numbertext vj-tag vj-black">4 / 8</div>
                                <div class="vj-center"><img src="images/socks.jpg" style="width:25%" alt="A sock">
                                    <span class="vj-tag vj-black vj-display-topleft1"><?php
                                         
                                         $Items='socks';
                                         include('Quantity.php');
                                         ?></span>
                                </div>
                            </div>
                            <div class="mySlides fade">
                                <span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Beard Comb';
                                         include('rating.php');
                                         ?>
                                </span>
                                <div class="numbertext  vj-tag vj-black ">5 / 8</div>
                                <div class="vj-center"><img src="images/Comb.jpg" style="width:25%" alt="A hair comb">
                                    <span class="vj-tag vj-black vj-display-topleft1"><?php
                                         
                                         $Items='Beard Comb';
                                         include('Quantity.php');
                                         ?></span>
                                </div>

                            </div>

                            <div class="mySlides fade">
                                <span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Designer Jeans';
                                         include('rating.php');
                                         ?>
                                </span>
                                <div class="numbertext vj-tag vj-black ">6 / 8</div>
                                <div class="vj-center"> <img src="images/Jeans.jpg" style="width:25%"
                                        alt="A model wearing a jeans pant">
                                    <span class="vj-tag vj-black vj-display-topleft1"><?php
                                         
                                         $Items='Designer Jeans';
                                         include('Quantity.php');
                                         ?></span>
                                </div>
                            </div>

                            <div class="mySlides fade">
                                <span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Designer shirt';
                                         include('rating.php');
                                         ?>
                                </span>
                                <div class="numbertext vj-tag vj-black">7 / 8</div>
                                <div class="vj-center"> <img src="images/shirts.jpg" style="width:25%"
                                        alt="A Designer shirt">
                                    <span class="vj-tag vj-black vj-display-topleft1"><?php
                                         
                                         $Items='Designer shirt';
                                         include('Quantity.php');
                                         ?></span>
                                </div>
                            </div>
                            <div class="mySlides fade">
                                <span class="vj-tag vj-right vj-whitee"><?php
                                         
                                         $Items='Beard Trimmer';
                                         include('rating.php');
                                         ?>
                                </span>
                                <div class="numbertext vj-tag vj-black">8 / 8</div>
                                <div class="vj-center"> <img src="images/Trimmer.jpg" style="width:25%"
                                        alt="A Beard trimmer">
                                    <span class="vj-tag vj-black vj-display-topleft1"><?php
                                         
                                         $Items='Beard Trimmer';
                                         include('Quantity.php');
                                         ?></span>
                                </div>
                            </div>

                            <a class="prev vj-tag vj-black" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next vj-tag vj-black" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                    </fieldset>

                    <fieldset>

                        <legend>Expected Delivery DATE</legend>
                        <label>Delivery Date:</label><input type="date" name="date" required />
                        <label>Delivery Time:</label><input type="time" name="time" required />
                    </fieldset>
                    <fieldset>
                        <legend>Payment</legend>
                        <select name="payment" required>
                            <option>Select Payment Option</option>
                            <option value="Google pay">Google pay</option>
                            <option value="PhonePe">PhonePe</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                            <option value="Cash on Delivery">Cash on Delivery</option>
                        </select>
                    </fieldset>



                    <!--SPECIAL INSTRUCTIONS -->

                    <fieldset>
                        <legend>Special Instructions</legend>
                        <textarea name="instructions" rows="3" cols="42"></textarea>
                    </fieldset>

                    <!--BUTTONS -->

                    <input type="submit" class="vj-button vj-Green vj-margin-bottom" value="PLACE YOUR ORDER" />
                    <input type="reset" class="vj-button vj-red  vj-margin-bottom " value="START OVER" />




                </form>


            </div>
        </header>


        <!-- Product grid -->
        <!-- Footer -->
        <?php { include('footer.php');} ?>
        <!-- End page content -->
    </div>
    <script src="js/Home.js">

    </script>
</body>

</html>