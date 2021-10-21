<!DOCTYPE html>
<html lang="en">
<title>About</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="About Gentleman">
<meta name="description" content="This is how we started our firm">
<link rel="stylesheet" href="css/T1.css">

<head>
    <style>
       .Div_Width{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        height:20%;
        }
        #table1{
            border-spacing: 15px 50px;
        }
        #table2{
            border-spacing: 20px 20px;
            color:gray;
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
            <div class="slideshow-container  ">
                <div class="mySlides fade">
                    <div class="numbertext  vj-tag vj-black ">1 / 4</div>
                    <img src="images/l1.jpg" class="Div_Width" 
                        alt="A Gentleman a designer stubble and a custom made coat">

                </div>
                <div class="mySlides fade">
                    <div class="numbertext vj-tag vj-black">2 / 4</div>
                    <img src="images/l2.jpg" class="Div_Width"   alt="A Gentleman sporting a t-shirt and a jeans">

                </div>
                <div class="mySlides fade">
                    <div class="numbertext vj-tag vj-black">3 / 4</div>
                    <img src="images/l3.jpg" class="Div_Width" 
                        alt="A Gentleman sporting a coat with a pair of leather shoes and other accessories">

                </div>
                <div class="mySlides fade">
                    <div class="numbertext vj-tag vj-black">4 / 4</div>
                    <img src=" images/l4.jpg" class="Div_Width"  alt="A Gentleman sporting a leather Jacket">

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
            
            <div>
                <h1 class="vj=center vj-wide vj-black   ">
                    <center>OUR VISION</center>
                </h1>
                <br>
                <h6>
                    <table id ="table2">
                    <tr>
                        <td>
                We were tired of beards being left to kitschy, cheap products. We felt these items are the reason
                    many people think that beards are a fad. Gentleman wants to bring high quality products for
                    beardsmen. Our grooming products use natural products and we want our customers to have a positive
                    experience with their beards - crappy products don't help in that regard.
    </td>    
                </tr> 
                    <tr>
                        <td>
                    In addition to providing great products and service, we want to change the way society looks at
                    beardsmen. There are still organizations who require men to shave, and there is negative terminology
                    used towards beardsmen that still lingers in our culture. For instance, the term "clean-shaven"
                    should be "completely-shaven" or "beardless."
    </td>
                    </tr> 
                    <tr>
                        <td>
                    These changes take time, but progress is being made. Recently Disney eased their policy on beards
                    and other companies are joining suit. We can't do this alone, and we need you to help us change
                    society. Connect with us by joining the mailing list below, and most importantly - beard on!</h6>
    </td>
                </tr>    
                </table>   
                </h6>
                <br>
                <h2 class="vj-black">
                    <center>OUR GUIDING STATEMENTS</center>
                </h2>
                <table id="table1">
                    <tr>
                    <td>
                    <strong> VISION STATEMENT:</strong>
                    </td>
                    <td>
                    To change the way society views beardsmen.
                    </td>
    </tr>
    <tr>
                    <td>
                    <strong>MISSION STATEMENT: </strong>
                    </td>
                    <td>
                    To make men awesome.
                    </td>
    </tr>
               
    </table>
    <div>    
        <!-- Product grid -->
        <!-- Footer -->
        <?php { include('footer.php');} ?>
        <!-- End page content -->
    </div>
    </header>
    <script src="js/Home.js">
    </script>
</body>

</html>